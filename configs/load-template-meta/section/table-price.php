<?php
$array_metabox_section[] = array(
  'name'   => 'config-table-price','title'  => '料金表',
  'fields' => array(
      array('title' => 'タイトル(メイン)','id' => 'table-price-title','type'  => 'textarea'),
      array('title' => '本文','id' => 'table-price-text','type'  => 'textarea'),
      array('title' => 'ボタン①','id' => 'table-price-btn1','type'  => 'link'),
      array('title' => 'ボタン②','id' => 'table-price-btn2','type'  => 'link'),
      array('id'     => 'table-price-type-table','type'   => 'group','title'  => '表',
          'fields' => array(
            array('id'    => 'title','type'  => 'text','title' => '表タイトル'),
            array('id'    => 'text','type'  => 'textarea','title' => '表説明文'),
            array('id'     => 'contents','type'   => 'group','title'  => '料金',
                'fields' => array(
                    array('id'    => 'title','type'  => 'text','title' => 'タイトル'),
                    array('id'    => 'description','type'  => 'textarea','title' => '説明文'),
                    array('id'    => 'price','type'  => 'number','title' => '金額'),
                )
            ),
          )
      ),
  ),
);