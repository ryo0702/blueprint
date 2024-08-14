<?php
/**
 * Removes admin menu.
 */
if (NUTRAIL_CONFIG_REMOVE_ADMINMENU_COMMENT === true) {
    if (!function_exists('nutrail_remove_menus_comment')) {
        function nutrail_remove_menus_comment()
        {
            remove_menu_page('edit-comments.php');
        }

        add_action('admin_menu', 'nutrail_remove_menus_comment');
    }
}

/**
 * Removes all emoji / embed related scripts and styles.
 */
if (NUTRAIL_CONFIG_REMOVE_EMOJI === true) {
    if (!function_exists('nutrail_disable_frontend_emojis')) {
        function nutrail_disable_frontend_emojis()
        {
            if (is_admin() || is_customize_preview()) {
                return;
            }
            remove_action('wp_head', 'print_emoji_detection_script', 7);
            remove_action('admin_print_scripts', 'print_emoji_detection_script');
            remove_action('wp_print_styles', 'print_emoji_styles');
            remove_action('admin_print_styles', 'print_emoji_styles');
            remove_filter('the_content_feed', 'wp_staticize_emoji');
            remove_filter('comment_text_rss', 'wp_staticize_emoji');
            remove_filter('wp_mail', 'wp_staticize_emoji_for_email');

            call_user_func('wp_deregister_'.'script', 'wp-embed');
        }

        add_action('init', 'nutrail_disable_frontend_emojis');
    }
}

/**
 * Lazyload content.
 */
if (!function_exists('nutrail_lazyload_alter_html')) {
    function nutrail_lazyload_alter_html($content)
    {
        // Don't do anything with the RSS feed.
        if (is_feed() || is_preview() || is_admin()) {
            return $content;
        }

        // Exit if it doesn't look like HTML (see #228)
        if (!preg_match("#^\\s*<#", $content)) {
            return $content;
        }

        if (function_exists('amp_is_request') && amp_is_request()) {
            //for AMP pages the <picture> tag is not allowed
            return $content;
        }

        if (!nutrail_get_option('lazyload')) {
            return $content;
        }

        $callback = function ($image) {
            // check is added lazyload
            if (strpos($image[0], 'lazyload') !== false) {
                return $image[0];
            }

            $placeholder = 'data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==';
            $find        = [' src=', ' srcset=', ' sizes='];
            $replace     = [
                ' src=\''.$placeholder.'\' data-src=',
                ' srcset=\''.$placeholder.'\' data-srcset=',
                ' data-sizes='
            ];

            if (strpos($image[0], ' class=') === false) {
                $find    = array_merge($find, ['<img']);
                $replace = array_merge($replace, ['<img class=\'lazyload\'']);
            } else {
                $find    = array_merge($find, [' class="', ' class=\'']);
                $replace = array_merge($replace, [' class="lazyload ', ' class=\'lazyload ']);
            }

            return str_replace($find, $replace, $image[0]);
        };

        return preg_replace_callback("/<img[^>]*>/i", $callback, $content);
    }
}

if (!function_exists('nutrail_lazyload_output_buffer')) {
    function nutrail_lazyload_output_buffer()
    {
        if (!is_admin() || (function_exists("wp_doing_ajax") && wp_doing_ajax()) || (defined('DOING_AJAX') && DOING_AJAX)) {
            if (!extension_loaded('zlib')) {
                ob_start('ob_gzhandler');
            }
            ob_start('nutrail_lazyload_alter_html');
        }
    }

    add_action('init', 'nutrail_lazyload_output_buffer', 1);
}

if (!function_exists('is_have_in_array')) {
    function is_have_in_array($array = null, $target = null)
    {
        $return = null;
        if (is_array(@$array)) {
            foreach ($array as $key => $value) {
                if ($value == $target) {
                    $return = 'on';
                    break;
                }
            }
        }
        if (!empty($return) && $return == 'on') {
            return true;
        } else {
            return false;
        }
    }
}

if (!function_exists('if_return_value')) {
    function if_return_value($array = null, $target = null)
    {
        $return = null;
        if (is_array(@$array)) {
            foreach ($array as $key => $value) {
                if ($key == $target) {
                    $return = $value;
                }
            }
        }

        return $return;
    }
}

if (!function_exists('random_return_value')) {
    function random_return_value($array = null)
    {
        $arr_num = $return = null;
        if (is_array(@$array)) {
            $arr_num = array_rand($array);
            if (!empty($array[$arr_num])) {
                $return = $array[$arr_num];
            }
        }

        return $return;
    }
}

if (!function_exists('nutrail_price_format')) {
    function nutrail_price_format($price, $type = null, $zei = null)
    {
        $return = 0;

        if (!empty($price)) {
            if ($type == 'yen') {
                $return = number_format($price);
                $return = $return.'円';
                if (@$zei == true) {
                    $return = $return.'(税込)';
                }
            } elseif ($type == 'hidden-yen') {
                $return = number_format($price);
                if (@$zei == true) {
                    $return = $return.'(税込)';
                }
            } elseif ($type == 'manyen') {
                $return = $price * 0.0001;
                $return = number_format($return);
                $return = $return.'円';
                if (@$zei == true) {
                    $return = $return.'(税込)';
                }
            } elseif ($type == 'hidden-manyen') {
                $return = $price * 0.0001;
                $return = number_format($return);
                if (@$zei == true) {
                    $return = $return.'(税込)';
                }
            } else {
                $return = number_format($price);
                if (@$zei == true) {
                    $return = $return.'(税込)';
                }
            }
        }

        return $return;
    }
}

/**
 * Extracts headers from a PHP-style $_SERVER array.
 *
 * @param  array  $server  Associative array similar to `$_SERVER`.
 *
 * @return array Headers extracted from the input.
 * @since 4.4.0
 *
 */
if (!function_exists('nutrail_request_headers')) {
    function nutrail_request_headers()
    {
        $headers = array();

        // CONTENT_* headers are not prefixed with HTTP_.
        $additional = array('CONTENT_LENGTH' => true, 'CONTENT_MD5' => true, 'CONTENT_TYPE' => true);

        foreach ($_SERVER as $key => $value) {
            if (strpos($key, 'HTTP_') === 0) {
                $headers[substr($key, 5)] = $value;
            } elseif (isset($additional[$key])) {
                $headers[$key] = $value;
            }
        }

        return $headers;
    }
}

if (!function_exists('nutrail_ajax_headers')) {
    function nutrail_ajax_headers()
    {
        if (!headers_sent()) {
            send_origin_headers();
            send_nosniff_header();
            nocache_headers();

            header('Content-Type: text/html; charset='.get_option('blog_charset'));
            header('X-Robots-Tag: noindex');
            status_header(200);
        }
    }
}

if (!function_exists('nutrail_is_pjax')) {
    function nutrail_is_pjax()
    {
        if (function_exists('nutrail_request_headers')) {
            $headers = nutrail_request_headers();
            if (!empty($headers['X_PJAX'])) {
                return true;
            }
        }

        return false;
    }
}

function nutrail_is_amp()
{
    return function_exists('amp_is_request') && amp_is_request();
}

function nutrail_get_option($key, $default = '', $force = false)
{
    global $array_theme_option;

    if ($force) {
        $array_theme_option = get_option(WPOPTIONKEY);
    }

    if (!empty($_GET[$key])) {
        return wp_unslash(wp_strip_all_tags($_GET[$key]));
    }

    $array_key = explode('.', $key);
    $result    = $array_theme_option;

    foreach ($array_key as $value) {
        if (!empty($result[$value])) {
            $result = $result[$value];
        } else {
            $result = null;
            break;
        }
    }

    if (!empty($result)) {
        return $result;
    }

    return $default;
}

function nutrail_get_colors($key = '')
{
    $colors = [];
    $path   = 'option-common-colorgroup.php';

    if (file_exists(NUTRAIL_THEME_DIR.'config/options/'.$path)) {
        $colors = include NUTRAIL_THEME_DIR.'config/options/'.$path;
    } elseif (file_exists(NUTRAIL_CORE_PATH.'includes/array/'.$path)) {
        $colors = include NUTRAIL_CORE_PATH.'includes/array/'.$path;
    }

    if (empty($key) || is_array($key)) {
        return $colors;
    }

    if (!empty(@$colors[$key])) {
        return $colors[$key];
    }

    return $colors;
}

function nutrail_page_meta($key, $page_id = null)
{
    global $post;

    if (empty($page_id)) {
        $page_id = !empty($post->ID) ? $post->ID : null;

        if (is_front_page()) {
            $page_id = get_option('page_on_front');
        }
    }

    $GLOBALS['config_page'] = !empty($page_id) ? get_post_meta($page_id, $key, true) : null;
}

function nutrail_get_meta($key, $default = '')
{
    global $config_page;

    $array_key = explode('.', $key);
    $result    = $config_page;

    foreach ($array_key as $value) {
        if (!empty($result[$value])) {
            $result = $result[$value];
        } else {
            $result = null;
            break;
        }
    }

    if (!empty($result)) {
        return $result;
    }

    return $default;
}

/**
 * Escape JSON for use on HTML or attribute text nodes.
 *
 * @param  string  $json  JSON to escape.
 * @param  bool  $html  True if escaping for HTML text node, false for attributes. Determines how quotes are handled.
 *
 * @return string Escaped JSON.
 * @since 3.5.5
 */
function nutrail_esc_json($json, $html = false)
{
    return _wp_specialchars(
        $json,
        $html ? ENT_NOQUOTES : ENT_QUOTES, // Escape quotes in attribute nodes only.
        'UTF-8',                           // json_encode() outputs UTF-8 (really just ASCII), not the blog's charset.
        true                               // Double escape entities: `&amp;` -> `&amp;amp;`.
    );
}

function nutrail_print_schema($schema = [])
{
    $data = !empty($schema) ? $schema : @$GLOBALS['array_config_schema'];
    if (!empty($data)) {
        $data = wp_json_encode($data, JSON_UNESCAPED_UNICODE);
        echo '<script type="application/ld+json">'.nutrail_esc_json($data, true).'</script>';
    }
}

function nutrail_webfont()
{
    return array(
        'Noto+Sans+JP:300,400,500,700,900'  => 'Noto Sans JP',
        'Noto+Serif+JP:300,400,500,700,900' => 'Noto Serif JP',
    );
}

function nutrail_default_options(&$options, $default)
{
    array_walk($options, function (&$value, $key) use ($default) {
        if (is_array($value)) {
            $value = nutrail_default_options($value, $default);
        }
        if (!empty($value['id']) && !empty($default[$value['id']])) {
            $value['default'] = $default[$value['id']];
        }
    });

    return $options;
}

require_once NUTRAIL_CORE_PATH.'includes/helpers-html.php';
require_once NUTRAIL_CORE_PATH.'includes/helpers-array.php';