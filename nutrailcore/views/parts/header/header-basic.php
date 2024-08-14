<?php
include NUTRAIL_CORE_PATH.'views/parts/config/config-basic.php'
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrapper">
<?php
if(!empty($parts_navbar_path) && file_exists($parts_navbar_path)){
    include $parts_navbar_path;
}
else{
    include NUTRAIL_CORE_PATH.'views/parts/navbar/navbar-center.php';
}
?>
<div id="page">
