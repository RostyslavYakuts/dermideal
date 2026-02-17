<?php
namespace di\App\Core\Handlers;


use di\App\Core\Services\EmailSender;

class AjaxHandler
{
    public function __construct(){
        add_action('wp_ajax_nopriv_contacts_form_action', [$this, 'contacts_form_action']);
        add_action('wp_ajax_contacts_form_action', [$this, 'contacts_form_action']);
    }

    public function contacts_form_action(): void
    {
        // Check nonce
        if (empty($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'contacts_form_action')) {
            wp_send_json_error([
                'post'=> $_POST,
                'files'=> $_FILES,
                'message' => '<h3 class="text-[24px] font-bold">Warning!</h3> <span>Security check failed.</span>'
            ]);
        }

        $file_check = $this->validate_file($_FILES);
        if (!$file_check['valid']) {
            wp_send_json_error([
                'post' => $_POST,
                'files'=> $_FILES,
                'message' => $file_check['message']
            ]);
        }




        // Sanitize input
        $name = sanitize_text_field($_POST['user_name'] ?? '');
        $email = sanitize_email($_POST['user_email'] ?? '');
        $phone = sanitize_text_field($_POST['user_phone'] ?? '');
        $user_phone_code = sanitize_text_field($_POST['user_phone_code'] ?? '');
        $user_country_code = sanitize_text_field($_POST['user_country_code'] ?? '');
        $message = sanitize_textarea_field($_POST['user_message'] ?? '');
        $utm = sanitize_textarea_field($_POST['utm'] ?? '');
        $token = sanitize_text_field($_POST['recaptcha_token'] ?? '');

        // Validate required fields
        if ((strlen($name) < 2 && strlen($name) > 0) || strlen($phone < 6) || !is_email($email) || (strlen($message) > 0 && strlen($message) < 10)) {
            wp_send_json_error([
                'post'=> $_POST,
                'files'=> $_FILES,
                'message' => '<h3 class="text-[20px] lgx:text-[24px] font-bold">Please</h3> <span class="block">fill out all fields correctly.</span>'
            ]);
        }

        // Validate reCAPTCHA (v3)
        $secret_key = get_field('recaptcha_secret_key', 'options');

        $response = wp_remote_post('https://www.google.com/recaptcha/api/siteverify', [
            'body' => [
                'secret' => $secret_key,
                'response' => $token,
                'remoteip' => $_SERVER['REMOTE_ADDR'] ?? '',
            ],
        ]);

        if (is_wp_error($response)) {
            wp_send_json_error([
                'post'=> $_POST,
                'files'=> $_FILES,
                'message' => '<h3 class="text-[20px] lgx:text-[24px] font-bold">reCAPTCHA</h3> <span class="block">request failed.</span>'
            ]);
        }

        $result = json_decode(wp_remote_retrieve_body($response), true);
        if ( empty($result['success']) || $result['score'] < 0.5) {
            wp_send_json_error([
                'post'=> $_POST,
                'files'=> $_FILES,
                'recaptcha_result' => $result,
                'message' => '<h3 class="text-[20px] lgx:text-[24px] font-bold">reCAPTCHA</h3> <span class="block">verification failed.</span> '
            ]);
        }
        // Store user data
        $post_id = wp_insert_post([
            'post_type'   => 'contact',
            'post_title'  => 'Info from '.$email,
            'post_status' => 'publish',
        ], true);
        $file_path = null;
        if ($post_id) {
            if ($file_check['valid'] && !empty($file_check['file'])) {
                $file_result = $this->handle_uploaded_file($file_check['file'], $post_id);
                if ($file_result['attach_id']) {
                    update_field('file', $file_result['attach_id'], $post_id);
                    $file_path = $file_result['file_path']; // pass to email
                }
            }
            update_post_meta($post_id, 'name',$name);
            update_post_meta($post_id, 'email',$email);
            update_post_meta($post_id, 'phone',$phone);
            update_post_meta($post_id, 'utm',$utm);
            update_post_meta($post_id, 'message',$message);
            update_post_meta($post_id, 'date',date_i18n( 'm/d/Y h:i a', current_time( 'timestamp' ) ) );
        }
        // Send email
        $name = $name ?? 'User without name';
        $full_phone = $user_country_code . $user_phone_code . $phone;
        $sent = EmailSender::send_data( [
            'user_name'=>$name,
            'user-email'=>$email,
            'user_phone'=>$phone,
            'full_phone'=>$full_phone,
            'user_file'=>$file_path ?? ''
        ], $email);

        if (!$sent) {
            wp_send_json_error([
                'post'=> $_POST,
                'files'=> $_FILES,
                'message' => '<h3 class="text-[20px] lgx:text-[24px] font-bold">Failed to send email!</h3> <span class="block">Please try again later.</span>'
            ]);
        }

        wp_send_json_success([
            'post'=> $_POST,
            'files'=> $_FILES,
            'message' => '<h3 class="text-[20px] lgx:text-[24px] font-bold">Thank you!</h3> <span class="block">Your message was sent successfully.</span>'
        ]);
    }
    private function validate_file(array $files): array
    {
        if (
            empty($files['file']) ||
            $files['file']['error'] === UPLOAD_ERR_NO_FILE
        ) {
            return [
                'valid' => true,
                'message' => 'ok',
                'file' => null
            ];
        }

        $file = $files['file'];

        if ($file['error'] !== UPLOAD_ERR_OK) {
            return [
                'valid' => false,
                'message' => '<h3 class="text-[24px] font-bold">Warning!</h3> <span>File upload error.</span>',
                'file' => null
            ];
        }

        $allowed_types = ['text/plain', 'image/jpeg', 'image/png', 'application/pdf'];
        $max_size = 2 * 1024 * 1024;

        if (!in_array($file['type'], $allowed_types, true)) {
            return [
                'valid' => false,
                'message' => '<h3 class="text-[24px] font-bold">Warning!</h3> <span>Invalid file type. Only TXT, JPG, PNG, PDF allowed.</span>',
                'file' => null
            ];
        }

        if ($file['size'] > $max_size) {
            return [
                'valid' => false,
                'message' => '<h3 class="text-[24px] font-bold">Warning!</h3> <span>File size exceeds 2MB limit.</span>',
                'file' => null
            ];
        }

        return [
            'valid' => true,
            'message' => 'ok',
            'file' => $file
        ];
    }
    private function handle_uploaded_file(array $file, int $post_id): array
    {
        if(!$file){
            return[];
        }
        $result = [
            'attach_id' => null,
            'file_path' => null,
        ];

        if (empty($file) || $file['error'] !== UPLOAD_ERR_OK) {
            return $result;
        }

        $upload = wp_upload_dir();
        $target_dir = trailingslashit($upload['path']);
        $filename = wp_unique_filename($target_dir, sanitize_file_name($file['name']));
        $target_file = $target_dir . $filename;

        if (!move_uploaded_file($file['tmp_name'], $target_file)) {
            return $result;
        }

        $file_url = trailingslashit($upload['url']) . $filename;
        $filetype = wp_check_filetype(basename($target_file), null);

        $attachment = [
            'guid'           => $file_url,
            'post_mime_type' => $filetype['type'],
            'post_title'     => sanitize_file_name($file['name']),
            'post_content'   => '',
            'post_status'    => 'inherit',
        ];

        $attach_id = wp_insert_attachment($attachment, $target_file, $post_id);
        require_once(ABSPATH . 'wp-admin/includes/image.php');
        $attach_data = wp_generate_attachment_metadata($attach_id, $target_file);
        wp_update_attachment_metadata($attach_id, $attach_data);

        $result['attach_id'] = $attach_id;
        $result['file_path'] = $target_file;

        return $result;
    }

}