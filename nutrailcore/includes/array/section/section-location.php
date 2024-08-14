<?php
$return_array = $return_array_field = $insert_field = null;
$insert_field = array(
    array(
        'id'    => $array['key'].'_postcode',
        'type'  => 'text',
        'title' => '郵便番号'
    ),
    array(
        'id'    => $array['key'].'_pref',
        'type'  => 'text',
        'title' => '都道府県'
    ),
    array(
        'id'    => $array['key'].'_city',
        'type'  => 'text',
        'title' => '市区町村'
    ),
    array(
        'id'    => $array['key'].'_other',
        'type'  => 'text',
        'title' => '番地・建物'
    ),
    array(
        'id'    => $array['key'].'_access',
        'type'  => 'textarea',
        'title' => 'アクセス'
    ),
);

$return_array = array(
    'name'   => @$array['key'],
    'title'  => @$array['title'],
    'fields' => $insert_field,
);