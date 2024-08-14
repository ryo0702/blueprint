<?php
$array_metabox_section[] = array(
  'name'   => 'config-'.$section_name,'title'  => @$load_configfile_section['title'],
  'fields' => array(
      array('title' => 'タイトル(メイン)','id' => 'form'.@$load_configfile_section['number'].'-title','type'  => 'textarea'),
      array('title' => '本文','id' => 'form'.@$load_configfile_section['number'].'-text','type'  => 'textarea'),
      array('title' => 'ボタン','id' => 'form'.@$load_configfile_section['number'].'-btn','type'  => 'link'),
      array('id'     => 'form'.@$load_configfile_section['number'].'-contents','type'   => 'group','title'  => 'コンテンツ',
          'fields' => array(
              array('id'    => 'key','type'  => 'text','title' => 'キー','pattern' => "^[a-zA-Z0-9_\-]+$"),
              array('id'    => 'title','type'  => 'text','title' => 'タイトル'),
              array('id'    => 'type','type'  => 'select','title' => 'タイプ','options' => array(
                'text' => 'テキスト','number' => '数字','customer-name' => '顧客の氏名','customer-email' => '顧客のメールアドレス','textarea' => 'テキストエリア','select' => 'セレクト','radio' => 'ラジオボタン','checkbox' => 'チェックボックス'
              )),
              array('id'    => 'description','type'  => 'text','title' => '説明文'),
              array('id'    => 'placeholder','type'  => 'text','title' => 'プレースホルダー'),
              array('id'    => 'required','type'  => 'switcher','title' => '必須'),
              array('id'    => 'option','type'  => 'textarea','title' => 'オプション'),
          )
      ),
      array('title' => 'プライバシーポリシー','id' => 'form'.@$load_configfile_section['number'].'-privacypolicy','type'  => 'link'),
      array('title' => '送信ボタン ラベル','id' => 'form'.@$load_configfile_section['number'].'-submit-label','type'  => 'text'),
      array('title' => 'メール件名','id' => 'form'.@$load_configfile_section['number'].'-subject','type'  => 'text'),
      array('title' => 'メール本文フッター','id' => 'form'.@$load_configfile_section['number'].'-footer','type'  => 'textarea'),
      array('title' => 'リダイレクト先','id' => 'form'.@$load_configfile_section['number'].'-redirect','type'  => 'link'),
  ),
);