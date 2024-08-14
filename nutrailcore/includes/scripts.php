<?php
/**
 * Load core script
 */
if (!function_exists('nutrail_enqueue_script')) {
	function nutrail_core_theme_script()
	{
		$site_key       = nutrail_get_option('captcha_pubkey');
		$enable_captcha = nutrail_get_option('captcha_enable', false);
		$captcha_api    = 'https://www.google.com/recaptcha/api.js?badge=bottomleft&render='.$site_key;

		if (!nutrail_is_amp() && $enable_captcha && !empty($site_key)) {
			wp_enqueue_script('google-recaptcha', $captcha_api, null, 'v3', true);
			wp_localize_script('google-recaptcha', 'recaptcha', ['site_key' => $site_key]);
		}
	}

	add_action('wp_enqueue_scripts', 'nutrail_core_theme_script');
}

/**
 * Load theme script
 */
if (!function_exists('nutrail_enqueue_script') && NUTRAIL_CONFIG_LOADSCRIPT === true) {
	function nutrail_enqueue_script()
	{
		$version = wp_get_theme()->get('Version');

		wp_enqueue_style('nutrail-main', get_theme_file_uri('/dist/css/style.min.css'), null, $version);

		if (nutrail_is_amp()) {
			return;
		}

		wp_enqueue_script('nutrail-main', get_theme_file_uri('/dist/js/main.min.js'), null, $version, true);
		wp_enqueue_script('nutrail-runtime', get_theme_file_uri('/dist/js/runtime.min.js'), ['jquery-core'], $version, true);

		// Add variables to scripts
		wp_localize_script('nutrail-main', 'nutrail_params', [
			'ajaxurl'    => admin_url('admin-ajax.php'),
			'nonce'      => wp_create_nonce('nutrail_nonce'),
			'turbolinks' => nutrail_get_option('turbolinks', false),
		]);
	}

	add_action('wp_enqueue_scripts', 'nutrail_enqueue_script', 30);
}

/**
 * Add defer to javascript file for performance
 */
if (!function_exists('nutrail_script_defer_parsing')) {
	function nutrail_script_defer_parsing($url)
	{
		if (is_admin() || is_customize_preview()) {
			return $url;
		}

		if (str_contains($url, '.js')) {
			$defer = apply_filters('nutrail_filter_defer_parsing', [
				'wp-includes/js/jquery/jquery.min.js',
			]);

			foreach ($defer as $handle) {
				if (!str_contains($url, $handle)) {
					return "$url' defer='defer";
				}
			}
		}

		return $url;
	}
}

add_filter('clean_url', 'nutrail_script_defer_parsing');

if (!function_exists('nutrail_get_ajax_content')) {
	function nutrail_get_ajax_content()
	{
		if (nutrail_is_pjax()) {
			if (function_exists('nutrail_ajax_headers')) {
				nutrail_ajax_headers();
			}
		}
	}

	add_action('template_redirect', 'nutrail_get_ajax_content', 0);
}

if (!function_exists('nutrail_prefix_remove_scripts')) {
	function nutrail_prefix_remove_scripts()
	{
		if (nutrail_is_pjax()) {
			remove_all_actions('wp_head');
			remove_all_actions('wp_footer');
		}
	}

	add_action('wp_enqueue_scripts', 'nutrail_prefix_remove_scripts', PHP_INT_MAX);
}

/**
 * Google fonts.
 */
if (!function_exists('nutrail_google_fonts')) {
	function nutrail_google_fonts()
	{
		$common     = nutrail_get_option('config-common');
		$turbolinks = nutrail_get_option('turbolinks', false);

		if ($turbolinks) {
			echo '<script src="'.NUTRAIL_CORE_URL.'assets/libs/turbolinks/turbolinks.min.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>';
		}

		if (empty($common['font'])) {
			return;
		}
		if (nutrail_is_amp()):
			$font_url = 'https://fonts.googleapis.com/css?family='.$common['font'].'&display=swap';
			?>
            <!-- Google fonts -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link rel="stylesheet" href="<?php echo esc_url($font_url) ?>">
		<?php else: ?>
            <script>
                WebFontConfig = {
                    google: {
                        families: ['<?php echo esc_js($common['font']) ?>']
                    }
                };
            </script>
		<?php
		endif;
	}

	add_action('wp_head', 'nutrail_google_fonts');
}


/**
 * Remove svg
 */
remove_action('wp_body_open', 'wp_global_styles_render_svg_filters');