<?php if (!defined('ABSPATH')) {
    die;
}

// Include
include NUTRAIL_CORE_PATH.'/includes/array/option-common.php';
include NUTRAIL_CORE_PATH.'/includes/array/option-design.php';
include NUTRAIL_CORE_PATH.'/includes/array/option-company.php';
include NUTRAIL_CORE_PATH.'/includes/array/option-smtp.php';
include NUTRAIL_CORE_PATH.'/includes/array/option-captcha.php';

$array_options = array(
    $config_options_common,
    $config_options_design,
    $config_options_company,
    $config_options_smtp,
    $config_options_captcha,
);

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