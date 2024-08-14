<?php
$return_array = $return_array_field = $insert_field = null;

$insert_field = array(
    array(
        'id'    => @$array['key'].'_comapny',
        'type'  => 'text',
        'title' => '会社名',
    ),
    array(
        'id'    => @$array['key'].'_people',
        'type'  => 'text',
        'title' => '責任者・役職',
    ),
    array(
        'id'    => @$array['key'].'_people_image',
        'type'  => 'media',
        'title' => '責任者・役職(画像)',
    ),
    array(
        'id'    => @$array['key'].'_address',
        'type'  => 'text',
        'title' => '住所',
    ),
    array(
        'id'    => @$array['key'].'_link',
        'type'  => 'link',
        'title' => 'お問合せ先',
    ),
    array(
        'id'    => @$array['key'].'_content_addsense',
        'type'  => 'switcher',
        'title' => 'アドセンスの使用',
    ),
    array(
        'id'    => @$array['key'].'_content_ga',
        'type'  => 'switcher',
        'title' => 'GAの使用',
    ),
    array(
        'id'    => @$array['key'].'_content_contactform',
        'type'  => 'switcher',
        'title' => 'お問合せフォームの使用',
    )
);

$return_array = array(
    'name'   => @$array['key'],
    'title'  => @$array['title'],
    'fields' => $insert_field,
);