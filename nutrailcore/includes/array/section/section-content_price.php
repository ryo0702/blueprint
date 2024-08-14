<?php
$return_array = $return_array_field = $insert_field = null;

$insert_field = array(
    array(
        'id'     => @$array['key'].'_content',
        'type'   => 'group',
        'title'  => 'コンテンツ',
        'fields' => array(
            array(
                'id'    => @$array['key'].'_content_title',
                'type'  => 'text',
                'title' => 'タイトル',
            ),
            array(
                'id'    => @$array['key'].'_content_text',
                'type'  => 'textarea',
                'title' => 'テキスト',
            ),
            array(
                'id'    => @$array['key'].'_content_image',
                'type'  => 'media',
                'title' => '画像',
            ),
            array(
                'id'    => @$array['key'].'_content_product',
                'type'  => 'text',
                'title' => '商品名',
            ),
            array(
                'id'    => @$array['key'].'_content_price',
                'type'  => 'text',
                'title' => '価格',
            ),
            array(
                'id'    => @$array['key'].'_content_link',
                'type'  => 'link',
                'title' => 'リンク',
            ),
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