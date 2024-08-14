<?php if ( !defined( 'ABSPATH' ) ) {
	die;
} // Cannot access pages directly.
/**
 *
 * Field: Content
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( !class_exists( 'WPA_Field_content' ) ) {
	class WPA_Field_content extends WPA_Fields
	{
		public function __construct( $field, $value = '', $unique = '', $where = '' )
		{
			parent::__construct( $field, $value, $unique, $where );
		}

		public function render()
		{
			echo $this->field_before();
			echo $this->field['content'];
			echo $this->field_after();
		}
	}
}
