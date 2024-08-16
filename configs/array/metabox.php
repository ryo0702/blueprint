<?php
if (!defined('ABSPATH')) {
    die;
}
$array_metabox = array();
foreach (glob(get_template_directory() . "/configs/load-template-meta/*.php") as $load_configfile) {
    include $load_configfile;
}