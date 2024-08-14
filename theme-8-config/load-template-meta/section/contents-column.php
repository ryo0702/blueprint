<?php
$array_metabox_section[] = array(
  'name'   => 'config-'.$section_name,'title'  => @$load_configfile_section['title'],
  'fields' => array(
      array('title' => 'タイトル(メイン)','id' => 'contents-column'.@$load_configfile_section['number'].'-title','type'  => 'textarea'),
      array('title' => '本文','id' => 'contents-column'.@$load_configfile_section['number'].'-text','type'  => 'textarea'),
      array('title' => 'ボタン','id' => 'contents-column'.@$load_configfile_section['number'].'-btn','type'  => 'link'),
      array('title' => '番号','id' => 'contents-column'.@$load_configfile_section['number'].'-number','type'  => 'switcher'),
      array('id'     => 'contents-column'.@$load_configfile_section['number'].'-contents','type'   => 'group','title'  => 'コンテンツ',
          'fields' => array(
              array('id'    => 'title','type'  => 'text','title' => 'タイトル'),
              array('id'    => 'text','type'  => 'textarea','title' => '本文'),
              array('id'    => 'image','type'  => 'media','title' => '画像'),
              array('id'    => 'link','type'  => 'link','title' => 'リンク'),
          )
      ),
    array('id' => 'contents-column'.@$load_configfile_section['number'].'-scrollanimation','type'  => 'select','title' => 'スクロールアニメーション','options' => array(
        '' => 'アニメーションなし',
        'wow animate__animated animate__fadeIn' => 'フェードイン',
        'wow animate__animated animate__fadeIn animate__slow' => 'フェードイン(スロウ)'
    )),
  ),
);