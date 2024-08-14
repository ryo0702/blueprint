<?php if (!defined('ABSPATH')) {
    die;
} // Cannot access pages directly.
/**
 *
 * Abstract Class
 * A helper class for action and filter hooks
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if (!class_exists('WPA_Blocks_abstracts')) {
    abstract class WPA_Blocks_abstracts
    {
        public $config     = [];
        public $settings   = [];
        public $handle     = '';
        public $block_type = '';
        public $block_uri  = '';
        public $block_dir  = '';

        public function __construct()
        {
            if (!function_exists('register_block_type')) {
                // Gutenberg is not active.
                return;
            }

            $this->constants();

            add_action('init', [$this, 'register_assets']);
            add_action('init', [$this, 'register_block']);
            add_action('enqueue_block_editor_assets', [$this, 'editor_assets'], 30);
            add_action('wp_enqueue_scripts', [$this, 'frontend_assets']);

            add_action('wp_ajax_wpa-get-block-'.$this->block_type, [$this, 'get_block']);
            add_filter('wpa_register_blocks_scripts', [$this, 'blocks_scripts']);
        }

        public function constants()
        {
            $this->handle    = 'block-'.$this->block_type;
            $this->block_uri = WPA_BLOCK_URI.'/includes/'.$this->block_type;
            $this->block_dir = WPA_BLOCK_DIR.'/includes/'.$this->block_type;
            $this->config    = $this->config();
            $this->settings  = $this->params();
        }

        public function config()
        {
            return [];
        }

        public function params()
        {
            return [];
        }

        /**
         * Registers all block assets so that they can be enqueued through Gutenberg in
         * the corresponding context.
         *
         * Block icon from Dashicons → https://developer.wordpress.org/resource/dashicons/.
         *
         * Passes translations to JavaScript.
         */
        public function register_block()
        {
            $args = wp_parse_args($this->config, [
                'api_version'     => '2',
                'title'           => 'Example: gutenberg',
                'icon'            => 'universal-access-alt',
                'category'        => 'nutrail',
                'editor_script'   => $this->handle,
                'render_callback' => [$this, 'render_callback'],
                'attributes'      => [
                    'anchor' => [
                        'type' => 'string',
                    ],
                    'data'   => [
                        'type' => 'object',
                    ],
                ],
                'supports'        => [
                    'anchor'  => true,
                    'align'   => true,
                    'color'   => [
                        'gradients'  => true,
                        'link'       => true,
                        'text'       => true,
                        'background' => true,
                    ],
                    'spacing' => [
                        'padding'                       => true,
                        '__experimentalDefaultControls' => [
                            'padding' => true,
                        ],
                    ],
                ],
            ]);
            if (!empty($args['attributes']) && !isset($args['example']['attributes'])) {
                $args['example']['attributes'] = [];
                foreach ($args['attributes'] as $key => $attribute) {
                    if (!empty($attribute['default'])) {
                        $args['example']['attributes'][$key] = $attribute['default'];
                    }
                }
            }
            register_block_type('wpa/'.$this->block_type, $args);
        }

        public function get_block()
        {
            ob_start();

            echo '<div class="wpa-widgets wpa-fields">';

            if (!empty($this->settings)) {
                foreach ($this->settings as $field) {
                    $value = null;
                    if (!empty($field['id']) && !empty($_POST['data'][$field['id']])) {
                        $value = wp_unslash($_POST['data'][$field['id']]);
                    }
                    echo WPA::field($field, $value);
                }
            }

            echo '</div>';

            wp_send_json_success(ob_get_clean());
        }

        /**
         * This function is called when the block is being rendered on the front end of the site
         *
         * @param array $atts
         * @param string $content Rendered block output. ie. <InnerBlocks.Content />.
         * @param WP_Block $block_instance The instance of the WP_Block class that represents the block being rendered.
         *
         * @return false|string
         */
        public function render_callback($atts, $content, $block_instance)
        {
            ob_start();

            if (file_exists(get_template_directory().'/views/blocks/'.$this->block_type.'.php')) {
                include locate_template('/views/blocks/'.$this->block_type.'.php');
            } else {
                echo 'Template not found!';
            }

            return ob_get_clean();
        }

        public function register_assets()
        {

        }

        public function frontend_assets()
        {

        }

        public function editor_assets()
        {
            if (!empty($this->settings)) {
                WPA::$enqueue = true;
                WPA::set_used_fields(['fields' => $this->settings]);
            }

            if (!file_exists($this->block_dir.'/index.js')) {
                return;
            }

            $assets = include(WPA_BLOCK_DIR.'/block.asset.php');

            wp_register_script($this->handle, $this->block_uri.'/index.js', $assets['dependencies'], $assets['version'], true);

            if (function_exists('wp_set_script_translations')) {
                wp_set_script_translations($this->handle, 'wpa', $this->block_dir.'/languages');
            }
        }

        public function blocks_scripts($data)
        {
            if (!empty($this->settings)) {
                $data[] = [
                    'id'     => $this->block_type,
                    'action' => 'wpa-get-block-'.$this->block_type,
                ];
            }

            return $data;
        }
    }
}