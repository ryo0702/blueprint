<?php
$array_metabox_section[] = array(
  'name'   => 'config-'.$section_name,'title'  => @$load_configfile_section['title'],
  'fields' => array(
      array('title' => 'タイトル(メイン)','id' => 'flow'.@$load_configfile_section['number'].'-title','type'  => 'textarea'),
      array('title' => '本文','id' => 'flow'.@$load_configfile_section['number'].'-text','type'  => 'textarea'),
      array('title' => 'ボタン','id' => 'flow'.@$load_configfile_section['number'].'-btn','type'  => 'link'),
      array('id'     => 'flow'.@$load_configfile_section['number'].'-contents','type'   => 'group','title'  => 'コンテンツ',
          'fields' => array(
              array('id'    => 'title','type'  => 'text','title' => 'タイトル'),
              array('id'    => 'text','type'  => 'textarea','title' => '本文'),
              array('id'    => 'link','type'  => 'link','title' => 'リンク'),
          )
      ),
  ),
);