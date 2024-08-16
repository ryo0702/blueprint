<?php
if (!defined('ABSPATH')) {
    die;
}
$array_metabox_section = $arr_load_sections = array();

include get_template_directory() . "/theme-8-config/load-template-meta/freelayout-config.php";
include get_template_directory() . "/theme-8-config/load-template-meta/freelayout-sort.php";
include get_template_directory() . "/theme-8-config/load-template-meta/sections/heroimage.php";
include get_template_directory() . "/theme-8-config/load-template-meta/sections/imagetext.php";
include get_template_directory() . "/theme-8-config/load-template-meta/sections/columncontents.php";
include get_template_directory() . "/theme-8-config/load-template-meta/sections/loop.php";
include get_template_directory() . "/theme-8-config/load-template-meta/sections/form.php";
include get_template_directory() . "/theme-8-config/load-template-meta/sections/seams.php";

$array_metabox[] = array(
    'id'        => 'config-page',
    'title'     => 'フリーレイアウト',
    'post_type' => 'page',
    'context'   => 'normal',
    'priority'  => 'high',
    'page_templates' => 'template-freelayout.php',
    'sections'  => $array_metabox_section
);