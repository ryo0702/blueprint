<?php
$return_array = $return_array_field = $insert_field = null;

$insert_field = array(
    array(
        'id'    => @$array['key'].'_title',
        'type'  => 'textarea',
        'title' => 'タイトル',
    ),
    array(
        'id'    => @$array['key'].'_text',
        'type'  => 'textarea',
        'title' => '説明文',
    ),
    array(
        'id'    => @$array['key'].'_class',
        'type'  => 'text',
        'title' => 'クラス',
    )
);

$return_array = array(
    'name'   => @$array['key'],
    'title'  => @$array['title'],
    'fields' => $insert_field,
);