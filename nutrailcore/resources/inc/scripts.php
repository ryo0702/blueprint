<?php
/**
 * Load Script
 */
if (!function_exists('nutrail_enqueue_script')) {
    function nutrail_enqueue_script()
    {
	    $version = wp_get_theme()->get('Version');

        wp_enqueue_style('nutrail-main', get_theme_file_uri('/dist/css/style.min.css'), null, $version);

        if (nutrail_is_amp()) {
            return;
        }

        wp_enqueue_script('nutrail-main', get_theme_file_uri('/dist/js/main.min.js'), null, $version, true);
        wp_enqueue_script('nutrail-main', get_theme_file_uri('/dist/js/runtime.min.js'), ['jquery-core'], $version, true);

	    // Add variables to scripts
	    wp_localize_script('nutrail-main', 'nutrail_params', [
		    'ajaxurl'    => admin_url('admin-ajax.php'),
		    'nonce'      => wp_create_nonce('nutrail_nonce'),
		    'turbolinks' => nutrail_get_option('turbolinks', false),
	    ]);
    }
}

add_action('wp_enqueue_scripts', 'nutrail_enqueue_script');

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