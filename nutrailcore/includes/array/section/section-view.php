<?php
$return_array = $return_array_field = $insert_field = null;

$list = null;

if (is_array(@$array['list'])) {
    foreach ($array['list'] as $list_name => $list) {
        $insert_field[] = array(
            'id'    => @$array['key'].'_view_'.$list_name,
            'type'  => 'switcher',
            'title' => $list,
        );
    }
}

$return_array = array(
    'name'   => @$array['key'],
    'title'  => @$array['title'],
    'fields' => $insert_field,
);