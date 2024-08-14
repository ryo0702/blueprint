<?php


defined('ABSPATH') || exit;

class WPA_Block_option extends WPA_Blocks_abstracts
{
    public $block_type = 'sample';

    public function config()
    {
        return [
            'title' => 'Example: Block sample',
            'icon'  => 'universal-access-alt',
        ];
    }

    public function params()
    {
        return array(
            array(
                'id'    => 'color',
                'type'  => 'color',
                'title' => esc_html__('Color', 'wpa'),
            ),
            array(
                'id'          => 'post_type',
                'type'        => 'select',
                'title'       => esc_html__('Post type', 'wpa'),
                'placeholder' => 'Select a post type',
                'options'     => 'post_types',
                'default'     => 'post',
            ),
        );
    }

    public function render_callback($atts, $content, $block_instance)
    {
        ob_start();

        echo "<pre>";
        print_r($atts);
        echo "</pre>";

        return ob_get_clean();
    }
}

return new WPA_Block_option();