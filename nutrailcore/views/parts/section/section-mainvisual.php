<?php
if(@$config_page[$section_view_config_key.'_type'] == 'separate'){
    include NUTRAIL_CORE_PATH.'views/parts/section/section-mainvisual-separate.php';
}
else{
    include NUTRAIL_CORE_PATH.'views/parts/section/section-mainvisual-normal.php';
}