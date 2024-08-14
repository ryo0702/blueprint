<?php
$arr_return_this = array(
    'name'   => @$this_array['key'],
    'title'  => @$this_array['title'],
    'fields' => array(
        array(
            'id'    => @$this_array['key'].'_order',
            'type'  => 'select',
            'options' => array(
                'order1' => 'パターン1',
                'order2' => 'パターン2',
            ),
            'title' => '表示順序'
        ),
        array(
            'id'    => @$this_array['key'].'_cta_title_main',
            'type'  => 'textarea',
            'title' => 'CTA メインタイトル'
        ),
        array(
            'id'    => @$this_array['key'].'_cta_tel',
            'type'  => 'text',
            'title' => 'CTA 電話番号',
        ),
        array(
            'id'    => @$this_array['key'].'_cta_description',
            'type'  => 'textarea',
            'title' => 'CTA 説明本文',
        ),
        array(
            'id'    => @$this_array['key'].'_cta_button1',
            'type'  => 'link',
            'title' => 'CTA ボタン①',
        ),
        array(
            'id'    => @$this_array['key'].'_cta_button2',
            'type'  => 'link',
            'title' => 'CTA ボタン②',
        ),
        array(
            'id'    => @$this_array['key'].'_cta_bgc',
            'type'  => 'color',
            'title' => 'CTA 背景色',
        ),
        array(
            'id'    => @$this_array['key'].'_cta_bgi',
            'type'  => 'media',
            'title' => 'CTA 背景画像',
        ),
        array(
            'id'    => @$this_array['key'].'_cta_class',
            'type'  => 'text',
            'title' => 'クラス',
        ),
    )
);