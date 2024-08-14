<?php
$return_array = $return_array_field = $insert_field = null;

$insert_field = array(
    array(
        'id'    => @$array['key'].'_formname',
        'type'  => 'text',
        'title' => 'フォーム名',
    ),
    array(
        'id'    => @$array['key'].'_btn_label',
        'type'  => 'text',
        'title' => 'ボタンラベル',
    ),
    array(
        'id'    => @$array['key'].'_privacypolicy_checkbox_link',
        'type'  => 'link',
        'title' => 'プライバシーポリシーチェックのリンク先',
    ),
    array(
        'id'    => @$array['key'].'_sendmail',
        'type'  => 'text',
        'title' => '管理者メールアドレス',
    ),
    array(
        'id'    => @$array['key'].'_redirect',
        'type'  => 'link',
        'title' => 'リダイレクト先URL',
    ),
    array(
        'id'     => @$array['key'].'_list',
        'type'   => 'group',
        'title'  => 'お問い合わせフォーム',
        'fields' => array(
            array(
                'id'    => @$array['key'].'_list_title',
                'type'  => 'text',
                'title' => 'お問い合わせフォーム タイトル',
            ),
            array(
                'id'      => @$array['key'].'_list_type',
                'type'    => 'select',
                'title'   => 'タイプ',
                'options' => load_contactform_input_type()
            ),
            array(
                'id'         => @$array['key'].'_list_description',
                'type'       => 'textarea',
                'title'      => '説明文',
                'dependency' => array(@$array['key'].'_list_type', '!=', 'input_radio_yesno'),
            ),
            array(
                'id'    => @$array['key'].'_list_required',
                'type'  => 'switcher',
                'title' => '必須項目',
            ),
            array(
                'id'         => @$array['key'].'_list_option',
                'type'       => 'textarea',
                'title'      => 'オプション(セレクター等で使用)',
                'dependency' => array(@$array['key'].'_list_type', '==', 'input_select'),
            ),
            array(
                'id'      => @$array['key'].'_list_style',
                'type'    => 'button_set',
                'title'   => 'Style',
                'default' => 'inline',
                'options' => array(
                    'inline' => 'Inline',
                    'block'  => 'Block',
                )
            ),
            array(
                'id'      => @$array['key'].'_list_width',
                'type'    => 'select',
                'title'   => 'Width',
                'options' => array(
                    '12' => '100%',
                    '6'  => '50%',
                    '4'  => '33%',
                    '3'  => '25%',
                )
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