<?php if (!defined('ABSPATH')) {
    die;
} // Cannot access directly.
/**
 *
 * Field: upload
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if (!class_exists('WPA_Field_upload')) {
    class WPA_Field_upload extends WPA_Fields
    {

        public function __construct($field, $value = '', $unique = '', $where = '', $parent = '')
        {
            parent::__construct($field, $value, $unique, $where, $parent);
        }

        public function render()
        {

            $args = wp_parse_args($this->field, array(
                'library'      => array(),
                'button_title' => 'アップロード',
                'remove_title' => '削除',
            ));

            echo $this->field_before();

            $library = (is_array($args['library'])) ? $args['library'] : array_filter((array) $args['library']);
            $library = (!empty($library)) ? implode(',', $library) : '';
            $hidden  = (empty($this->value)) ? ' hidden' : '';

            echo '<div class="wpa--wrap">';
            echo '<input type="text" name="'.esc_attr($this->field_name()).'" value="'.esc_attr($this->value).'"'.$this->field_attributes().'/>';
            echo '<a href="#" class="button button-primary wpa--button" data-library="'.esc_attr($library).'">'.$args['button_title'].'</a>';
            echo '<a href="#" class="button button-secondary wpa-warning-primary wpa--remove'.esc_attr($hidden).'">'.$args['remove_title'].'</a>';
            echo '</div>';

            echo $this->field_after();

        }
    }
}
