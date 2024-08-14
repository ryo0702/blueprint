<?php
$return_array = $insert_field = null;

$insert_field = array(
    array(
        'id'     => @$array['key'].'_content_list',
        'type'   => 'group',
        'title'  => 'リストコンテンツ',
        'fields' => array(
            array(
                'id'    => @$array['key'].'_content_list_title',
                'type'  => 'text',
                'title' => 'タイトル',
            ),
            array(
                'id'    => @$array['key'].'_content_list_text',
                'type'  => 'textarea',
                'title' => 'テキスト',
            ),
            array(
                'id'    => @$array['key'].'_content_list_link',
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