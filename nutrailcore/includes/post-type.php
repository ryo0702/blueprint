<?php
/**
 * Custom Post Type & Custom Field
 */

if (!function_exists('nutrail_core_register_cpt')) {
    function nutrail_core_register_cpt()
    {
        if(file_exists(locate_template('configs/array/post-type.php'))){
            include_once locate_template('configs/array/post-type.php');
        }

        if (!empty($array_cpt) && is_array(@$array_cpt)) {
            foreach ($array_cpt as $cpt_name => $cpt_value) {
                if ($cpt_name !== 'post' and $cpt_name !== 'page') {
                    $cpt_config = [
                        'labels'              => [
                            'name'          => @$cpt_value['title'],
                            'singular_name' => @$cpt_value['titles'],
                        ],
                        'public'              => @$cpt_value['public'],
                        'exclude_from_search' => @$cpt_value['search'],
                        'has_archive'         => @$cpt_value['archive'],
                        'show_in_menu'        => @$cpt_value['adminmenu'],
                        'supports'            => @$cpt_value['supports'],
                        'hierarchical'        => true,
                    ];
                    if (!empty($cpt_value['restapi'])) {
                        $cpt_config['show_in_rest'] = $cpt_value['restapi'];
                    }
                    if (!empty($cpt_value['menu_icon'])) {
                        $cpt_config['menu_icon'] = $cpt_value['menu_icon'];
                    }
                    if (!empty($cpt_value['capability_type'])) {
                        $cpt_config['capability_type'] = $cpt_value['capability_type'];
                    }
                    if (!empty($cpt_value['capabilities'])) {
                        $cpt_config['capabilities'] = $cpt_value['capabilities'];
                    }
                    register_post_type($cpt_name, $cpt_config);
                }
            }
        }
    }

    add_action('init', 'nutrail_core_register_cpt');
}