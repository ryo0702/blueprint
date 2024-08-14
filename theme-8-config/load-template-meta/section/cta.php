<?php
$array_metabox_section[] = array(
  'name'   => 'config-'.$section_name,'title'  => @$load_configfile_section['title'],
  'fields' => array(
      array('title' => 'タイトル(メイン)','id' => 'cta'.@$load_configfile_section['number'].'-title','type'  => 'textarea'),
      array('title' => '本文','id' => 'cta'.@$load_configfile_section['number'].'-text','type'  => 'textarea'),
      array('title' => 'ボタン①','id' => 'cta'.@$load_configfile_section['number'].'-btn1','type'  => 'link'),
      array('title' => 'ボタン②','id' => 'cta'.@$load_configfile_section['number'].'-btn2','type'  => 'link'),
      array('title' => '背景画像','id' => 'cta'.@$load_configfile_section['number'].'-bgi','type'  => 'media'),
  ),
);