<?php

if (!defined('ABSPATH')) {
    die;
}

class WPA_Blocks
{
    /**
     * @var WPA_Blocks The one true WPA_Blocks
     */
    private static $instance;

    public static function instance()
    {
        if (!isset(self::$instance) && !(self::$instance instanceof WPA_Blocks)) {
            self::$instance = new WPA_Blocks;
            /* Install plugin */
            self::$instance->setup_constants();
            self::$instance->includes();
        }

        return self::$instance;
    }

    public function __construct()
    {
        add_action('enqueue_block_editor_assets', [$this, 'editor_assets']);
        add_action('after_setup_theme', [$this, 'theme_support']);
        add_action('wp_enqueue_scripts', [$this, 'frontend_assets']);
        add_filter('block_categories_all', [$this, 'block_categories'], 10, 2);
    }

    public function setup_constants()
    {
        define('WPA_BLOCK_DIR', NUTRAIL_CORE_PATH.'vendor/block-editor');
        define('WPA_BLOCK_URI', NUTRAIL_CORE_URL.'vendor/block-editor');
    }

    public function includes()
    {
        // Require abstracts
        include_once WPA_BLOCK_DIR.'/abstracts.php';

        // Blocks default
        // include_once WPA_BLOCK_DIR.'/includes/sample/index.php';

        // Require Blocks
        $parent = glob(trailingslashit(get_template_directory()).'config/blocks/*.php');
        $child  = glob(trailingslashit(get_stylesheet_directory()).'config/blocks/*.php');
        $path   = array_merge($parent, $child);
        $blocks = [];

        if (!empty($path)) {
            foreach ($path as $block_path) {
                $filename          = wp_basename($block_path, '.php');
                $blocks[$filename] = $block_path;
            }
        }
        if (!empty($blocks)) {
            foreach ($blocks as $block_path) {
                include_once $block_path;
            }
        }
    }

    public function editor_assets()
    {
        wp_enqueue_style('wpa-blocks', WPA_BLOCK_URI.'/assets/index.css', ['wp-edit-blocks']);
        wp_enqueue_script('wpa-blocks', WPA_BLOCK_URI.'/assets/index.js', [
            'wp-block-editor',
            'wp-core-data',
            'wp-i18n'
        ]);

        if (function_exists('wp_set_script_translations')) {
            wp_set_script_translations('wpa-blocks', 'wpa', WPA_BLOCK_DIR.'i18n');
        }

        $blocks = apply_filters('wpa_register_blocks_scripts', []);

        if (!empty($blocks)) {
            wp_localize_script('wpa-blocks', 'wpa_blocks', $blocks);
        }
    }

    public function frontend_assets()
    {
        wp_enqueue_style('wpa-blocks', WPA_BLOCK_URI.'/assets/style-index.css');
    }

    public function theme_support()
    {
        // Add support for full and wide align images.
        add_theme_support('align-wide');

        // Add support for experimental cover block spacing.
        add_theme_support('custom-spacing');
    }

    /**
     * Custom block category
     */
    public function block_categories($categories, $editor_context)
    {
        array_unshift($categories, array(
            'slug'  => 'nutrail',
            'title' => __('Nutrail theme', 'nutrail'),
            'icon'  => 'wordpress',
        ));

        return $categories;
    }
}

return WPA_Blocks::instance();