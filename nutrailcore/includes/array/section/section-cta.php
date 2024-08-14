<?php
$return_array = $return_array_field = $insert_field = null;

$insert_field = array(
    array(
        'id'    => @$array['key'].'_title_main',
        'type'  => 'textarea',
        'title' => 'メインタイトル'
    ),
    array(
        'id'    => @$array['key'].'_tel',
        'type'  => 'text',
        'title' => '電話番号',
    ),
    array(
        'id'    => @$array['key'].'_description',
        'type'  => 'textarea',
        'title' => '説明本文',
    ),
    array(
        'id'    => @$array['key'].'_button1',
        'type'  => 'link',
        'title' => 'ボタン①',
    ),
    array(
        'id'    => @$array['key'].'_button2',
        'type'  => 'link',
        'title' => 'ボタン②',
    ),
    array(
        'id'    => @$array['key'].'_bgc',
        'type'  => 'color',
        'title' => '背景色',
    ),
);
require NUTRAIL_CORE_PATH.'includes/array/section/insert-section-title.php';
require NUTRAIL_CORE_PATH.'includes/array/section/insert-section-class.php';

$return_array = array(
    'name'   => @$array['key'],
    'title'  => @$array['title'],
    'fields' => $insert_field,
);