<?php
include NUTRAIL_CORE_PATH.'views/parts/header/header-basic.php';

if (have_posts()) {
    while (have_posts()) {
        the_post();

        nutrail_page_meta('config-toppage');

        $order = nutrail_get_meta('page-config_order');

        $this_page_views = array(
            'mainvisual'       => array('title' => 'メインビジュアル', 'type' => 'mainvisual'),
            'description'      => array('title' => '説明', 'type' => 'description'),
            'page-config_cta1' => array('title' => 'CTA', 'type' => 'cta'),
            'features1'        => array('title' => '特徴①', 'type' => 'content'),
            'features2'        => array('title' => '特徴②', 'type' => 'content'),
            'features3'        => array('title' => '特徴③', 'type' => 'content'),
            'features4'        => array('title' => '特徴④', 'type' => 'content'),
            'features5'        => array('title' => '特徴⑤', 'type' => 'content'),
            'list'             => array('title' => 'リスト', 'type' => 'content-list'),
            'movie'            => array('title' => '動画', 'type' => 'youtube'),
            'page-config_cta2' => array('title' => 'CTA', 'type' => 'cta'),
            'faq'              => array('title' => 'FAQ', 'type' => 'faq'),
            'companyinfo'      => array('title' => '会社概要', 'type' => 'companyinfo'),
            'brunch'           => array('title' => 'お店・支社', 'type' => 'content_brunch'),
            'ps'               => array('title' => '追伸', 'type' => 'description'),
            'contact'          => array('title' => 'お問合せ', 'type' => 'contact'),
            'fixed-panel'      => array('title' => '固定パネル', 'type' => 'fixed-panel'),
        );

        foreach ($this_page_views as $section_name => $section_value) {
            $sectionname = str_replace("view_", "", $section_name);
            if (!empty($section_value['type'])) {
                if (file_exists(NUTRAIL_CORE_PATH.'views/parts/section/section-'.$section_value['type'].'.php')) {
                    $section_view_config_key = $section_name;
                    include NUTRAIL_CORE_PATH.'views/parts/section/section-'.$section_value['type'].'.php';
                }
            }
        }
    }
}

include NUTRAIL_CORE_PATH.'views/parts/footer/footer-basic.php';