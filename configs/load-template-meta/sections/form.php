<?php
$insert_gsc_data = $gsc_data_key = $gsc_data_label = $gsc_data_number = null;
$gsc_data_key = 'form';
$gsc_data_label = 'フォーム';
$gsc_data_number = 3;
for ($i=1; $i <= $gsc_data_number; $i++) {
  $insert_gsc_data[] = array(
    'title'     => $gsc_data_label .' '.$i,
    'fields'    => array(
      array('id'    => $gsc_data_key.'-'.$i.'-type','type'  => 'select','title' => 'デザイン',
        'options' => array(
          $gsc_data_key.'-split-bgi' => '背景画像分割',
        ),
      ),
      array('id'    => $gsc_data_key.'-'.$i.'-title','type'  => 'text','title' => 'タイトル'),
      array('id'    => $gsc_data_key.'-'.$i.'-subtitle','type'  => 'text','title' => 'サブタイトル'),
      array('id'    => $gsc_data_key.'-'.$i.'-description','type'  => 'textarea','title' => '説明文'),
      array('id'    => $gsc_data_key.'-'.$i.'-subject','type'  => 'textarea','title' => '件名'),
      array('id' =>  $gsc_data_key.'-'.$i.'-contents','type' => 'group','title'  => 'コンテンツ',
          'fields' => array(
              array('id'    => 'title','type'  => 'text','title' => 'タイトル'),
              array('id'    => 'description','type'  => 'textarea','title' => '説明文'),
              array('id'    => 'type','type'  => 'select','title' => '項目','options' => array(
                'your-name' => 'お名前',
                'your-email' => 'メールアドレス',
                'text' => 'テキスト',
                'email' => 'メールアドレス',
                'number' => 'ナンバー',
                'textarea' => 'テキストエリア',
              )),
              array('id'    => 'required','type'  => 'switcher','title' => '必須項目'),
              array('id'    => 'option','type'  => 'textarea','title' => 'オプション','desc' => '項目をセレクトおよびラジオボタンで使用する場合に記入。改行区切りで記入。'),
          )
      ),
    )
  );
}

$array_metabox_section[] = array(
  'name'   => $gsc_data_key,'title'  => $gsc_data_label,
  'fields' => array(
    array(
      'id'            => 'contents-'.$gsc_data_key,
      'type'          => 'accordion',
      'title'         => $gsc_data_label.'コンテンツ',
      'accordions'    => $insert_gsc_data,
    ),
  ),
);