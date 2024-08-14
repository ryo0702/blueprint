<?php
$return_array = $insert_field = null;
$insert_field = array(
    array(
        'id'    => @$array['key'].'_youtubeid',
        'type'  => 'text',
        'title' => 'Youtube動画① ID',
    ),
    array(
        'id'    => @$array['key'].'_caption',
        'type'  => 'text',
        'title' => 'Youtube動画① 説明文',
    ),

    array(
        'id'    => @$array['key'].'2_youtubeid',
        'type'  => 'text',
        'title' => 'Youtube動画② ID',
    ),
    array(
        'id'    => @$array['key'].'2_caption',
        'type'  => 'text',
        'title' => 'Youtube動画② 説明文',
    ),

    array(
        'id'    => @$array['key'].'3_youtubeid',
        'type'  => 'text',
        'title' => 'Youtube動画③ ID',
    ),
    array(
        'id'    => @$array['key'].'3_caption',
        'type'  => 'text',
        'title' => 'Youtube動画③ 説明文',
    ),
);

require NUTRAIL_CORE_PATH.'includes/array/section/insert-section-title.php';
require NUTRAIL_CORE_PATH.'includes/array/section/insert-section-class.php';

$return_array = array(
    'name'   => @$array['key'],
    'title'  => @$array['title'],
    'fields' => $insert_field,
);