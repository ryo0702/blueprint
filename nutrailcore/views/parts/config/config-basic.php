<?php
global $post;
global $theme_uri;

// Load Config
$theme_uri = get_theme_file_uri();
$options = get_option(WPOPTIONKEY);
$common  = !empty($options['config-common']) ? $options['config-common'] : [];
$site_name = get_bloginfo('name');

// Lazyload
if (nutrail_is_amp()) {
    $options['lazyload'] = false;
}

// Site Title
$options['site_name']        = get_bloginfo('name');
$options['site_description'] = get_bloginfo('description');
$options['site_title']       = $options['site_name'].' - '.$options['site_description'];

// Font
if (empty($common['font'])) {
    $common['font'] = 'Noto+Sans+JP:300,400,500,700,900';
}

// Contact action
$options['contact_action'] = add_query_arg(
    [
        'action' => 'nutrail_ajax_inquery',
        'nonce'  => wp_create_nonce('nutrail_nonce'),
    ],
    admin_url('admin-ajax.php')
);

// Logo
if (!empty($common['logo']['url'])) {
    $options['navbar_logo'] = '<a href="'.home_url().'" title="'.esc_attr($options['site_name']).'"><img src="'.esc_url($common['logo']['url']).'" loading="lazy" alt="'.esc_attr($options['site_name']).'"/></a>';
} else {
    $options['navbar_logo'] = '<a href="'.home_url().'" title="'.esc_attr($options['site_name']).'">'.esc_html($options['site_name']).'</a>';
}

// global
$options['config-common']      = $common;
$GLOBALS['array_theme_option'] = $options;