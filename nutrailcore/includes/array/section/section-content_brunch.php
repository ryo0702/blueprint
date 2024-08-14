<?php
$return_array = $return_array_field = $insert_field = null;

$insert_field = array(
    array(
        'id'      => @$array['key'].'_layout',
        'type'    => 'select',
        'title'   => 'レイアウト',
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
        'title'  => 'ブランチ',
        'fields' => array(
            array(
                'id'    => @$array['key'].'_title',
                'type'  => 'text',
                'title' => 'タイトル',
            ),
            array(
                'id'    => @$array['key'].'_address',
                'type'  => 'textarea',
                'title' => '所在地',
            ),
            array(
                'id'    => @$array['key'].'_tel',
                'type'  => 'text',
                'title' => '電話番号',
            ),
            array(
                'id'    => @$array['key'].'_img',
                'type'  => 'media',
                'title' => '写真',
            ),
            array(
                'id'    => @$array['key'].'_link',
                'type'  => 'link',
                'title' => 'リンク',
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