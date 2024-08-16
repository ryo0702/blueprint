<?php
if (!defined('ABSPATH')) {
    die;
}

$nowdate = date('Ymd-His');
$array_metabox = array(
    merge_array_metaboxs_page(
        array('key' => 'toppage-recruit','title' => 'トップページ','posttype' => 'page'),
        array(
            array('key' => 'page-config','title' => '基本設定','type' => 'config','config' => 'lp-recruit','view_title' => 'off','class_style' => 'off'),
            array('key' => 'view','title' => '表示','type' => 'view','view_title' => 'off','class_style' => 'off','list' => array(
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
            )),
            array('key' => 'mainvisual','title' => 'メインビジュアル','type' => 'mainvisual','view_title' => 'off'),
            array('key' => 'movie','title' => '動画','type' => 'youtube'),
            array('key' => 'list','title' => 'ベネフィット','type' => 'content_list'),
            array('key' => 'description','title' => 'ストーリー・説明','type' => 'description','view_title' => 'off'),
            array('key' => 'features1','title' => '特徴①(共感・証拠)','type' => 'content'),
            array('key' => 'features2','title' => '特徴②(共感・証拠)','type' => 'content'),
            array('key' => 'features3','title' => '特徴③(共感・証拠)','type' => 'content'),
            array('key' => 'features4','title' => '特徴④(共感・証拠)','type' => 'content'),
            array('key' => 'features5','title' => '特徴⑤(共感・証拠)','type' => 'content'),
            array('key' => 'brunch','title' => 'お店・支社','type' => 'content_brunch'),
            array('key' => 'timeline','title' => '1日の流れ','type' => 'content_timeline'),
            array('key' => 'companyinfo','title' => '会社概要','type' => 'companyinfo'),
            array('key' => 'jobinfo','title' => '募集要項','type' => 'jobinfo'),
            array('key' => 'faq','title' => 'FAQ','type' => 'faq'),
            array('key' => 'ps','title' => '追伸','type' => 'description','view_title' => 'off'),
            array('key' => 'contact','title' => 'お問合せ','type' => 'contact'),
            array('key' => 'fixed-panel','title' => '固定パネル','type' => 'fixed-panel','view_title' => 'off','class_style' => 'off'),
        )
    ),
    merge_array_metaboxs_page(
        array('key' => 'recruit-page','title' => '募集要項ページ','posttype' => 'page'),
        array(
            array('key' => 'config-recruit','title' => '設定','type' => 'original','path' => NUTRAIL_THEME_DIR.'configs/options/option-sectio-recruit-page.php'),
            array('key' => 'jobinfo','title' => '募集要項','type' => 'jobinfo'),
        ),
    ),
    merge_array_metaboxs_page(
        array('key' => 'about','title' => '会社について','posttype' => 'page'),
        array(
            array('key' => 'about_mainphoto','title' => 'メイン写真','type' => 'photo'),
            array('key' => 'about_features','title' => 'コンテンツ','type' => 'content','view_title' => 'off'),
            array('key' => 'about_links','title' => 'リンク','type' => 'content_link'),
            array('key' => 'about_brunch','title' => 'グループ会社・店舗','type' => 'content_brunch')
        )
    ),
    merge_array_metaboxs_page(
        array('key' => 'faq','title' => 'FAQ','posttype' => 'page'),
        array(
            array('key' => 'faq_faq','title' => 'FAQ','type' => 'content_faq')
        )
    ),
    merge_array_metaboxs_page(
        array('key' => 'contact','title' => 'お問合せ','posttype' => 'page'),
        array(
            array('key' => 'contact','title' => 'お問い合わせ','type' => 'contact')
        )
    ),
    merge_array_metaboxs_page(
        array('key' => 'greeting','title' => 'ご挨拶','posttype' => 'page'),
        array(
            array('key' => 'greeting_content','title' => '挨拶','type' => 'greeting')
        )
    ),
    merge_array_metaboxs_page(
        array('key' => 'service','title' => 'サービス','posttype' => 'page'),
        array(
            array('key' => 'service_mainphoto','title' => 'メイン写真','type' => 'photo'),
            array('key' => 'service_midtitle','title' => 'タイトル','type' => 'titles'),
            array('key' => 'service_features','title' => 'コンテンツ','type' => 'content_price')
        )
    ),
    merge_array_metaboxs_page(
        array('key' => 'thankyou','title' => 'サンキューページ','posttype' => 'page'),
        array(
            array('key' => 'thankyou','title' => 'サンキューページ','type' => 'thankyoupage-content','view_title' => 'off')
        )
    ),
    merge_array_metaboxs_page(
        array('key' => 'privacypolicy','title' => 'プライバシーポリシー','posttype' => 'page'),
        array(
            array('key' => 'privacypolicy','title' => 'プライバシーポリシー','type' => 'privacypolicy-content','view_title' => 'off')
        )
    ),
    // 投稿タイプ
    // merge_array_metaboxs_page(
    //     array('key' => 'sample','title' => 'サンプル投稿タイプ','posttype' => 'sample'),
    //     array(
    //         array('key' => 'service_mainphoto','title' => 'メイン写真','type' => 'photo'),
    //         array('key' => 'service_midtitle','title' => 'タイトル','type' => 'titles'),
    //     )
    // ),
);

