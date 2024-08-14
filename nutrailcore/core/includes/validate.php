<?php if (!defined('ABSPATH')) {
    die;
} // Cannot access pages directly.
/**
 *
 * Email validate
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if (!function_exists('wpa_validate_email')) {
    function wpa_validate_email($value)
    {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            return 'メールアドレスを入力してください';
        }

        return '';
    }
}
/**
 *
 * Numeric validate
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if (!function_exists('wpa_validate_numeric')) {
    function wpa_validate_numeric($value)
    {
        if (!is_numeric($value)) {
            return '数字を入力してください';
        }

        return '';
    }
}
/**
 *
 * Required validate
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if (!function_exists('wpa_validate_required')) {
    function wpa_validate_required($value)
    {
        if (empty($value)) {
            return esc_html__('This field is required.', 'nutrail');
        }

        return '';
    }
}
/**
 *
 * URL validate
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if (!function_exists('wpa_validate_url')) {
    function wpa_validate_url($value)
    {
        if (!filter_var($value, FILTER_VALIDATE_URL)) {
            return 'URLを入力してください';
        }

        return '';
    }
}
/**
 *
 * Email validate for Customizer
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if (!function_exists('wpa_customize_validate_email')) {
    function wpa_customize_validate_email($validity, $value, $wp_customize)
    {
        if (!sanitize_email($value)) {
            $validity->add('required', 'メールアドレスを入力してください');
        }

        return $validity;
    }
}
/**
 *
 * Numeric validate for Customizer
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if (!function_exists('wpa_customize_validate_numeric')) {
    function wpa_customize_validate_numeric($validity, $value, $wp_customize)
    {
        if (!is_numeric($value)) {
            $validity->add('required', '数字を入力してください');
        }

        return $validity;
    }
}
/**
 *
 * Required validate for Customizer
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if (!function_exists('wpa_customize_validate_required')) {
    function wpa_customize_validate_required($validity, $value, $wp_customize)
    {
        if (empty($value)) {
            $validity->add('required', '必須項目です');
        }

        return $validity;
    }
}
/**
 *
 * URL validate for Customizer
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if (!function_exists('wpa_customize_validate_url')) {
    function wpa_customize_validate_url($validity, $value, $wp_customize)
    {
        if (!filter_var($value, FILTER_VALIDATE_URL)) {
            $validity->add('required', 'URLを入力してください');
        }

        return $validity;
    }
}
