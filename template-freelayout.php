<?php
/*
Template Name: フリーレイアウト
*/
$global_config = null;
if(!empty(get_option('config-theme'))){
  $global_config = get_option('config-theme');
}
include get_template_directory().'/views/parts/head.php';
include get_template_directory().'/views/parts/navbar.php';
include get_template_directory().'/views/contents/freelayout.php';
include get_template_directory().'/views/parts/footer.php';
include get_template_directory().'/views/parts/foot.php';