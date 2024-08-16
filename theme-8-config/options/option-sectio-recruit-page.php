<?php
$arr_return_this = null;

$arr_return_this = array(
    'name'   => @$array['key'],
    'title'  => @$array['title'],
    'fields' => array(
        array(
            'id'    => @$array['key'].'_id',
            'type'  => 'select',
            'title' => 'LPコンテンツページ',
            'options' => 'page',
            'query_args'  => array(
                'posts_per_page' => -1,
            ),
        ),
    ),
);