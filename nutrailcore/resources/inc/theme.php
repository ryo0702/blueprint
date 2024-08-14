<?php
function nutrail_theme_setup()
{
    /**
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on Next, use a find and replace
     * to change 'astra' to the name of your theme in all the template files.
     */
    load_theme_textdomain('nutrail', get_template_directory().'/languages');

    /**
     * Add nav-menu.
     */
    register_nav_menus(array(
        'menu_main'   => esc_html__('メインメニュー', 'nutrail'),
        'menu_footer' => esc_html__('フッターメニュー', 'nutrail'),
    ));
}

add_action('after_setup_theme', 'nutrail_theme_setup');

/**
 * Changing excerpt more
 */
function nutrail_excerpt_more($output_filter)
{
    if (is_admin() && !wp_doing_ajax()) {
        return $output_filter;
    }

    return '...';
}

add_filter('excerpt_more', 'nutrail_excerpt_more', 11);