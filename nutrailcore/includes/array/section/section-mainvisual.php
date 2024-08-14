<?php
$return_array = $insert_field = null;
$insert_field = array(
    array(
        'id'    => $array['key'].'_type',
        'type'  => 'select',
        'title' => 'メインビジュアルタイプ',
        'options' => array(
            '' => 'ベーシック',
            'separate' => '分割レイアウト'
        ),
    ),
    array(
        'id'    => $array['key'].'_main_title',
        'type'  => 'textarea',
        'title' => 'タイトル',
    ),
    array(
        'id'    => $array['key'].'_sub_title',
        'type'  => 'textarea',
        'title' => 'サブタイトル',
    ),
    array(
        'id'    => $array['key'].'_lead',
        'type'  => 'textarea',
        'title' => 'リード',
    ),
    array(
        'id'    => $array['key'].'_text',
        'type'  => 'textarea',
        'title' => '本文',
    ),
    array(
        'id'    => $array['key'].'_button1',
        'type'  => 'link',
        'title' => 'ボタン①',
    ),
    array(
        'id'    => $array['key'].'_button2',
        'type'  => 'link',
        'title' => 'ボタン②',
    ),
    array(
        'id'    => $array['key'].'_layout',
        'type'  => 'select',
        'title' => 'レイアウト',
        'options' => array(
            '' => '全面',
            'mainvisual-layout-left' => '幅小・左寄り',
            'mainvisual-layout-right' => '幅小・右寄り',
        )
    ),
    array(
        'id'    => $array['key'].'_card',
        'type'  => 'select',
        'title' => 'カード',
        'options' => array(
            '' => 'カードなし',
            'card boxshadow' => 'カード',
            'card card-alpha-white' => 'カード(白・半透明)',
            'card card-alpha-black' => 'カード(黒・半透明)',
        )
    ),
    array(
        'id'    => $array['key'].'_badge1',
        'type'  => 'textarea',
        'title' => 'バッジ①<span style="color:#FF0000;"></span>',
    ),
    array(
        'id'    => $array['key'].'_badge2',
        'type'  => 'textarea',
        'title' => 'バッジ②',
    ),
    array(
        'id'    => $array['key'].'_image_logo',
        'type'  => 'media',
        'title' => 'ロゴ画像',
    ),
);

require NUTRAIL_CORE_PATH.'includes/array/section/insert-section-title.php';
require NUTRAIL_CORE_PATH.'includes/array/section/insert-section-class.php';

$return_array = array(
    'name'   => @$array['key'],
    'title'  => @$array['title'],
    'fields' => $insert_field,
);