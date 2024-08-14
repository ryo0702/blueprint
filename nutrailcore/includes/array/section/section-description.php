<?php
$return_array = $return_array_field = null;

$insert_field = array(
    array(
        'id'    => @$array['key'].'_description_title_main',
        'type'  => 'textarea',
        'title' => 'メインタイトル'
    ),
    array(
        'id'    => @$array['key'].'_description_title_sub',
        'type'  => 'textarea',
        'title' => 'サブタイトル'
    ),
    array(
        'id'    => @$array['key'].'_description_image',
        'type'  => 'media',
        'title' => '画像',
    ),
    array(
        'id'    => @$array['key'].'_description_text',
        'type'  => 'textarea',
        'title' => '説明本文',
    ),
    array(
        'id'    => @$array['key'].'_description_caption',
        'type'  => 'textarea',
        'title' => '画像キャプション',
    ),
);

require NUTRAIL_CORE_PATH.'includes/array/section/insert-section-title.php';
require NUTRAIL_CORE_PATH.'includes/array/section/insert-section-class.php';

$return_array = array(
    'name'   => @$array['key'],
    'title'  => @$array['title'],
    'fields' => $insert_field,
);