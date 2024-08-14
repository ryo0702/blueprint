<?php
$array_metabox_section[] = array(
  'name'   => 'config-'.$section_name,'title'  => @$load_configfile_section['title'],
  'fields' => array(
      array('title' => 'タイプ','id' => 'contents-detail'.@$load_configfile_section['number'].'-type','type'  => 'select','options' => array(
        'imagecenter' => '画像上下中央寄せ','imagehorizon' => '画像水平並び'
      )),
      array('id'     => 'contents-detail'.@$load_configfile_section['number'].'-contents','type'   => 'group','title'  => 'コンテンツ',
          'fields' => array(
              array('id'    => 'title','type'  => 'textarea','title' => 'タイトル'),
              array('id'    => 'text','type'  => 'textarea','title' => '本文'),
              array('id'    => 'image','type'  => 'media','title' => '画像'),
              array('id'    => 'type','type'  => 'select','title' => 'レイアウト','options' => array('imageleft' => '画像左','imageright' => '画像右')),
              array('id'    => 'container','type'  => 'select','title' => 'コンテナ','options' => array('' => 'なし','container' => 'コンテナ')),
          )
      ),
  ),
);