<?php
include NUTRAIL_CORE_PATH.'views/parts/header/header-basic.php';

if (have_posts()) {
    while (have_posts()) {
        the_post();

        nutrail_page_meta('config-toppage-recruit');

        $order = nutrail_get_meta('page-config_order');

        $this_page_views = array(
            'mainvisual'       => array('title' => 'メインビジュアル', 'type' => 'mainvisual'),
            'loopjobinfo'      => array('title' => '求人情報一覧', 'type' => 'loopjobinfo'),
            'companyinfo'      => array('title' => '会社概要', 'type' => 'companyinfo'),
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