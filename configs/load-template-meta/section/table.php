<?php
$array_metabox_section[] = array(
  'name'   => 'config-table','title'  => 'テーブル',
  'fields' => array(
      array('title' => 'タイトル(メイン)','id' => 'table-title','type'  => 'textarea'),
      array('title' => '本文','id' => 'table-text','type'  => 'textarea'),
      array('title' => 'ボタン①','id' => 'table-btn1','type'  => 'link'),
      array('title' => 'ボタン②','id' => 'table-btn2','type'  => 'link'),
      array('id'     => 'table-type-table','type'   => 'group','title'  => '表',
          'fields' => array(
            array('id'    => 'title','type'  => 'text','title' => '表タイトル'),
            array('id'    => 'text','type'  => 'textarea','title' => '表説明文'),
            array('id'     => 'contents','type'   => 'group','title'  => '行',
                'fields' => array(
                  array('id'    => 'col1','type'  => 'textarea','title' => '列1'),
                  array('id'    => 'col2','type'  => 'textarea','title' => '列2'),
                  array('id'    => 'col3','type'  => 'textarea','title' => '列3'),
                  array('id'    => 'col4','type'  => 'textarea','title' => '列4'),
                )
            ),
          )
      ),
  ),
);