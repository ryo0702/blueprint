<?php
$logo_link_no = true;
include NUTRAIL_CORE_PATH.'views/parts/header/header-basic.php';

if (have_posts()) {
    while (have_posts()) {
        the_post();

        nutrail_page_meta('config-recruit-page');

        $thispageid   = $layoutpageid = null;
        $thispageid   = get_the_ID();
        $thispagemeta = get_post_meta($thispageid, 'config-recruit-page', true);

        if (!empty($thispagemeta['config-recruit_id'])) {
            $layoutpageid = $thispagemeta['config-recruit_id'];

            nutrail_page_meta('config-toppage-recruit', $layoutpageid);

            $GLOBALS['config_page'] = wp_parse_args($thispagemeta, $GLOBALS['config_page']);
            $order                  = nutrail_get_meta('page-config_order');

            if (empty($order) or $order == 'order1') {
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
                    'jobinfo'          => array('title' => '募集要項', 'type' => 'jobinfo'),
                    'timeline'         => array('title' => '1日の流れ', 'type' => 'content_timeline'),
                    'faq'              => array('title' => 'FAQ', 'type' => 'faq'),
                    'companyinfo'      => array('title' => '会社概要', 'type' => 'companyinfo'),
                    'brunch'           => array('title' => 'お店・支社', 'type' => 'content_brunch'),
                    'ps'               => array('title' => '追伸', 'type' => 'description'),
                    'contact'          => array('title' => 'お問合せ', 'type' => 'contact'),
                    'fixed-panel'      => array('title' => '固定パネル', 'type' => 'fixed-panel'),
                );
            } else {
                $this_page_views = array(
                    'mainvisual'       => array('title' => 'メインビジュアル', 'type' => 'mainvisual'),
                    'movie'            => array('title' => '動画', 'type' => 'youtube'),
                    'list'             => array('title' => 'リスト', 'type' => 'content-list'),
                    'description'      => array('title' => '説明', 'type' => 'description'),
                    'page-config_cta1' => array('title' => 'CTA', 'type' => 'cta'),
                    'features1'        => array('title' => '特徴①', 'type' => 'content'),
                    'features2'        => array('title' => '特徴②', 'type' => 'content'),
                    'features3'        => array('title' => '特徴③', 'type' => 'content'),
                    'features4'        => array('title' => '特徴④', 'type' => 'content'),
                    'features5'        => array('title' => '特徴⑤', 'type' => 'content'),
                    'brunch'           => array('title' => 'お店・支社', 'type' => 'content_brunch'),
                    'timeline'         => array('title' => '1日の流れ', 'type' => 'content_timeline'),
                    'page-config_cta2' => array('title' => 'CTA', 'type' => 'cta'),
                    'companyinfo'      => array('title' => '会社概要', 'type' => 'companyinfo'),
                    'jobinfo'          => array('title' => '募集要項', 'type' => 'jobinfo'),
                    'faq'              => array('title' => 'FAQ', 'type' => 'faq'),
                    'ps'               => array('title' => '追伸', 'type' => 'description'),
                    'contact'          => array('title' => 'お問合せ', 'type' => 'contact'),
                    'fixed-panel'      => array('title' => '固定パネル', 'type' => 'fixed-panel'),
                );
            }

            foreach ($this_page_views as $section_name => $section_value) {
                $sectionname = str_replace("view_", "", $section_name);
                if (nutrail_get_meta('view_view_'.$section_name, 0) == 1) {
                    if (!empty($section_value['type'])) {
                        if (file_exists(NUTRAIL_CORE_PATH.'views/parts/section/section-'.$section_value['type'].'.php')) {
                            $section_view_config_key = $section_name;
                            include NUTRAIL_CORE_PATH.'views/parts/section/section-'.$section_value['type'].'.php';
                        }
                    }
                }
            }
        }
    }
}

include NUTRAIL_CORE_PATH.'views/parts/footer/footer-basic.php';