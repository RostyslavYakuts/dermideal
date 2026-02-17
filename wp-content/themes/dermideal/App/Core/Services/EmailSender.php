<?php
namespace di\App\Core\Services;


if (!defined('ABSPATH')) {
    exit;
}
class EmailSender
{

    public static function send_data(array $sending_data, string $contact): bool
    {
        $html = file_get_contents(EMAIL_PATH . 'email.html');
        $src = IMAGES_PATH;
        $name = $sending_data['user_name'] ?: 'there';
        $email = $sending_data['user_email'];
        $full_phone = $sending_data['full_phone'];
        $year = Date('Y');

        $subject = 'From di Landing Page';
        $message = "Name: {$name}\nEmail: {$email}\nPhone: {$full_phone}";
        $html = str_replace(['{{src}}','{{name}}','{{email}}','{{year}}'], [
            $src,
            $name,
            $email,
            $year
        ], $html);
        $headers = [
            'From: It-Dev-Staff <' .   $contact . '>' . "\r\n",
            'Content-Type: text/html; charset=UTF-8',
        ];
        wp_mail($contact, $subject, $message, $headers);
        return wp_mail($email, $subject, $html, $headers);

    }
}