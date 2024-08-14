<?php
$return_array = $return_array_field = $insert_field = null;

$insert_field = array(
    array(
        'id'     => @$array['key'].'_content',
        'type'   => 'group',
        'title'  => 'リンク',
        'fields' => array(
            array(
                'id'    => @$array['key'].'_link',
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