<?php
$array_metabox_section[] = array(
  'name'   => 'config-'.$section_name,'title'  => @$load_configfile_section['title'],
  'fields' => array(
    array('title' => 'タイトル(メイン)','id' => 'loop-column'.@$load_configfile_section['number'].'-title','type'  => 'textarea'),
    array('title' => '本文','id' => 'loop-column'.@$load_configfile_section['number'].'-text','type'  => 'textarea'),
    array('title' => 'ボタン','id' => 'loop-column'.@$load_configfile_section['number'].'-btn','type'  => 'link'),
    array('title' => 'カテゴリー','id' => 'loop-column'.@$load_configfile_section['number'].'-category','type'  => 'select','options' => 'category'),
  ),
);