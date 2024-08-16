<?php
$array_metabox_section[] = array(
  'name'   => 'config-'.$section_name,'title'  => @$load_configfile_section['title'],
  'fields' => array(
      array('title' => 'コード','id' => 'code'.@$load_configfile_section['number'].'-code','type'  => 'textarea'),
  ),
);