<?php
$array_metabox_section[] = array(
  'name'   => 'config-basic','title'  => '基本設定',
  'fields' => array(
      array('title' => 'クラス(全体)','id' => 'body-class','type'  => 'text'),
      array('title' => 'ナビゲーションバー','id' => 'navbar-type','type'  => 'select','options' => array(
        '' => '共通設定',
        'navbar' => 'ベーシック',
        'navbar-fixed' => '固定',
        'navbar-mv' => 'MV一体型',
        'navbar-lp' => 'LP用',
      )),
      array('id'     => 'mininav','type'   => 'group','title'  => '固定ミニメニュー',
          'fields' => array(
            array('id'    => 'link','type'  => 'link','title' => 'リンク'),
          )
      ),
  ),
);