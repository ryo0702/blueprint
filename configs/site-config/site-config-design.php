<?php
include get_template_directory() . "/configs/site-config/css/include-design.php";

$array_options[] = array(
    'name'        => 'design',
    'title'       => 'デザイン設定',
    'icon'        => 'fas fa-paint-brush',
    'fields'      => array(
        array(
            'id'   => 'config-design',
            'type' => 'tabbed',
            'tabs' => array(
                array(
                    'title'  => 'Webフォント設定',
                    'fields' => $include_design_webfont,
                ),
                array(
                    'title'  => 'フリーレイアウト設定',
                    'fields' => $include_section_common,
                ),
                array(
                    'title'  => '共通デザイン設定',
                    'fields' => $include_design_common,
                ),
                array(
                    'title'  => 'カラーセット設定',
                    'fields' => $include_color_set,
                ),
            )
        ),
    ),
);