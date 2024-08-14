<?php
$return_array = $return_array_field = $insert_field = null;
$insert_field = array(
    array(
        'id'    => $array['key'].'_title',
        'type'  => 'text',
        'title' => '名前',
    ),
    array(
        'id'    => $array['key'].'_image',
        'type'  => 'media',
        'title' => '画像',
    ),
    array(
        'id'    => $array['key'].'_class',
        'type'  => 'text',
        'title' => 'クラス',
    )
);

$return_array = array(
    'name'   => @$array['key'],
    'title'  => @$array['title'],
    'fields' => $insert_field,
);