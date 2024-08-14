<?php if (!defined('ABSPATH')) {
    die;
}

$array_options = array();
foreach (glob(get_template_directory() . "/theme-8-config/site-config/*.php") as $load_configfile) {
    include $load_configfile;
}

// Setting Options Menu
$config_options = array(
    'option_name'      => WPOPTIONKEY,
    'menu_title'       => 'サイト設定',
    'menu_type'        => 'menu',
    'menu_slug'        => 'admin_options',
    'menu_parent'      => '',
    'menu_position'    => 25,
    'menu_icon'        => 'dashicons-wordpress',
    'show_search'      => true,
    'show_reset'       => true,
    'show_footer'      => false,
    'show_bar_menu'    => true,
    'show_all_options' => true,
    'sticky_header'    => true,
    'framework_title'  => 'サイト設定',
);