<?php
/**
 * Nutrail Secure Rules
 *
 * @author   KHANH
 * @package  WPA_Secure_Rules
 * @since    1.0.0
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class Nutrail_Security_Rules
{
    public function __construct()
    {
        add_action('template_redirect', [$this, 'redirect_author_parameter']);
        add_action('rest_endpoints', [$this, 'disable_rest_endpoints']);
        add_action('wp_ajax_nutrail_action_security', [$this, 'action_security']);
    }

    public function action_security()
    {
        if (wp_verify_nonce($_REQUEST['nonce'], 'nutrail_nonce_security') && is_super_admin()) {
            $this->insert_rules();
            $this->security_config();
            $notices = array(
                array(
                    'type'        => 'success',
                    'dismissible' => '',
                    'notice'      => '<p><strong>'.esc_html__('Security success!', 'nutrail').'</strong></p>',
                )
            );
            update_option('wpa_flash_notices', $notices);
        }
        $notices = array(
            array(
                'type'        => 'error',
                'dismissible' => '',
                'notice'      => '<p><strong>'.esc_html__('Error!', 'nutrail').'</strong></p>',
            )
        );
        update_option('wpa_flash_notices', $notices);

        wp_redirect(admin_url('admin.php?page=admin_options'));
        exit;
    }

    public function disable_rest_endpoints($endpoints)
    {
        if (is_super_admin()) {
            return $endpoints;
        }
        if (isset($endpoints['/wp/v2/users'])) {
            unset($endpoints['/wp/v2/users']);
        }
        if (isset($endpoints['/wp/v2/users/(?P<id>[\d]+)'])) {
            unset($endpoints['/wp/v2/users/(?P<id>[\d]+)']);
        }

        return $endpoints;
    }

    public function redirect_author_parameter()
    {
        $is_author_set = get_query_var('author', '');
        if ($is_author_set != '' && !is_admin()) {
            wp_redirect(home_url(), 301);
            exit;
        }
    }

    public function insert_rules()
    {
        /** WordPress Misc Administration API */
        if (!function_exists('insert_with_markers')) {
            require_once ABSPATH.'wp-admin/includes/misc.php';
        }

        // Get path to main .htaccess for WordPress
        $htaccess         = ABSPATH.'.htaccess';
        $uploads_htaccess = ABSPATH.'wp-content/uploads/.htaccess';

        $rules = [
            file_get_contents(dirname(__FILE__).'/htaccess/rules-security.txt').PHP_EOL,
        ];
        insert_with_markers($htaccess, "WPA Theme", $rules);

        $rules = [
            file_get_contents(dirname(__FILE__).'/htaccess/rules-uploads.txt').PHP_EOL,
        ];
        insert_with_markers($uploads_htaccess, "WPA Theme", $rules);
    }

    public function security_config()
    {
        // Get path to main .htaccess for WordPress
        $wp_config        = file_get_contents(dirname(__FILE__).'/wp-config.php');
        $wp_config_backup = file_get_contents(ABSPATH.'wp-config.php');
        $find             = [
            'NEW_DB_NAME',
            'NEW_DB_USER',
            'NEW_DB_PASSWORD',
            'NEW_DB_HOST',
            'NEW_DB_CHARSET',
            'NEW_DB_COLLATE',
            'NEW_AUTH_KEY',
            'NEW_SECURE_AUTH_KEY',
            'NEW_LOGGED_IN_KEY',
            'NEW_NONCE_KEY',
            'NEW_AUTH_SALT',
            'NEW_SECURE_AUTH_SALT',
            'NEW_LOGGED_IN_SALT',
            'NEW_NONCE_SALT',
        ];
        $replace          = [
            DB_NAME,
            DB_USER,
            DB_PASSWORD,
            DB_HOST,
            DB_CHARSET,
            DB_COLLATE,
            AUTH_KEY,
            SECURE_AUTH_KEY,
            LOGGED_IN_KEY,
            NONCE_KEY,
            AUTH_SALT,
            SECURE_AUTH_SALT,
            LOGGED_IN_SALT,
            NONCE_SALT,
        ];
        $wp_config        = str_replace($find, $replace, $wp_config);

        // file_put_contents(dirname(__FILE__).'/wp-config-backup.php', $wp_config_backup);
        file_put_contents(ABSPATH.'wp-config.php', $wp_config);
    }
}

return new Nutrail_Security_Rules();