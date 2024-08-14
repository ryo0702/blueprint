<?php
/**
 * Load plugins.
 */
if (!class_exists('TGM_Plugin_Activation')) {
    require_once NUTRAIL_CORE_PATH.'classes/class-tgm-plugin-activation.php';
}

if (!function_exists('nutrail_require_load_plugins')) {
    function nutrail_require_load_plugins()
    {
        if(file_exists(locate_template('theme-8-config/array/plugins.php'))){
            include_once locate_template('theme-8-config/array/plugins.php');
        }

        if (!empty($plugins)) {
            /*
             * Array of configuration settings. Amend each line as needed.
             *
             * TGMPA will start providing localized text strings soon. If you already have translations of our standard
             * strings available, please help us make TGMPA even better by giving us access to these translations or by
             * sending in a pull-request with .po file(s) with the translations.
             *
             * Only uncomment the strings in the config array if you want to customize the strings.
             */
            $config = array(
                'id'           => 'nutrail_plugins',
                'default_path' => '',
                'menu'         => 'nutrail-install-plugins',
                'parent_slug'  => 'themes.php',
                'capability'   => 'edit_theme_options',
                'has_notices'  => true,
                'dismissable'  => true,
                'dismiss_msg'  => '',
                'is_automatic' => true,
                'message'      => '',
            );
            tgmpa($plugins, $config);
        }
    }

    add_action('tgmpa_register', 'nutrail_require_load_plugins');
}
