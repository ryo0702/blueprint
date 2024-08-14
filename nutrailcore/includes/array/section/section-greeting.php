<?php
$return_array = $return_array_field = $insert_field = null;

$insert_field = array(
    array(
        'id'    => $array['key'].'_title',
        'type'  => 'text',
        'title' => '名前',
    ),
    array(
        'id'    => $array['key'].'_post',
        'type'  => 'text',
        'title' => '肩書',
    ),
    array(
        'id'    => $array['key'].'_content',
        'type'  => 'text',
        'title' => '本文',
    ),
    array(
        'id'    => $array['key'].'_image',
        'type'  => 'text',
        'title' => '画像',
    ),
);

require NUTRAIL_CORE_PATH.'includes/array/section/insert-section-title.php';
require NUTRAIL_CORE_PATH.'includes/array/section/insert-section-class.php';

$return_array = array(
    'name'   => @$array['key'],
    'title'  => @$array['title'],
    'fields' => $insert_field,
);