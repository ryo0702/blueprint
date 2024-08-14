<?php
$array_metabox_section[] = array(
  'name'   => 'config-'.$section_name,'title'  => @$load_configfile_section['title'],
  'fields' => array(
      array('id'     => 'contents-fullscreen'.@$load_configfile_section['number'].'-contents','type'   => 'group','title'  => 'コンテンツ',
          'fields' => array(
              array('id'    => 'type','type'  => 'select','title' => 'タイプ','options' => array(
                  'text-large-center' => 'テキスト(大)中央',
                  'text-medium-center' => 'テキスト(中)中央',
              )),
              array('id'    => 'title','type'  => 'textarea','title' => 'タイトル'),
              array('id'    => 'text','type'  => 'textarea','title' => '本文'),
              array('id'    => 'bgi','type'  => 'media','title' => '画像'),
              array('id'    => 'elem-id','type'  => 'text','title' => 'ID'),
          )
      ),
  ),
);