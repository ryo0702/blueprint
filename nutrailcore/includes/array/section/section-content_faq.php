<?php
$return_array = $return_array_field = $insert_field = null;

$insert_field = array(
    array(
        'id'     => @$array['key'].'_content',
        'type'   => 'group',
        'title'  => 'FAQ',
        'fields' => array(
            array(
                'id'    => @$array['key'].'_title',
                'type'  => 'text',
                'title' => '質問',
            ),
            array(
                'id'    => @$array['key'].'_anser',
                'type'  => 'text',
                'title' => '回答',
            ),
            array(
                'id'    => @$array['key'].'_anser_text',
                'type'  => 'textarea',
                'title' => '回答テキスト',
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