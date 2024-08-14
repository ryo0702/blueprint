<?php
/**
 * add carets to menu item
 */
if (!function_exists('nutrail_carets_menu_items')) {
    function nutrail_carets_menu_items($item_output, $item, $depth, $args)
    {
        if ($depth == 0 && !empty($item->classes) && in_array('menu-item-has-children', $item->classes)) {
            // @note Why not a <button>?
            $expand_attrs = ' class="carets" role="button" tabindex="0"';

            // Add toggle behavior in AMP.
            if (nutrail_is_amp()) {
                $expand_attrs .= sprintf(
                    ' id="%s" on="%s"',
                    esc_attr("carets-{$item->ID}"),
                    esc_attr("tap:menu-item-{$item->ID}.toggleClass(class='open-submenu'),carets-{$item->ID}.toggleClass(class='active')")
                );
            }

            $item_output = "{$item_output}<span {$expand_attrs}></span>";
        }

        return $item_output;
    }
}

/**
 * add class to menu item
 */
if (!function_exists('nutrail_add_additional_class_item')) {
    function nutrail_add_additional_class_item($classes, $item, $args)
    {
        if (isset($args->item_class)) {
            $classes[] = $args->item_class;
        }

        return $classes;
    }
}

add_filter('nav_menu_css_class', 'nutrail_add_additional_class_item', 10, 3);

/**
 * add class to link item
 */
if (!function_exists('nutrail_add_link_attributes')) {
    function nutrail_add_link_attributes($atts, $item, $args, $depth)
    {
        if (isset($args->link_class)) {
            $atts['class'] = $args->link_class;
        }

        return $atts;
    }
}

add_filter('nav_menu_link_attributes', 'nutrail_add_link_attributes', 10, 4);

/**
 * add description menu title item
 */
if (!function_exists('nutrail_custom_nav_menu_item_title')) {
    function nutrail_custom_nav_menu_item_title($title, $item, $args, $depth)
    {
        if ($depth == 0 && !empty($title) && !empty($item->description)) {
            $title .= '<span class="desc">'.$item->description.'</span>';
        }

        return $title;
    }
}

add_filter('nav_menu_item_title', 'nutrail_custom_nav_menu_item_title', 10, 4);