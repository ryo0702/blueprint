<?php
$return_array = $return_array_field = $insert_field = null;

$insert_field = array(
    array(
        'id'    => @$array['key'].'_name',
        'type'  => 'text',
        'title' => '会社名'
    ),
    array(
        'id'    => @$array['key'].'_name-kana',
        'type'  => 'text',
        'title' => '会社名(カナ)'
    ),
    array(
        'id'    => @$array['key'].'_name-eng',
        'type'  => 'text',
        'title' => '会社名(英語)'
    ),
    array(
        'id'    => @$array['key'].'_president-name',
        'type'  => 'text',
        'title' => '代表者名'
    ),
    array(
        'id'    => @$array['key'].'_officer',
        'type'  => 'textarea',
        'title' => '役員'
    ),
    array(
        'id'    => @$array['key'].'_businesscontent',
        'type'  => 'textarea',
        'title' => '事業内容'
    ),
    array(
        'id'    => @$array['key'].'_license',
        'type'  => 'textarea',
        'title' => '許可・認可'
    ),
    array(
        'id'    => @$array['key'].'_bank',
        'type'  => 'textarea',
        'title' => '取引銀行'
    ),
    array(
        'id'    => @$array['key'].'_customer',
        'type'  => 'textarea',
        'title' => '主要取引先',
    ),
    array(
        'id'     => @$array['key'].'_other_table',
        'type'   => 'group',
        'title'  => '会社概要 その他',
        'fields' => array(
            array(
                'id'    => @$array['key'].'_other_table_title',
                'type'  => 'text',
                'title' => '項目名',
            ),
            array(
                'id'    => @$array['key'].'_other_table_text',
                'type'  => 'text',
                'title' => '内容',
            ),
        )
    ),
    array(
        'id'    => @$array['key'].'_postnum',
        'type'  => 'text',
        'title' => '郵便番号'
    ),
    array(
        'id'          => @$array['key'].'_pref',
        'type'        => 'select',
        'title'       => '都道府県',
        'placeholder' => '都道府県を選択',
        'options'     => load_pref()
    ),
    array(
        'id'    => @$array['key'].'_city',
        'type'  => 'text',
        'title' => '市区町村'
    ),
    array(
        'id'    => @$array['key'].'_street',
        'type'  => 'text',
        'title' => '番地',
    ),
    array(
        'id'    => @$array['key'].'_build',
        'type'  => 'text',
        'title' => '建物・部屋番号'
    ),
    array(
        'id'    => @$array['key'].'_map_link',
        'type'  => 'link',
        'title' => 'マップへのリンク'
    ),
);
require NUTRAIL_CORE_PATH.'includes/array/section/insert-section-title.php';
require NUTRAIL_CORE_PATH.'includes/array/section/insert-section-class.php';

$return_array = array(
    'name'   => @$array['key'],
    'title'  => @$array['title'],
    'fields' => $insert_field,
);