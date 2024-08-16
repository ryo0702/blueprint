<?php
/**
 * NUTRAIL Core Ver 1.0.1
 */

/**
 * Start Session
 */
session_start();

/**
 * Blank function
 */
function nutrailcore()
{
}

/**
 * Define WPC Core
 */
define('WPOPTIONKEY', 'config-theme');
define('NUTRAIL_THEME_DIR', trailingslashit(get_template_directory()));
define('NUTRAIL_THEME_URI', trailingslashit(esc_url(get_template_directory_uri())));
define('NUTRAIL_CORE_PATH', NUTRAIL_THEME_DIR.'nutrailcore/');
define('NUTRAIL_CORE_URL', NUTRAIL_THEME_URI.'nutrailcore/');
define('NUTRAIL_PRESET_PATH', NUTRAIL_CORE_PATH.'preset');
define('NUTRAIL_PRESET_URI', NUTRAIL_CORE_URL.'preset');

/**
 * Load Config
 */
if (file_exists(NUTRAIL_THEME_DIR.'config/index.php')) {
    require_once NUTRAIL_THEME_DIR.'configs/index.php';
} else {
    if (file_exists(NUTRAIL_THEME_DIR.'configs/admin/admin_menu.php')) {
        require_once NUTRAIL_THEME_DIR.'configs/admin/admin_menu.php';
    }
    if (file_exists(NUTRAIL_THEME_DIR.'configs/system.php')) {
        require_once NUTRAIL_THEME_DIR.'configs/system.php';
    }
    if (file_exists(NUTRAIL_THEME_DIR.'configs/admin.php')) {
        require_once NUTRAIL_THEME_DIR.'configs/admin.php';
    }
}


/**
 * Load Core
 */
require_once NUTRAIL_CORE_PATH.'constant.php';
require_once NUTRAIL_CORE_PATH.'autoload.php';
require_once NUTRAIL_CORE_PATH.'core/options.php';
require_once NUTRAIL_CORE_PATH.'vendor/security/security.php';

if (NUTRAIL_BLOCK_BUILDER) {
    require_once NUTRAIL_CORE_PATH.'vendor/block-editor/index.php';
}

/**
 * Load Functions
 */
require_once NUTRAIL_CORE_PATH.'includes/widget-array.php';
require_once NUTRAIL_CORE_PATH.'includes/helpers.php';
require_once NUTRAIL_CORE_PATH.'includes/scripts.php';
require_once NUTRAIL_CORE_PATH.'includes/nonce.php';
require_once NUTRAIL_CORE_PATH.'includes/admin.php';
require_once NUTRAIL_CORE_PATH.'includes/menus.php';
require_once NUTRAIL_CORE_PATH.'includes/metabox.php';
require_once NUTRAIL_CORE_PATH.'includes/meta.php';
require_once NUTRAIL_CORE_PATH.'includes/theme.php';

if (NUTRAIL_CONFIG_CPT === true) {
    require_once NUTRAIL_CORE_PATH.'includes/post-type.php';
}
if (NUTRAIL_CONFIG_LOAD_PLUGIN === true) {
    require_once NUTRAIL_CORE_PATH.'includes/plugins.php';
}
if (NUTRAIL_CONFIG_INQUIRIES === true) {
    require_once NUTRAIL_CORE_PATH.'includes/inquiries/index.php';
}
if (NUTRAIL_CONFIG_HEARINGSYSTEM === true) {
    require_once NUTRAIL_CORE_PATH.'includes/hearingsystem/index.php';
}

/**
 * Theme
 */
require_once NUTRAIL_CORE_PATH.'includes/config_theme/menu.php';