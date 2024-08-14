<?php
$array_setup_toppage_recruit = array(
    'meta_key' => 'config-toppage-recruit',
    'insert_values' => array(
        // Config
        'page-config_order' => array('type' => 'value','value' => 'order2'),
        'page-config_cta_title_main' => array('type' => 'value','value' => '求人のお問合せ'),
        'page-config_cta_tel' => array('type' => 'value','value' => @$_POST['company_contact_tel']),
        'page-config_cta_description' => array('type' => 'value','value' => @$_POST['company_name-short'].'への求人のお問合せはお電話もしくはフォームからお問合せください'),
        'page-config_cta_button1' => array('type' => 'value','value' => array('href' => '#','text' => 'フォームからお問合せ')),
        'page-config_cta_button2' => array('type' => 'value','value' => array('href' => 'tel:'.@$_POST['company_contact_tel'],'text' => 'お電話でお問合せ')),
        // View
        'view_view_mainvisual' => array('type' => 'value','value' => true),
        'view_view_list' => array('type' => 'value','value' => true),
        'view_view_movie' => array('type' => 'value','value' => false),
        'view_view_description' => array('type' => 'value','value' => true),
        'view_view_page-config_cta1' => array('type' => 'value','value' => true),
        'view_view_features1' => array('type' => 'value','value' => true),
        'view_view_features2' => array('type' => 'value','value' => true),
        'view_view_features3' => array('type' => 'value','value' => true),
        'view_view_features4' => array('type' => 'value','value' => false),
        'view_view_features5' => array('type' => 'value','value' => false),
        'view_view_brunch' => array('type' => 'value','value' => false),
        'view_view_timeline' => array('type' => 'value','value' => false),
        'view_view_page-config_cta2' => array('type' => 'value','value' => true),
        'view_view_companyinfo' => array('type' => 'value','value' => true),
        'view_view_jobinfo' => array('type' => 'value','value' => true),
        'view_view_faq' => array('type' => 'value','value' => true),
        'view_view_ps' => array('type' => 'value','value' => false),
        'view_view_contact' => array('type' => 'value','value' => true),
        'view_view_fixed-panel' => array('type' => 'value','value' => false),
        // Sections
        // MainVisual
        'mainvisual_main_title' => array('type' => 'value','value' => "急成長中の会社で\nのびのびと\n働きませんか？"),
        'mainvisual_sub_title' => array('type' => 'value','value' => "働きがいの見つかる会社"),
        'mainvisual_lead' => array('type' => 'value','value' => "開業から業績が伸び続けている急成長している会社です。\nあなたの力を活かす場所がここにあります。"),
        'mainvisual_text' => array('type' => 'value','value' => @$_POST['company_pref']."で働くなら、現在急成長中の当社「".@$_POST['company_name-short']."」で一緒に働きませんか？\n年齢不問・未経験歓迎の会社で1ヶ月で業務内容は覚えられる教育システムをご用意していますので、やる気のある方ならどなたでも大歓迎です。毎日の仕事が実績になり、着実にスキル＆キャリアアップでき、お客様にも感謝されるやりがいのあるお仕事です。\n少しでもご興味のある方は"),
        'mainvisual_button1' => array('type' => 'value','value' => array('href' => '#contactform-wrap','text' => '求人のご応募')),
        'mainvisual_layout' => array('type' => 'value','value' => ''),
        'mainvisual_card' => array('type' => 'value','value' => 'card card-alpha-white'),
        'mainvisual_badge1' => array('type' => 'value','value' => "未経験\n歓迎"),
        'mainvisual_badge2' => array('type' => 'value','value' => "年齢\n不問"),
        // Benefit
        'list_main_title' => array('type' => 'value','value' => 'BENEFIT'),
        'list_sub_title' => array('type' => 'value','value' => '当社のメリット'),
        'list_description' => array('type' => 'value','value' => "当社と求職中の皆様とのお約束"),
        'list_content_list' => array('type' => 'value','value' => array(
            array(
                'list_content_list_title' => "未経験でも必ず成長できます",
                'list_content_list_text' => "これまで長く培った教育マニュアルや環境で、未経験の方でも必ず成長できます。",
            ),
            array(
                'list_content_list_title' => "年齢不問、ハードワークなし",
                'list_content_list_text' => "ものすごく体力を使う仕事はありませんので、年齢や体力に関係なく働けます。",
            ),
            array(
                'list_content_list_title' => "年間休日120日以上",
                'list_content_list_text' => "年間休日120日以上ありますので、プライベートも充実できます。",
            ),
            array(
                'list_content_list_title' => "すぐに地に足をつけられます",
                'list_content_list_text' => "社員寮ありですぐに生活が始められます。",
            ),
        )),
        // Description
        'description_description_title_main' => array('type' => 'value','value' => 'ABOUT US'),
        'description_description_title_sub' => array('type' => 'value','value' => '当社について'),
        'description_description_text' => array('type' => 'value','value' => "私達の仕事は会社だけでなく、お客様、そして地域の発展のため、長らく地元密着で活動してきました。その活動が地元の人々に認められ、何度も表彰を頂いたり、地元でのシェアナンバーワン企業へと成長しました。派手なお仕事ではありませんが、必ず必要になる仕事でやりがいも感じていただける仕事です。"),
        //features Business
        'features1_main_title' => array('type' => 'value','value' => 'BUSINESS'),
        'features1_sub_title' => array('type' => 'value','value' => '仕事内容'),
        'features1_text' => array('type' => 'value','value' => "当社の仕事内容は、お客様のご要望に応じて、お客様のご自宅やご会社にお伺いし、お客様のご要望に合ったお仕事をご提案させていただきます。"),
        'features1_layout' => array('type' => 'value','value' => 'layout-3column'),
        'features1_centering' => array('type' => 'value','value' => 'justify-content-center'),
        'features1_content' => array('type' => 'value','value' => array(
            array(
                'features1_content_title' => "ハードワークなし",
                'features1_content_text' => "腰の負担や体力を消耗して転職することはありません。ハードワークなしで、楽しく働けます。",
            ),
            array(
                'features1_content_title' => "街のみんなに愛されるお仕事",
                'features1_content_text' => "地元密着で地元の人からも支持されているお仕事内容です。",
            ),
            array(
                'features1_content_title' => "初心者大歓迎のお仕事",
                'features1_content_text' => "奥深い仕事ながらも初心者大歓迎。一定のレベルまですぐい上達可能です。",
            ),
        )),
         //features Training
        'features2_main_title' => array('type' => 'value','value' => 'TRAINING'),
        'features2_sub_title' => array('type' => 'value','value' => @$_POST['company_name-short'].'の研修制度'),
        'description_description_text' => array('type' => 'value','value' => @$_POST['company_name-short']."では、未経験の方でも安心して働けるように、研修制度を充実させています。"),
        'features2_layout' => array('type' => 'value','value' => 'layout-3column'),
        'features2_centering' => array('type' => 'value','value' => 'justify-content-center'),
        'features2_content' => array('type' => 'value','value' => array(
            array(
                'features2_content_title' => "知識研修",
                'features2_content_text' => "「見て覚えろ」ではなく、しっかりとした知識研修を行います。仕事のコツもお伝えします。",
            ),
            array(
                'features2_content_title' => "実践指導",
                'features2_content_text' => "もちろん、座学だけでなく「やって覚えよう」も必要です。しっかりとじっくりご指導します。",
            ),
            array(
                'features2_content_title' => "業務中の改善",
                'features2_content_text' => "うまく行かなかったところを見つけて、改善していきます。仕事をよりよくするために。",
            ),
        )),
        //features WALFARE
        'features3_main_title' => array('type' => 'value','value' => 'WALFARE'),
        'features3_sub_title' => array('type' => 'value','value' => @$_POST['company_name-short'].'の福利厚生'),
        'description_description_text' => array('type' => 'value','value' => @$_POST['company_name-short']."では、充実した福利厚生をご用意していますので、安心して働いて頂けます。"),
        'features3_layout' => array('type' => 'value','value' => 'layout-4column'),
        'features3_centering' => array('type' => 'value','value' => 'justify-content-center'),
        'features3_content' => array('type' => 'value','value' => array(
            array(
                'features3_content_title' => "社会保険・労災完備",
                'features3_content_text' => "当たり前のことですが大事なことです。ご自分とご家族を守りましょう。",
            ),
            array(
                'features3_content_title' => "独身寮完備",
                'features3_content_text' => "遠方からのお越しの方のために独身寮もご用意しています。ワンルーム30平米の快適な寮です。",
            ),
            array(
                'features3_content_title' => "家族寮も完備",
                'features3_content_text' => "家族寮も完備しております。50平米以上の快適な寮で、ご家族と一緒に新しい生活を始めて頂けます。",
            ),
            array(
                'features3_content_title' => "豊富なボーナス実績",
                'features3_content_text' => "創業以来、ボーナスがなかった年はありません。必ず1ヶ月以上分のボーナスをお支払いしています。",
            ),
        )),
        // Company info
        'companyinfo_main_title' => array('type' => 'value','value' => 'COMPANY INFO'),
        'companyinfo_sub_title' => array('type' => 'value','value' => @$_POST['company_name-short'].'の会社情報'),
        'companyinfo_name' => array('type' => 'value','value' => @$_POST['company_name']),
        'companyinfo_president-name' => array('type' => 'value','value' => @$_POST['company_president-name']),
        'companyinfo_president-post' => array('type' => 'value','value' => @$_POST['company_president-post']),
        'companyinfo_officer' => array('type' => 'value','value' => @$_POST['company_officer']),
        'companyinfo_postnum' => array('type' => 'value','value' => @$_POST['company_postnum']),
        'companyinfo_pref' => array('type' => 'value','value' => @$_POST['company_pref']),
        'companyinfo_city' => array('type' => 'value','value' => @$_POST['company_city']),
        'companyinfo_street' => array('type' => 'value','value' => @$_POST['company_street']),
        'companyinfo_build' => array('type' => 'value','value' => @$_POST['company_build']),
        'companyinfo_tel' => array('type' => 'value','value' => @$_POST['company_tel']),
        'companyinfo_fax' => array('type' => 'value','value' => @$_POST['company_fax']),
        'companyinfo_businesscontent' => array('type' => 'value','value' => @$_POST['company_businesscontent']),
        'companyinfo_license' => array('type' => 'value','value' => @$_POST['company_license']),
        'companyinfo_bank' => array('type' => 'value','value' => @$_POST['company_bank']),
        'companyinfo_customer' => array('type' => 'value','value' => @$_POST['company_customer']),
        // Contact
        'contact_formname' => array('type' => 'value','value' => '求人のご応募'),
        'contact_sendmail' => array('type' => 'value','value' => @$_POST['sendmail']),
        'contact_main_title' => array('type' => 'value','value' => 'CONTACT'),
        'contact_sub_title' => array('type' => 'value','value' => '求人のご応募'),
        'contact_btn_label' => array('type' => 'value','value' => '求人のご応募ご応募'),
        'contact_privacypolicy_checkbox_link' => array('type' => 'value','value' => array('href' => site_url('/privacypolicy'),'text' => 'プライバシーポリシー')),
        'contact_redirect' => array('type' => 'value','value' => array('href' => site_url('/thankyou'),'text' => 'お問合せありがとうございました')),
        'contact_list' => array('type' => 'value','value' => array(
            array('contact_list_title' => 'お名前','contact_list_type' => 'input_name','contact_list_required' => true,'contact_list_style' => 'inline'),
            array('contact_list_title' => 'メール','contact_list_type' => 'input_email','contact_list_required' => true,'contact_list_style' => 'inline'),
            array('contact_list_title' => 'お電話番号','contact_list_type' => 'input_phone_number','contact_list_required' => true,'contact_list_style' => 'inline'),
            array('contact_list_title' => 'お問合せ内容','contact_list_type' => 'input_textarea','contact_list_required' => true,'contact_list_style' => 'inline'),
        )),
    )
);

require get_template_directory().'/theme-8-config/array/setup/setup_toppage_recruit_mv.php';
require get_template_directory().'/theme-8-config/array/setup/setup_toppage_recruit_list.php';
require get_template_directory().'/theme-8-config/array/setup/setup_toppage_recruit_description.php';
require get_template_directory().'/theme-8-config/array/setup/setup_toppage_recruit_features1.php';
require get_template_directory().'/theme-8-config/array/setup/setup_toppage_recruit_features2.php';
require get_template_directory().'/theme-8-config/array/setup/setup_toppage_recruit_features3.php';