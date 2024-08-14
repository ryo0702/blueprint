<?php
$return_array = $return_array_field = $insert_field = null;

$insert_field = array(
    array(
        'id'      => @$array['key'].'_layout',
        'type'    => 'select',
        'title'   => '料金表 レイアウト',
        'options' => array(
            'layout-1column' => '1カラム',
            'layout-2column' => '2カラム',
            'layout-3column' => '3カラム',
            'layout-4column' => '4カラム',
        )
    ),
    array(
        'id'      => @$array['key'].'_centering',
        'type'    => 'select',
        'title'   => '中央寄せ',
        'options' => array(
            '' => 'なし',
            'justify-content-center' => '中央寄せ',
        )
    ),
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
                'id'    => @$array['key'].'_content_price',
                'type'  => 'select',
                'title' => '強度',
                'options' => array(
                    '' => '通常',
                    'strong' => '強調',
                ),
            ),
            array(
                'id'    => @$array['key'].'_content_price',
                'type'  => 'number',
                'title' => '料金',
            ),
            array(
                'id'    => @$array['key'].'_content_price_zei',
                'type'  => 'switcher',
                'title' => '税込み表記',
            ),
            array(
                'id'    => @$array['key'].'_content_price_text1',
                'type'  => 'text',
                'title' => '内容①',
            ),
            array(
                'id'    => @$array['key'].'_content_price_text2',
                'type'  => 'text',
                'title' => '内容②',
            ),
            array(
                'id'    => @$array['key'].'_content_price_text3',
                'type'  => 'text',
                'title' => '内容③',
            ),
            array(
                'id'    => @$array['key'].'_content_price_text4',
                'type'  => 'text',
                'title' => '内容④',
            ),
            array(
                'id'    => @$array['key'].'_content_price_text5',
                'type'  => 'text',
                'title' => '内容⑤',
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