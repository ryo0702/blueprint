<?php
$return_array = $return_array_field = $insert_field = null;

$list = array(
    'mainvisual' => 'メインビジュアル',
    'movie' => '動画',
    'list' => 'ベネフィット(注意喚起)',
    'description' => 'ストーリー・説明(共感)',
    'page-config_cta1' => 'CTA',
    'features1' => '特徴①(共感・証拠)',
    'features2' => '特徴②(共感・証拠)',
    'features3' => '特徴③(共感・証拠)',
    'features4' => '特徴④(共感・証拠)',
    'features5' => '特徴⑤(共感・証拠)',
    'page-config_cta2' => 'CTA',
    'brunch' => 'お店・支社',
    'timeline' => '1日の流れ',
    'companyinfo' => '会社情報',
    'jobinfo' => '募集要項',
    'ps' => '追伸',
    'contact' => 'お問合せ',
    'fixed-panel' => '固定パネル'
);

$insert_field = array(
    array(
        'id'     => @$array['key'].'_content',
        'type'   => 'group',
        'title'  => '表示順位',
        'fields' => array(
            array(
                'id'    => @$array['key'].'_contents',
                'type'  => 'select',
                'title' => 'セクションコンテンツ',
                'options' => $list,
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
