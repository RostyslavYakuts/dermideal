<?php

namespace di\App\Core;
class Enqueuer
{
	public function __construct()
	{
		$this->initialize();
	}

	public function initialize(): void
	{
		add_action('wp_enqueue_scripts', array($this, 'enqueue_files'));
		add_action('wp_default_scripts', array($this, 'remove_jquery_migrate'));
		add_action('wp_enqueue_scripts', array($this, 'remove_global_styles'));
		add_action('wp_enqueue_scripts', array($this, 'mp_ajax_localize_vars'));
		add_action('wp_enqueue_scripts', array($this, 'deregister_scripts_styles'));
		add_action('widgets_init', array($this, 'remove_recent_comments_style'));
		add_filter('style_loader_src', array($this, 'remove_wp_ver_css_js'));
		add_filter('script_loader_src', array($this, 'remove_wp_ver_css_js'));
		add_action('wp_enqueue_scripts', array($this,'dequeue_block_library_style'));
		if (!is_admin()) {
			add_filter('script_loader_tag', array($this, 'clean_script_tag'));
		}

	}

	public function remove_recent_comments_style(): void
	{
		global $wp_widget_factory;
		remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
	}
	public function dequeue_block_library_style(): void
	{
		wp_dequeue_style('wp-block-library');
	}



	// Remove wp version param from any enqueued scripts except admin
	public function remove_wp_ver_css_js($src)
	{
		if (is_admin()) {
			return $src;
		}
		if (strpos($src, 'ver=')) {
			$src = remove_query_arg('ver', $src);
		}
		return $src;
	}

	public function clean_script_tag($input): array|bool|string
	{
		if (!str_contains($input, 'wp-polyfill-fetch.min.js')) {
			return str_replace(array("type='text/javascript' ", "'"), array('', '"'), $input);
		}

		return false;
	}


	public function enqueue_files(): void
	{
		$dirJS = new \DirectoryIterator(get_stylesheet_directory() . '/assets/dist');
		foreach ($dirJS as $file) {

			if (pathinfo($file, PATHINFO_EXTENSION) === 'js') {
				$fullName = basename($file);
				$name = substr(basename($fullName), 0, strpos(basename($fullName), '.'));
				$js_version = date( 'ymd-Gis', filemtime( get_template_directory() . '/assets/dist/' . $fullName ) );
                if (str_contains($fullName, 'home')) {
                    if (is_front_page()) {
                        wp_enqueue_script($name, get_template_directory_uri() . '/assets/dist/' . $fullName, [], $js_version, true);
                    }
                    continue;
                }
                if (str_contains($fullName, 'shop')) {
                    if (is_shop()) {
                        wp_enqueue_script($name, get_template_directory_uri() . '/assets/dist/' . $fullName, [], $js_version, true);
                    }
                    continue;
                }
				wp_enqueue_script($name, get_template_directory_uri() . '/assets/dist/' . $fullName, [], $js_version, array(
					'in_footer' => true,
					'strategy'  => 'defer',
				));
			}
			if (pathinfo($file, PATHINFO_EXTENSION) === 'css') {

				$fullName = basename($file);
                $handle = 'css-' . md5($fullName);
				$css_version = date( 'ymd-Gis', filemtime( get_template_directory() . '/assets/dist/' . $fullName ) );
                if (str_contains($fullName, 'home')) {
                    if(is_front_page()){
                        wp_enqueue_style(
                            $handle,
                            get_template_directory_uri() . '/assets/dist/' . $fullName,
                            [],
                            filemtime(get_template_directory() . '/assets/dist/' . $fullName)
                        );
                    }
                    continue;
                }
                if (str_contains($fullName, 'shop')) {
                    if(is_shop()){
                        wp_enqueue_style(
                            $handle,
                            get_template_directory_uri() . '/assets/dist/' . $fullName,
                            [],
                            filemtime(get_template_directory() . '/assets/dist/' . $fullName)
                        );
                    }
                    continue;
                }
                wp_enqueue_style(
                    $handle,
                    get_template_directory_uri() . '/assets/dist/' . $fullName,
                    [],
                    $css_version);
			}

		}

        wp_enqueue_script(
            'gsap-js',
            'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js',
            [],
            '3.12.2',
            true
        );

        wp_enqueue_script(
            'iti-utils',
            'https://cdn.jsdelivr.net/npm/intl-tel-input@25.11.2/build/js/intlTelInput.min.js',
            [],
            '17.0.19',
            true
        );

        // intl-tel-input CSS + JS
        wp_enqueue_style(
            'intl-tel-input-css',
            'https://cdn.jsdelivr.net/npm/intl-tel-input@25.11.2/build/css/intlTelInput.css',
            [],
            '17.0.19'
        );
	}


	// Remove jquery migrate
	public function remove_jquery_migrate($scripts): void
	{
		if (isset($scripts->registered['jquery'])) {
			$script = $scripts->registered['jquery'];

			if ($script->deps) {
				$script->deps = array_diff($script->deps, array('jquery-migrate'));
			}
		}
	}


	public function deregister_scripts_styles(): void
	{
		wp_dequeue_style('thickbox');
		if (!is_admin() && !is_user_logged_in()) {
			wp_deregister_script('jquery');
			wp_deregister_script('wp-embed');
			wp_deregister_style('dashicons');
		}

	}


	/**
	 * Remove inline style wp
	 */

	public function remove_global_styles(): void
	{
		wp_dequeue_style('global-styles');
	}


	public function mp_ajax_localize_vars(): void
	{
		wp_localize_script('main', 'localizedScript', array(
				'ajax_url' => admin_url('admin-ajax.php'),
				'pk' =>  get_field('recaptcha_public_key', 'options'),
                'contacts_form_action' => 'contacts_form_action',
                'contacts_form_nonce' => wp_create_nonce('contacts_form_action'),
			)
		);

	}


}
