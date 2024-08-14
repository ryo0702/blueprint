<?php
$return_array = $return_array_field = $insert_field = null;

$insert_field = array(
    array(
        'id'      => @$array['key'].'_map',
        'type'    => 'map',
        'title'   => '地図',
        'default' => array(
            'address'   => 'Tokyo, Japan',
            'latitude'  => '35.68251177419591',
            'longitude' => '139.76735147095474',
            'zoom'      => '15',
        )
    ),
    array(
        'id'    => @$array['key'].'_tel',
        'type'  => 'text',
        'title' => '電話番号',
    ),
    array(
        'id'    => @$array['key'].'_business_hours',
        'type'  => 'textarea',
        'title' => '営業時間',
    ),
    array(
        'id'    => @$array['key'].'_postalcode',
        'type'  => 'text',
        'title' => '郵便番号',
    ),
    array(
        'id'    => @$array['key'].'_address',
        'type'  => 'textarea',
        'title' => '所在地',
    ),
);
require NUTRAIL_CORE_PATH.'includes/array/section/insert-section-title.php';
require NUTRAIL_CORE_PATH.'includes/array/section/insert-section-class.php';

$return_array = array(
    'name'   => @$array['key'],
    'title'  => @$array['title'],
    'fields' => $insert_field,
);