<?php
$insert_gsc_data = $gsc_data_key = $gsc_data_label = $gsc_data_number = null;
$gsc_data_key = 'columncontents';
$gsc_data_label = 'カラムコンテンツ';
$gsc_data_number = 10;
for ($i=1; $i <= $gsc_data_number; $i++) {
  $insert_gsc_data[] = array(
    'title'     => $gsc_data_label .' '.$i,
    'fields'    => array(
      array('id'    => $gsc_data_key.'-'.$i.'-type','type'  => 'select','title' => 'デザイン',
        'options' => array(
          'autoslider' => 'オートスライダー',
          '3column' => '3カラム',
          '4column' => '4カラム',
        ),
      ),
      array('id'    => $gsc_data_key.'-'.$i.'-title','type'  => 'text','title' => 'タイトル'),
      array('id'    => $gsc_data_key.'-'.$i.'-subtitle','type'  => 'text','title' => 'サブタイトル'),
      array('id'    => $gsc_data_key.'-'.$i.'-description','type'  => 'textarea','title' => '説明文'),
      array('id' =>  $gsc_data_key.'-'.$i.'-contents','type' => 'group','title'  => 'コンテンツ',
          'fields' => array(
              array('id'    => 'title','type'  => 'text','title' => 'タイトル'),
              array('id'    => 'description','type'  => 'textarea','title' => '説明文'),
              array('id'    => 'link','type'  => 'link','title' => 'リンク'),
              array('id'    => 'image','type'  => 'media','title' => '画像'),
          )
      ),
      array('id'    => $gsc_data_key.'-'.$i.'-numbering','type'  => 'switcher','title' => 'ナンバリング'),
      array('id'    => $gsc_data_key.'-'.$i.'-divimage','type'  => 'switcher','title' => 'DIVから画像へ変更'),
      array('id'    => $gsc_data_key.'-'.$i.'-thumbsize','type'  => 'select','title' => 'サムネイルサイズ','options' => array(
        '' => '黄金比',
        'thumbnail-silver' => '白銀比',
        'thumbnail-square' => '正方形',
        'thumbnail-tatenaga' => 'スマホサイズ(9:16)',
      ),),
    )
  );
}

$array_metabox_section[] = array(
  'name'   => $gsc_data_key,'title'  => $gsc_data_label,
  'fields' => array(
    array(
      'id'            => 'contents-'.$gsc_data_key,
      'type'          => 'accordion',
      'title'         => $gsc_data_label.'内容',
      'accordions'    => $insert_gsc_data,
    ),
  ),
);