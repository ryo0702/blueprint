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
                'id'    => @$array['key'].'_content_span',
                'type'  => 'text',
                'title' => '次の期間までの期間',
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