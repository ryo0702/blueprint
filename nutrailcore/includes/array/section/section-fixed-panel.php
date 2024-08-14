<?php
$return_array = $return_array_field = $insert_field = null;

$insert_field = array(
    array(
        'id'    => @$array['key'].'_title',
        'type'  => 'textarea',
        'title' => 'メインタイトル'
    ),
    array(
        'id'    => @$array['key'].'_text',
        'type'  => 'textarea',
        'title' => '本文'
    ),
    array(
        'id'    => @$array['key'].'_img',
        'type'  => 'media',
        'title' => '画像'
    ),
    array(
        'id'    => @$array['key'].'_btn',
        'type'  => 'link',
        'title' => 'ボタン',
    ),
    array(
        'id'    => @$array['key'].'_view',
        'type'  => 'select',
        'title' => '常時表示',
        'options' => array(
            '' => '常時表示しない',
            'on' => '常時表示する'
        )
    ),
);
require NUTRAIL_CORE_PATH.'includes/array/section/insert-section-title.php';
require NUTRAIL_CORE_PATH.'includes/array/section/insert-section-class.php';

$return_array = array(
    'name'   => @$array['key'],
    'title'  => @$array['title'],
    'fields' => $insert_field,
);