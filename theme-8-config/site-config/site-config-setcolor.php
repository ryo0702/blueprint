<?php
$action = add_query_arg(
    [
        'action' => 'nutrail_action_security',
        'nonce'  => wp_create_nonce('nutrail_nonce_security'),
    ],
    admin_url('admin-ajax.php')
);

// Colorgroup
if (file_exists(NUTRAIL_THEME_DIR.'config/options/option-common-colorgroup.php')) {
    $colors = include NUTRAIL_THEME_DIR.'config/options/option-common-colorgroup.php';
} elseif (file_exists(NUTRAIL_CORE_PATH.'includes/array/option-common-colorgroup.php')) {
    $colors = include NUTRAIL_CORE_PATH.'includes/array/option-common-colorgroup.php';
}
// Color
if (file_exists(NUTRAIL_THEME_DIR.'config/options/option-common-color.php')) {
    require_once NUTRAIL_CORE_PATH.'includes/array/option-common-color.php';
} elseif (file_exists(NUTRAIL_CORE_PATH.'includes/array/option-common-color.php')) {
    require_once NUTRAIL_CORE_PATH.'includes/array/option-common-color.php';
}
// Design Content
if (file_exists(NUTRAIL_THEME_DIR.'config/options/option-common-design-content.php')) {
    require_once NUTRAIL_THEME_DIR.'config/options/option-common-design-content.php';
} elseif (file_exists(NUTRAIL_CORE_PATH.'includes/array/option-common-design-content.php')) {
    require_once NUTRAIL_CORE_PATH.'includes/array/option-common-design-content.php';
}

$config_options_design_common = array();

if (!empty($config_common_design_contents)) {
    $config_options_design_common[] = $config_common_design_contents;
}

$array_options[] = array(
    'title'  => 'カラー設定',
    'icon'     => 'fa fa-paint-brush',
    'fields' => array(
        array(
            'id'       => 'colors-set',
            'type'     => 'palette',
            'title'    => 'カラー設定',
            'subtitle' => 'カラーセットを指定',
            'options'  => nutrail_get_colors(),
            'default'  => 'default',
        ),
    ),
);