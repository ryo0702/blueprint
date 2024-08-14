<?php
if (!defined('ABSPATH')) {
    die;
}
$array_metabox = array();
foreach (glob(get_template_directory() . "/theme-8-config/load-template-meta/*.php") as $load_configfile) {
    include $load_configfile;
}