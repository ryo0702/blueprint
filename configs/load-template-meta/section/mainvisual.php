<?php
$array_metabox_section[] = array(
  'name'   => 'config-mainvisual','title'  => 'メインビジュアル',
  'fields' => array(
      array('title' => 'タイプ','id' => 'mainvisual-type','type'  => 'select','options' => array(
          'basic' => 'ベーシック(中央)',
          'basic-left' => 'ベーシック(左寄せ)',
          'basic-right' => 'ベーシック(右寄せ)',
          'movie' => '動画',
          'balloon' => 'バルーン',
      )),
      array('title' => 'タイトル(メイン)','id' => 'mainvisual-title','type'  => 'textarea'),
      array('title' => 'タイトル(サブ)','id' => 'mainvisual-subtitle','type'  => 'textarea'),
      array('title' => 'タイトルロゴ','id' => 'mainvisual-logo','type'  => 'media'),
      array('title' => '本文','id' => 'mainvisual-text','type'  => 'textarea'),
      array('title' => 'ボタン①','id' => 'mainvisual-btn1','type'  => 'link'),
      array('title' => 'ボタン②','id' => 'mainvisual-btn2','type'  => 'link'),
      array('title' => '背景画像','id' => 'mainvisual-bgi','type'  => 'media'),
      array('title' => '矢印','id' => 'mainvisual-arrow','type'  => 'switcher'),
  ),
);