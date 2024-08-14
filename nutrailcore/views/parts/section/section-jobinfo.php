<?php
/**
 * Section job
 *
 * @var $config_page
 * @var $section_view_config_key
 */

$children_content = null;
$this_address     = null;

if (!empty(@$config_page[$section_view_config_key.'_postnum'])) {
    $this_address .= "〒".@$config_page[$section_view_config_key.'_postnum']."\n";
}
if (!empty(@$config_page[$section_view_config_key.'_pref'])) {
    $this_address .= @$config_page[$section_view_config_key.'_pref'];
}
if (!empty(@$config_page[$section_view_config_key.'_city'])) {
    $this_address .= @$config_page[$section_view_config_key.'_city'];
}
if (!empty(@$config_page[$section_view_config_key.'_street'])) {
    $this_address .= @$config_page[$section_view_config_key.'_street'];
}
if (!empty(@$config_page[$section_view_config_key.'_build'])) {
    $this_address .= @$config_page[$section_view_config_key.'_build'];
}
if (!empty(@$config_page[$section_view_config_key.'_map_link'])) {
    $target = null;
    if(!empty(@$config_page[@$section_view_config_key.'_map_link']['target'])){
        $target = ' target="_blank"';
    }
    $this_address .= '<div><a class="btn btn-xs btn-outline-main" href="'.@$config_page[$section_view_config_key.'_map_link']['url'].'"'.$target.'>'.@$config_page[$section_view_config_key.'_map_link']['text'].'</a></div>';
}

$array_info1 = array(
    array('name' => $section_view_config_key.'_occupation', 'type' => 'text', 'title' => '職種'),
    array('name' => $section_view_config_key.'_content', 'type' => 'textarea', 'title' => '業務内容'),
    array('name' => $section_view_config_key.'_address', 'type'  => 'text', 'title' => '勤務地', 'value' => $this_address),
    array('name' => $section_view_config_key.'_access', 'type' => 'textarea', 'title' => 'アクセス'),
    array('name' => $section_view_config_key.'_holiday', 'type' => 'textarea', 'title' => '休日'),
    array('name' => $section_view_config_key.'_time', 'type' => 'textarea', 'title' => '勤務時間'),
    array('name' => $section_view_config_key.'_skills', 'type' => 'textarea', 'title' => '能力'),
    array('name' => $section_view_config_key.'_qualifications', 'title' => '学歴・経験等の記載(例 学歴年齢不問)'),
    array('name' => $section_view_config_key.'_education_requirements', 'title' => '学歴', 'value' => array_get_label(array_education_requirements(), @$config_page[$section_view_config_key.'_education_requirements'])),
    array('name' => $section_view_config_key.'_employment_status', 'title' => '雇用形態', 'value' => array_get_label(array_employment_status(), @$config_page[$section_view_config_key.'_employment_status'])),
    array('name' => $section_view_config_key.'_salary_payment_method', 'title' => '給与形態', 'value' => array_get_label(array_salary_payment_method(), @$config_page[$section_view_config_key.'_salary_payment_method'])),
    array('name' => $section_view_config_key.'_amount_money', 'title' => '給与額', 'value' => number_format((int)@$config_page[$section_view_config_key.'_amount_money']),'lot' => '円'),
    array('name' => $section_view_config_key.'_amount_money_max', 'title' => '給与額(最大)', 'value' => number_format((int)@$config_page[$section_view_config_key.'_amount_money_max']),'lot' => '円'),
    array('name' => $section_view_config_key.'_bonus', 'title' => '年間ボーナス額', 'value' => number_format((int)@$config_page[$section_view_config_key.'_bonus']),'lot' => '円'),
    array('name' => $section_view_config_key.'_salary_description', 'title' => '給与に関する説明'),
    array('name' => $section_view_config_key.'_salary_model', 'title' => '給与モデル'),
    array('name' => $section_view_config_key.'_welfare', 'type' => 'textarea', 'title' => '福利厚生'),
    array('name' => $section_view_config_key.'_company_name', 'type' => 'text', 'title' => '勤務先名','value' => @$_POST['company_name']),
    array('name' => $section_view_config_key.'_date_posted', 'type' => 'date', 'title' => '求人 有効期限 開始'),
    array('name' => $section_view_config_key.'_valid_through', 'type' => 'date', 'title' => '求人 有効期限 終了'),
);

if (is_array(@$array_info1)) {
    foreach ($array_info1 as $info_value) {
        $insertvalue = null;
        if (!empty(@$info_value['value'])) {
            if(!empty(@$info_value['lot'])){
                $insertvalue = @$info_value['value'].@$info_value['lot'];
            }
            else{
                $insertvalue = @$info_value['value'];
            }
            if(!empty($insertvalue)){
                $children_content[] = html_pileup_content(array(
                    'type'  => 'table-tr-2column',
                    'title' => @$info_value['title'],
                    'text'  => $insertvalue
                ));
            }
        } else {
            if (!empty(@$config_page[@$info_value['name']])) {
                $children_content[] = html_pileup_content(array(
                    'type'  => 'table-tr-2column',
                    'title' => @$info_value['title'],
                    'text'  => @$config_page[@$info_value['name']]
                ));
            } else {
                // $children_content[] = html_pileup_content(array(
                //     'type'  => 'table-tr-2column',
                //     'title' => @$info_value['title'],
                //     'text'  => ' '
                // ));
            }
        }
    }
}

// Wrap
$pileup_html = null;
$pileup_html = array(
    array(
        'elem'    => 'section',
        'class'   => array('section', @$config_page[$section_view_config_key.'_class']),
        'style'   => array(
            'background-color' => @$config_page[$section_view_config_key.'_bgc'],
            'color'            => @$config_page[$section_view_config_key.'_color'],
            'background-image' => @$config_page[$section_view_config_key.'_bgi']['url']
        ),
        'content' => array(
            array(
                'elem'    => 'div',
                'class'   => array('titleset'),
                'content' => array(
                    html_pileup_content(array(
                        'type'        => 'titleset',
                        'title'       => @$config_page[$section_view_config_key.'_main_title'],
                        'subtitle'    => @$config_page[$section_view_config_key.'_sub_title'],
                        'description' => @$config_page[$section_view_config_key.'_description'],
                        'readmore'    => @$config_page[$section_view_config_key.'_readmore'],
                    )),
                )
            ),
            array(
                'elem'    => 'div',
                'class'   => array('container-s'),
                'content' => array(
                    array(
                        'elem'    => 'div',
                        'class'   => array(
                            @$config_page[$section_view_config_key.'_inner_classset'],
                            @$config_page[$section_view_config_key.'_inner_class']
                        ),
                        'content' => array(
                            array('elem' => 'table', 'class' => array('table-list'), 'content' => $children_content)
                        )
                    )
                )
            )
        )
    ),
);

echo html_pileup($pileup_html);

include_once NUTRAIL_CORE_PATH.'includes/schema/job.php';