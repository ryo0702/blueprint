<?php
function admin_hearingsystem()
{
    add_menu_page(
        esc_html__('Hearing system', 'nutrail'),
        esc_html__('Hearing system', 'nutrail'),
        'manage_options',
        'admin_hearingsystem',
        'add_admin_hearingsystem',
        'dashicons-email',
        24
    );
    add_submenu_page('admin_hearingsystem', 'ヒアリングフォーム', 'ヒアリングフォーム', 'edit_themes', 'add_admin_hearingsystem_form', 'add_admin_hearingsystem_form');
}

add_action('admin_menu', 'admin_hearingsystem');

function add_admin_hearingsystem()
{
    if (!empty($_GET['delete']) && !empty($_GET['post'])) {
        foreach ($_GET['post'] as $post_id) {
            wp_delete_post($post_id);
        }
        require_once NUTRAIL_CORE_PATH.'includes/hearingsystem/delete.php';
        return;
    }
    if (empty($_GET['type']) || @$_GET['type'] == 'list') {
        require_once NUTRAIL_CORE_PATH.'includes/hearingsystem/list.php';
        return;
    }
    if (@$_GET['type'] == 'view' && !empty(@$_GET['id'])) {
        require_once NUTRAIL_CORE_PATH.'includes/hearingsystem/view.php';
        return;
    }
    if (@$_GET['type'] == 'statuschange' && !empty(@$_GET['id'])) {
        require_once NUTRAIL_CORE_PATH.'includes/hearingsystem/statuschange.php';
        return;
    }
    if (@$_GET['type'] == 'delete' && !empty(@$_GET['id'])) {
        wp_delete_post(@$_GET['id']);
        require_once NUTRAIL_CORE_PATH.'includes/hearingsystem/delete.php';
    }
}

function add_admin_hearingsystem_form()
{
    $array_hearing_step1 = array(
        array('type' => 'title', 'title' => '求人タイプ'),
        array(
            'title'       => '雇用形態',
            'name'        => 'type_koyoukeitai',
            'type'        => 'select',
            'options'     => array(
                '正社員',
                'アルバイト',
                'パートタイマー',
                '派遣',
                '契約社員',
                '業務委託',
                '新卒'
            ),
            'description' => '雇用形態を選択してください'
        ),
        array(
            'title'       => '職種',
            'name'        => 'type_shokushu',
            'type'        => 'select',
            'options'     => array(
                '建設',
                '配送',
                '介護',
                '飲食',
                '宿泊',
                '看護',
                '営業',
                'クリエイティブ',
                '営業',
                '事務',
            ),
            'description' => '近い職種を選んでください。'
        ),
        array('type' => 'hr'),
        array('type' => 'title', 'title' => '給与'),
        array(
            'title'   => '給与形態',
            'name'    => 'type_kyuyokeitai',
            'type'    => 'select',
            'options' => array(
                '年収',
                '月給',
                '日給',
                '時給',
            )
        ),
        array('title' => '給与', 'name' => 'kyuyo', 'type' => 'number'),
        array('title' => '賞与1回の額', 'name' => 'shoyo', 'type' => 'number'),
        array('title' => '賞与支給回数', 'name' => 'shoyo', 'type' => 'number'),
        array('title' => '1年間の昇給回数', 'name' => 'shokyu', 'type' => 'number'),
        array('type' => 'hr'),
        array('type' => 'title', 'title' => '福利厚生'),
        array('title' => '社会保険', 'name' => 'shaho', 'type' => 'check_single', 'label' => '完備', 'value' => 'yes'),
        array(
            'title' => '家族寮',
            'name'  => 'shataku_kazoku',
            'type'  => 'check_single',
            'label' => '完備',
            'value' => 'yes'
        ),
        array(
            'title' => '単身寮',
            'name'  => 'shataku_tanshin',
            'type'  => 'check_single',
            'label' => '完備',
            'value' => 'yes'
        ),
        array(
            'title' => '交通費',
            'name'  => 'teate_koutsuhi',
            'type'  => 'check_single',
            'label' => '支給',
            'value' => 'yes'
        ),
        array(
            'title' => '家族手当',
            'name'  => 'teate_kazoku',
            'type'  => 'check_single',
            'label' => '支給',
            'value' => 'yes'
        ),
        array(
            'title' => '技術手当',
            'name'  => 'teate_gijutsu',
            'type'  => 'check_single',
            'label' => '支給',
            'value' => 'yes'
        ),
        array(
            'title' => '役職手当',
            'name'  => 'teate_yakushoku',
            'type'  => 'check_single',
            'label' => '支給',
            'value' => 'yes'
        ),
        array(
            'title' => '出産手当',
            'name'  => 'teate_shusan',
            'type'  => 'check_single',
            'label' => '支給',
            'value' => 'yes'
        ),
        array(
            'title' => '慶弔休暇',
            'name'  => 'kyuka_keicho',
            'type'  => 'check_single',
            'label' => 'あり',
            'value' => 'yes'
        ),
        array(
            'title' => '夏季休暇',
            'name'  => 'kyuka_kaki',
            'type'  => 'check_single',
            'label' => 'あり',
            'value' => 'yes'
        ),
        array(
            'title' => '年末年始休暇',
            'name'  => 'kyuka_nenmatsunenshi',
            'type'  => 'check_single',
            'label' => 'あり',
            'value' => 'yes'
        ),
        array(
            'title' => '作業着貸与',
            'name'  => 'teate_sagyogi',
            'type'  => 'check_single',
            'label' => '支給',
            'value' => 'yes'
        ),
        array('type' => 'hr'),
        array('type' => 'title', 'title' => '応募要件'),
        array(
            'title' => '普通免許',
            'name'  => 'futumenkyo',
            'type'  => 'check_single',
            'label' => '普通免許必須',
            'value' => 'yes'
        ),
        array('title' => '必要資格1', 'name' => 'shikaku1', 'type' => 'text'),
        array('title' => '必要資格2', 'name' => 'shikaku2', 'type' => 'text'),
        array('title' => '必要資格3', 'name' => 'shikaku3', 'type' => 'text'),
        array('type' => 'hr'),
        array('type' => 'title', 'title' => '面接'),
        array('title' => '面接回数', 'name' => 'mensetsu', 'type' => 'number'),
        array('title' => '担当者', 'name' => 'tantosha', 'type' => 'text'),
        array('type' => 'hr'),
        array('type' => 'title', 'title' => '勤務'),
        array('title' => '勤務開始', 'name' => 'kinmujikan_start', 'type' => 'number'),
        array('title' => '勤務終了', 'name' => 'kinmujikan_end', 'type' => 'number'),
        array('title' => '休憩時間', 'name' => 'kinmujikan_kyukei', 'type' => 'number'),
        array(
            'title'   => '休み',
            'name'    => 'type_kyuyokeitai',
            'type'    => 'select',
            'options' => array(
                '土日祝日休み',
                '週休2日(平日休み)',
                '日曜休み(土曜日隔週休み)',
                '日曜休み',
            )
        ),
        array('type' => 'hr'),
        array('type' => 'title', 'title' => '会社情報'),
        array('title' => '会社名', 'name' => 'kaisha_name', 'type' => 'text'),
        array('title' => '会社名(ひらがな)', 'name' => 'kaisha_name_hiragana', 'type' => 'text'),
        array('title' => '会社名(英語)', 'name' => 'kaisha_name_english', 'type' => 'text'),
        array('title' => '代表者', 'name' => 'daihyo_name', 'type' => 'text'),
        array('title' => '代表者役職', 'name' => 'daihyo_yakushoku', 'type' => 'text'),
        array('title' => '本社所在地(郵便番号 - ハイフンあり)', 'name' => 'honsha_postnumber', 'type' => 'text'),
        array('title' => '本社所在地(都道府県)', 'name' => 'honsha_pref', 'type' => 'text'),
        array('title' => '本社所在地(市区町村)', 'name' => 'honsha_city', 'type' => 'text'),
        array('title' => '本社所在地(番地・建物)', 'name' => 'honsha_other', 'type' => 'text'),
        array('title' => '従業員人数', 'name' => 'jugyoinninzu', 'type' => 'text'),
        array('title' => '設立年', 'name' => 'setsuritsu_year', 'type' => 'number'),
        array('title' => '設立月', 'name' => 'setsuritsu_year', 'type' => 'number'),
        array('type' => 'hr'),
        array('type' => 'title', 'title' => '勤務地'),
        array('title' => '勤務地名', 'name' => 'kinmuchi_postnumber', 'type' => 'text'),
        array('title' => '勤務地(郵便番号 - ハイフンあり)', 'name' => 'kinmuchi_postnumber', 'type' => 'text'),
        array('title' => '勤務地(都道府県)', 'name' => 'kinmuchi_pref', 'type' => 'text'),
        array('title' => '勤務地(市区町村)', 'name' => 'kinmuchi_city', 'type' => 'text'),
        array('title' => '勤務地(番地・建物)', 'name' => 'kinmuchi_other', 'type' => 'text'),
        array('title' => 'アクセス', 'name' => 'kinmuchi_access', 'type' => 'text'),
        array(
            'title' => '自動車通勤',
            'name'  => 'kinmuchi_tsukin_jidosha',
            'type'  => 'futsumenkyo',
            'label' => '通勤可能',
            'value' => 'yes'
        ),
        array(
            'title' => '自転車通勤',
            'name'  => 'kinmuchi_tsukin_jitensha',
            'type'  => 'futsumenkyo',
            'label' => '通勤可能',
            'value' => 'yes'
        ),
        array(
            'title' => 'バイク通勤',
            'name'  => 'kinmuchi_tsukin_bike',
            'type'  => 'futsumenkyo',
            'label' => '通勤可能',
            'value' => 'yes'
        ),
    );

    $array_hearing_step2 = array(

        // array('title' => 'LPタイプ','name' => 'type_lp','type' => 'select','options' => array(
        //     '情熱','誠実','和み'
        // ),'description' => 'LPで表現したいテイストを選んでください。'),
        // array('title' => '寮','name' => 'check_dormitory','type' => 'check_single','label' => '寮がある','value' => 'yes'),
        // array('title' => '未経験者','name' => 'check_inexperienced','type' => 'check_single','label' => '未経験可能','value' => 'yes'),
        // array('title' => '未経験者','name' => 'check_inexperienced','type' => 'check_single','label' => '未経験可能','value' => 'yes'),
        // array('title' => '未経験者','name' => 'check_inexperienced','type' => 'check_single','label' => '未経験可能','value' => 'yes'),
    );

    if (!empty($_POST['step1'])) {
        // Action
        $array_post_insert = $postid = $post_meta_setting = null;
        $array_post_insert = array(
            'post_title'  => @$_POST['type_koyoukeitai'].'-'.@$_POST['type_shokushu'].'-'.date('Ymd'),
            'post_type'   => 'hearingsystem',
            'post_status' => 'publish',
        );
        $postid            = wp_insert_post($array_post_insert);
        foreach ($array_hearing_step1 as $inpts) {
            if (!empty($inpts['name'])) {
                $post_meta_setting[$inpts['name']] = $_POST[$inpts['name']];
            }
        }
        update_post_meta($postid, 'config', $post_meta_setting);
        // View
        $page_title        = 'ステップ2';
        $array_hearing     = $array_hearing_step2;
        $page_submit       = 'step3';
        $page_submit_label = '次へ';
        require_once NUTRAIL_CORE_PATH.'includes/hearingsystem/form.php';
    } else {
        // View
        $page_title        = 'ステップ1';
        $array_hearing     = $array_hearing_step1;
        $page_submit       = 'step2';
        $page_submit_label = '次へ';
        require_once NUTRAIL_CORE_PATH.'includes/hearingsystem/form.php';
    }
}