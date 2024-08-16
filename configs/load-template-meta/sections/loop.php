<?php
$insert_gsc_data = $gsc_data_key = $gsc_data_label = $gsc_data_number = null;
$gsc_data_key = 'loop';
$gsc_data_label = 'ループ';
$gsc_data_number = 10;
for ($i=1; $i <= $gsc_data_number; $i++) {
  $insert_gsc_data[] = array(
    'title'     => $gsc_data_label .' '.$i,
    'fields'    => array(
      array('id'    => $gsc_data_key.'-'.$i.'-type','type'  => 'select','title' => 'デザイン',
        'options' => array(
          'newslist' => 'ニュースリスト',
        ),
      ),
      array('id' => $gsc_data_key.'-'.$i.'-title','type'  => 'textarea','title' => 'タイトル'),
      array('id' => $gsc_data_key.'-'.$i.'-title-sub','type'  => 'textarea','title' => 'タイトル(英語)'),
      array('id' => $gsc_data_key.'-'.$i.'-description','type'  => 'textarea','title' => '説明文'),
      // array('id'    => $gsc_data_key.'-'.$i.'-category','type'  => 'category','title' => 'カテゴリー'),
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