<?php
// Set Option
$update_setup_options = null;
if(is_array(@$array_setupforms)){
    foreach ($array_setupforms as $form_value) {
        $update_setup_options[@$form_value['name']] = @$_POST[@$form_value['name']];
    }
    update_option('setup_options', $update_setup_options);
}
// get options
$update_setup_options = null;
$update_setup_options = get_option('setup_options');

// Create pages
if(!empty(@$_POST['create_pages']) && is_array(@$_POST['create_pages'])){
    $result_pages = null;
    foreach ($_POST['create_pages'] as $page_name) {
        $page = get_page_by_path($page_name);
        $page_id = wp_insert_post(array(
            'post_title' => $array_templates[$page_name],
            'post_name' => $page_name,
            'post_type' => 'page',
            'post_status' => 'publish',
            'comment_status' => 'closed',
            'ping_status' => 'closed',
        ));
        if(!empty($page_id) && is_numeric(@$page_id)){
            $page_template = get_post_meta($page_id, '_wp_page_template', true);
            update_post_meta($page_id, '_wp_page_template', 'templates/template-'.$page_name.'.php');
            $result_pages .= '<li>'.get_the_title($page_id).'(ID：'.$page_id.':<a href="'.site_url().'/wp-admin/post.php?post='.$page_id.'&action=edit">編集</a> / <a href="'.get_the_permalink($page_id).'">表示</a>)を発行しました</li>';
        }

        // Insert Post meta
        $metavalues = null;
        if(!empty($array_setupactions) && is_array(@$array_setupactions)){
            if(is_array(@$array_setupactions[$page_name]['insert_values'])){
                foreach (@$array_setupactions[$page_name]['insert_values'] as $insert_key => $insert_array){
                    if(!empty(@$insert_array['type'])) {
                        if($insert_array['type'] == 'option'){
                            $metavalues[$insert_key] = @$update_setup_options[$insert_array['name']];
                        }
                        elseif($insert_array['type'] == 'value'){
                            $metavalues[$insert_key] = @$insert_array['value'];
                        }
                        elseif($insert_array['type'] == 'option_set'){
                            if(is_array(@$insert_array['keys'])){
                                $return_set = null;
                                foreach ($insert_array['keys'] as $under_key){
                                    if(!empty(@$update_setup_options[$under_key])){
                                        $return_set .= @$update_setup_options[$under_key];
                                    }
                                }
                            }
                            $metavalues[$insert_key] = $return_set;
                        }
                        elseif($insert_array['type'] == 'option_set_space'){
                            if(is_array(@$insert_array['keys'])){
                                $return_set = null;
                                foreach ($insert_array['keys'] as $under_key){
                                    if(!empty(@$update_setup_options[$under_key])){
                                        $return_set .= @$update_setup_options[$under_key].' ';
                                    }
                                }
                                rtrim($return_set);
                            }
                            $metavalues[$insert_key] = $return_set;
                        }
                    }
                }
            }
            update_post_meta($page_id, @$array_setupactions[$page_name]['meta_key'], $metavalues);
        }
    }
    if(!empty($result_pages)){
        echo '<ul>'.$result_pages.'</ul>';
    }
}