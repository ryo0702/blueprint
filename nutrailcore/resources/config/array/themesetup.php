<?php
$array_templates = array(
    'toppage-recruit' => 'トップページ',
    'recruit-page' => 'リクルートページ',
    'contact' => 'お問い合わせ',
    'thankyou' => 'お問い合わせありがとうございました',
    'xmlsitemap' => 'XMLサイトマップ',
    'privacypolicy' => 'プライバシーポリシー',
);
$jobtype = array(
    '営業企画・マーケティング',
    '法人営業',
    '個人営業・代理店',
    'ルートセールス・販売促進',
    '内勤営業・テレセールス',
    '総務・人事・経理',
    '営業アシスタント・秘書',
    '受付・一般事務',
    'データ入力・事務処理',
    '医療事務・介護事務',
    'Web系システムエンジニア',
    'オープン系システムエンジニア',
    '制御・組込系エンジニア',
    'インフラエンジニア・サーバー管理者',
    'プログラマー・開発者',
    'Webデザイナー',
    'Webディレクター',
    'Webマーケター・Webアナリスト',
    'UI/UXデザイナー',
    'フロントエンドエンジニア',
    '労務・採用担当',
    '総務・庶務・法務',
    '経理・財務・会計',
    'ファッション・アパレル販売',
    '食品・生活雑貨販売',
    '薬局・ドラッグストア販売',
    '接客・サービス',
    '旅行・ホテル・宿泊',
    'コールセンター・テレオペレーター',
    'カスタマーサポート・ヘルプデスク',
    'テレマーケティング',
    '戦略コンサルタント',
    'ITコンサルタント',
    '経営コンサルタント',
    '税理士・公認会計士',
    '秘書・アシスタント',
    'データアナリスト・ビジネスアナリスト',
    '広報・PR',
    'マーケティング',
    'デジタルマーケティング',
    'メディアプランナー・バイヤー',
    'クリエイティブディレクター',
    'グラフィックデザイナー',
    '広告デザイナー',
    'パッケージデザイナー',
    'インテリアデザイナー',
    '研修講師・トレーナー',
    '教育コンサルタント',
    '保育士・幼稚園教諭',
    '中学校・高校教員',
    '大学・専門学校教員',
    '医師・歯科医師・薬剤師',
    '看護師・准看護師',
    '介護士・ケアマネージャー',
    '臨床開発・医療機器営業',
    '建築士',
    'インテリアデザイナー',
    '建築設計補助',
    'CADオペレーター',
    '施工管理・現場監督',
    '土木技術者',
    '測量士',
    '環境コンサルタント',
    '防災・減災コンサルタント',
    'トンネル技術者',
    '設備エンジニア',
    'メンテナンスエンジニア',
    '空調・衛生設備技術者',
    '電気工事士',
    '設備保全・点検',
    'インテリアコーディネーター',
    '内装工事',
    '建築塗装工事',
    '左官工事',
    '足場職人',
    '型枠大工',
    '鉄筋工',
    '配管工・溶接工',
    '外構・造園職人',
    '飲食店店長',
    'ホールスタッフ・キッチンスタッフ',
    '食品メーカー・卸・販売',
    '美容師・理容師',
    'エステティシャン',
    'ネイリスト',
    'アイリスト・メイクアップアーティスト',
    '美容部員・化粧品販売員',
    '運転手・ドライバー',
    '航空・船舶運行管理',
    '倉庫管理・物流管理',
    '国際物流・輸出入管理',
    '配送・宅配便',
    '生産管理・工場長',
    '製造・生産技術者',
    'バイオ・化学・食品・医薬品',
    '繊維・素材・金属・機械',
    '銀行・信用金庫・信用組合',
    '生命保険・損害保険',
    '証券・投資銀行・M&Aアドバイザー',
    'ファンドマネージャー・アナリスト',
    '不動産投資・不動産ファンド'
);
$array_setupforms = array(
    array('name' => 'select_infotype','type' => 'select','title' => '求人タイプを選択','option' => array(
        'taigu' => '待遇優先',
        'mikeiken' => '未経験優先',
        'hatarakiyasusa' => '働きやすさ優先',
    )),
    array('name' => 'select_jobtype','type' => 'select','title' => '業種を選択','option' => $jobtype),
    array('type' => 'hr'),
    array('name' => 'company_name','type' => 'text','title' => '会社名(正式名称)'),
    array('name' => 'company_name-short','type' => 'text','title' => '会社名(略称)'),
    array('name' => 'company_postnum','type' => 'text','title' => '本社所在地：郵便番号'),
    array('name' => 'company_pref','type' => 'select','title' => '本社所在地：都道府県','option' => load_pref()),
    array('name' => 'company_city','type' => 'text','title' => '本社所在地：市区町村'),
    array('name' => 'company_street','type' => 'text','title' => '本社所在地：番地'),
    array('name' => 'company_build','type' => 'text','title' => '本社所在地：建物名・部屋番号'),
    array('name' => 'company_president-name','type' => 'text','title' => '代表者名'),
    array('name' => 'company_president-post','type' => 'text','title' => '代表者役職'),
    array('name' => 'company_officer','type' => 'textarea','title' => '役員'),
    array('name' => 'company_businesscontent','type' => 'textarea','title' => '業務内容'),
    array('name' => 'company_license','type' => 'textarea','title' => '許可・認可'),
    array('name' => 'company_bank','type' => 'textarea','title' => '取引銀行'),
    array('name' => 'company_customer','type' => 'textarea','title' => '主要取引先'),
    array('name' => 'company_contact_tel','type' => 'text','title' => '受付電話番号'),
    array('type' => 'hr'),
    array('name' => 'jobinfo_occupation','type' => 'text','title' => '職種'),
    array('name' => 'jobinfo_content','type' => 'textarea','title' => '業務内容'),
    array('name' => 'jobinfo_holiday','type' => 'textarea','title' => '休日'),
    array('name' => 'jobinfo_time','type' => 'textarea','title' => '勤務時間'),
    array('name' => 'jobinfo_skills','type' => 'textarea','title' => '能力'),
    array('name' => 'jobinfo_salary_payment_method','type' => 'select','title' => '給与形態','option' => array_salary_payment_method()
    ),
    array('name' => 'jobinfo_amount_money','type' => 'number','title' => '給与額'),
    array('name' => 'jobinfo_bonus','type' => 'number','title' => '年間ボーナス額'),
    array('name' => 'jobinfo_salary_description','type' => 'textarea','title' => '給与に関する説明'),
    array('name' => 'jobinfo_salary_model','type' => 'textarea','title' => '給与モデル'),
    array('name' => 'jobinfo_employment_status','type' => 'select','title' => '雇用形態','option' => array_employment_status()),
    array('name' => 'sendmail','type' => 'text','title' => 'お問合せフォーム送信先'),
    array('type' => 'hr'),
    array('name' => 'create_pages','type' => 'checkbox','title' => '発行ページ','option' => $array_templates),
);

$company_place = null;
if(!empty($_POST['company_pref']) && !empty($_POST['company_city'])){
    $company_place = @$_POST['company_pref'].@$_POST['company_city'].@$_POST['company_street'].@$_POST['company_build'];
}

// Load Array
require get_template_directory().'/theme-8-config/array/setup/setup_toppage_recruit.php';

if(!empty($_POST['submit'])){

    $array_setupactions = array(
        // Toppage
        'toppage-recruit' => $array_setup_toppage_recruit,
        'recruit-page' => array(
            'meta_key' => 'config-recruit-page',
            'insert_values' => array(
                'jobinfo_main_title' => array('type' => 'value','value' => 'JOB INFO'),
                'jobinfo_sub_title' => array('type' => 'value','value' => '募集要項'),
                'jobinfo_occupation' => array('type' => 'value','value' => @$_POST['jobinfo_occupation']),
                'jobinfo_content' => array('type' => 'value','value' => @$_POST['jobinfo_content']),
                'jobinfo_holiday' => array('type' => 'value','value' => @$_POST['jobinfo_holiday']),
                'jobinfo_time' => array('type' => 'value','value' => @$_POST['jobinfo_time']),
                'jobinfo_skills' => array('type' => 'value','value' => @$_POST['jobinfo_skills']),
                'jobinfo_salary_payment_method' => array('type' => 'value','value' => @$_POST['jobinfo_salary_payment_method']),
                'jobinfo_amount_money' => array('type' => 'value','value' => @$_POST['jobinfo_amount_money']),
                'jobinfo_bonus' => array('type' => 'value','value' => @$_POST['jobinfo_bonus']),
                'jobinfo_salary_description' => array('type' => 'value','value' => @$_POST['jobinfo_salary_description']),
                'jobinfo_salary_model' => array('type' => 'value','value' => @$_POST['jobinfo_salary_model']),
                'jobinfo_employment_status' => array('type' => 'value','value' => @$_POST['jobinfo_employment_status']),
                'jobinfo_date_posted' => array('type' => 'value','value' => date('Y-m-d')),
                'jobinfo_valid_through' => array('type' => 'value','value' =>date("Y-m-d",strtotime("+1 month"))),
                'jobinfo_postnum' => array('type' => 'value','value' => @$_POST['company_postnum']),
                'jobinfo_pref' => array('type' => 'value','value' => @$_POST['company_pref']),
                'jobinfo_city' => array('type' => 'value','value' => @$_POST['company_city']),
                'jobinfo_street' => array('type' => 'value','value' => @$_POST['company_street']),
                'jobinfo_block' => array('type' => 'value','value' => @$_POST['company_block']),
            )
        ),
        'privacypolicy' => array(
            'meta_key' => 'config-privacypolicy',
            'insert_values' => array(
                'privacypolicy_comapny' => array('type' => 'option','name' => 'company_name'),
                'privacypolicy_people' => array('type' => 'option_set_space','keys' => array(
                    'company_president-post',
                    'company_president-name',
                )),
                'privacypolicy_address' => array('type' => 'option_set','keys' => array(
                    'company_pref',
                    'company_city',
                    'company_street',
                    'company_build',
                )),
                'privacypolicy_content_addsense' => array('type' => 'value','value' => true),
                'privacypolicy_content_ga' => array('type' => 'value','value' => true),
                'privacypolicy_content_contactform' => array('type' => 'value','value' => true),
            ),
        ),
        'contact' => array(
            'meta_key' => 'config-contact',
            'insert_values' => array(
                'contact_formname' => array('type' => 'value','value' => "お問い合わせ"),
                'contact_main_title' => array('type' => 'value','value' => "CONTACT"),
                'contact_main_sub' => array('type' => 'value','value' => "お問い合わせ"),
                'contact_sendmail' => array('type' => 'value','value' => @$_POST['sendmail']),
                'contact_redirect' => array('type' => 'value','value' => array('href' => site_url('/thankyou'),'text' => 'お問合せありがとうございました')),
                'contact_privacypolicy_checkbox_link' => array('type' => 'value','value' => array('href' => site_url('/privacypolicy'),'text' => 'プライバシーポリシー')),
                'contact_list' => array('type' => 'value','value' => array(
                    array('contact_list_title' => 'お名前','contact_list_type' => 'input_name','contact_list_required' => true,'contact_list_style' => 'inline'),
                    array('contact_list_title' => 'メール','contact_list_type' => 'input_email','contact_list_required' => true,'contact_list_style' => 'inline'),
                    array('contact_list_title' => 'お電話番号','contact_list_type' => 'input_phone_number','contact_list_required' => true,'contact_list_style' => 'inline'),
                    array('contact_list_title' => 'お問合せ内容','contact_list_type' => 'input_textarea','contact_list_required' => true,'contact_list_style' => 'inline'),
                )),
                'contact_btn_label' => array('type' => 'value','value' => "送信"),
            ),
        ),
        'thankyou' => array(
            'meta_key' => 'config-thankyou',
            'insert_values' => array(
                'thankyou_content' => array('type' => 'value','value' => "この度はお問い合わせいただき、誠にありがとうございました。"),
            ),
        ),
        'xmlsitemap' => array(
            'meta_key' => 'config-xmlsitemap',
            'insert_values' => array(),
        )
    );
}