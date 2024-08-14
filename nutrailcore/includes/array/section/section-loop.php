<?php
$return_array = $return_array_field = $insert_field = null;
$insert_field = array(
    array(
        'id'      => $array['key'].'_display_number',
        'type'    => 'number',
        'title'   => '表示数',
        'default' => 6
    ),
);

require NUTRAIL_CORE_PATH.'includes/array/section/insert-section-title.php';
require NUTRAIL_CORE_PATH.'includes/array/section/insert-section-class.php';

$return_array = array(
    'name'   => @$array['key'],
    'title'  => @$array['title'],
    'fields' => $insert_field,
);