<?php
$return_array = $return_array_field = $insert_field = null;

$insert_field = array(
    array(
        'id'    => @$array['key'].'_occupation',
        'type'  => 'text',
        'title' => '職種<span style="color:#FF0000;margin-left:3px;display:inline-block;">【必須】</span>',
        'attributes' => array(
            'required' => 'required',
        ),
    ),
    array(
        'id'    => @$array['key'].'_content',
        'type'  => 'textarea',
        'title' => '業務内容<span style="color:#FF0000;margin-left:3px;display:inline-block;">【必須】</span>',
        'attributes' => array(
            'required' => 'required',
        ),
    ),
    array(
        'id'    => @$array['key'].'_holiday',
        'type'  => 'textarea',
        'title' => '休日'
    ),
    array(
        'id'    => @$array['key'].'_time',
        'type'  => 'textarea',
        'title' => '勤務時間<span style="color:#FF0000;margin-left:3px;display:inline-block;">【必須】</span>',
        'attributes' => array(
            'required' => 'required',
        ),
    ),
    array(
        'id'    => @$array['key'].'_skills',
        'type'  => 'textarea',
        'title' => '能力'
    ),
    array(
        'id'       => @$array['key'].'_date_posted',
        'type'     => 'date',
        'settings' => [
            'dateFormat' => 'yy-mm-dd',
        ],
        'title'    => '求人 有効期限 開始<span style="color:#FF0000;margin-left:3px;display:inline-block;">【必須】</span>',
        'attributes' => array(
            'required' => 'required',
        ),
    ),
    array(
        'id'       => @$array['key'].'_valid_through',
        'type'     => 'date',
        'settings' => [
            'dateFormat' => 'yy-mm-dd',
        ],
        'title'    => '求人 有効期限 終了<span style="color:#FF0000;margin-left:3px;display:inline-block;">【必須】</span>',
        'attributes' => array(
            'required' => 'required',
        ),
    ),
    array(
        'id'       => @$array['key'].'_education_requirements',
        'type'     => 'select',
        'chosen'   => true,
        'multiple' => true,
        'options'  => array_education_requirements(),
        'title'    => '学歴'
    ),
    array(
        'id'    => @$array['key'].'_qualifications',
        'type'  => 'text',
        'title' => '学歴・経験等の記載(例 学歴年齢不問)'
    ),
    array(
        'id'      => @$array['key'].'_employment_status',
        'type'    => 'select',
        'options' => array_employment_status(),
        'title'   => '雇用形態<span style="color:#FF0000;margin-left:3px;display:inline-block;">【必須】</span>',
        'attributes' => array(
            'required' => 'required',
        ),
    ),
    array(
        'id'      => @$array['key'].'_salary_payment_method',
        'type'    => 'select',
        'options' => array_salary_payment_method(),
        'title'   => '給与形態<span style="color:#FF0000;margin-left:3px;display:inline-block;">【必須】</span>',
        'attributes' => array(
            'required' => 'required',
        ),
    ),
    array(
        'id'    => @$array['key'].'_amount_money',
        'type'  => 'number',
        'title' => '給与額(基本値)<span style="color:#FF0000;margin-left:3px;display:inline-block;">【必須】</span>',
        'attributes' => array(
            'required' => 'required',
        ),
    ),
    array(
        'id'    => @$array['key'].'_amount_money_max',
        'type'  => 'number',
        'title' => '給与額(最大値)',
    ),
    array(
        'id'    => @$array['key'].'_bonus',
        'type'  => 'number',
        'title' => '年間ボーナス額',
    ),
    array(
        'id'    => @$array['key'].'_salary_description',
        'type'  => 'textarea',
        'title' => '給与に関する説明'
    ),
    array(
        'id'    => @$array['key'].'_salary_model',
        'type'  => 'textarea',
        'title' => '給与モデル'
    ),
    array(
        'id'    => @$array['key'].'_welfare',
        'type'  => 'textarea',
        'title' => '待遇・福利厚生'
    ),
    array(
        'id'    => @$array['key'].'_company_name',
        'type'  => 'text',
        'title' => '勤務先の正式名称<span style="color:#FF0000;margin-left:3px;display:inline-block;">【必須】</span>',
        'attributes' => array(
            'required' => 'required',
        ),
    ),
    array('id' => @$array['key'].'_postnum', 'type' => 'text', 'title' => '勤務地 郵便番号<span style="color:#FF0000;margin-left:3px;display:inline-block;">【必須】</span>'),
    array(
        'id'          => @$array['key'].'_pref',
        'type'        => 'select',
        'title'       => '勤務地 都道府県<span style="color:#FF0000;margin-left:3px;display:inline-block;">【必須】</span>',
        'placeholder' => '都道府県を選択',
        'options'     => load_pref(),
        'attributes' => array(
            'required' => 'required',
        ),
    ),
    array('id' => @$array['key'].'_city', 'type' => 'text', 'title' => '勤務地 市区町村<span style="color:#FF0000;margin-left:3px;display:inline-block;">【必須】</span>','attributes' => array(
        'required' => 'required',
    ),),
    array('id' => @$array['key'].'_street', 'type' => 'text', 'title' => '勤務地 番地<span style="color:#FF0000;margin-left:3px;display:inline-block;">【必須】</span>','attributes' => array(
        'required' => 'required',
    ),),
    array('id' => @$array['key'].'_build', 'type' => 'text', 'title' => '勤務地 建物・部屋番号'),
    array('id' => @$array['key'].'_map_link', 'type' => 'link', 'title' => '勤務地 マップへのリンク'),
    array('id' => @$array['key'].'_access', 'type' => 'textarea', 'title' => '勤務地 アクセス'),
);

require NUTRAIL_CORE_PATH.'includes/array/section/insert-section-title.php';
require NUTRAIL_CORE_PATH.'includes/array/section/insert-section-class.php';

$return_array = array(
    'name'   => @$array['key'],
    'title'  => @$array['title'],
    'fields' => $insert_field,
);