<?php
$array_metabox_section[] = array(
  'name'   => 'config-'.$section_name,'title'  => @$load_configfile_section['title'],
  'fields' => array(
      array('title' => 'タイトル(メイン)','id' => 'title'.@$load_configfile_section['number'].'-title','type'  => 'textarea'),
      array('title' => '本文','id' => 'title'.@$load_configfile_section['number'].'-text','type'  => 'textarea'),
      array('title' => '背景画像','id' => 'title'.@$load_configfile_section['number'].'-bgi','type'  => 'media'),
      array('title' => '文字色','id' => 'title'.@$load_configfile_section['number'].'-fc','type'  => 'select','options' => array('text-white' => '白','text-black' => '黒')),
      array('title' => '黒乗算背景','id' => 'title'.@$load_configfile_section['number'].'-alpha','type'  => 'switcher'),
  ),
);