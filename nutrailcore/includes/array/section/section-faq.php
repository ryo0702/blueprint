<?php
$return_array = $return_array_field = $insert_field = null;

$insert_field = array(
    array(
        'id'     => @$array['key'].'_content_list',
        'type'   => 'group',
        'title'  => 'FAQ',
        'fields' => array(
            array(
                'id'    => @$array['key'].'_content_q_title',
                'type'  => 'text',
                'title' => '質問',
            ),
            array(
                'id'    => @$array['key'].'_content_a_title',
                'type'  => 'text',
                'title' => '返答 タイトル',
            ),
            array(
                'id'    => @$array['key'].'_content_a_text',
                'type'  => 'textarea',
                'title' => '返答 詳細',
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