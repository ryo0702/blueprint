<?php
$insert_gsc_data = $gsc_data_key = $gsc_data_label = $gsc_data_number = null;
$gsc_data_key = 'imagetext';
$gsc_data_label = 'イメージ＆テキスト';
$gsc_data_number = 5;
for ($i=1; $i <= $gsc_data_number; $i++) {
  $insert_gsc_data[] = array(
    'title'     => $gsc_data_label .' '.$i,
    'fields'    => array(
      array('id'    => $gsc_data_key.'-'.$i.'-type','type'  => 'select','title' => 'デザイン',
        'options' => array(
          'split-bgi' => '背景画像分割',
        ),
      ),
      array('id' => $gsc_data_key.'-'.$i.'-title','type'  => 'textarea','title' => 'タイトル'),
      array('id' => $gsc_data_key.'-'.$i.'-title-sub','type'  => 'textarea','title' => 'タイトル(英語)'),
      array('id' => $gsc_data_key.'-'.$i.'-description','type'  => 'textarea','title' => '説明文'),
      array('id' => $gsc_data_key.'-'.$i.'-btn','type'  => 'link','title' => 'ボタン'),
      array('id' => $gsc_data_key.'-'.$i.'-image','type'  => 'media','title' => '画像'),
      array('id' => $gsc_data_key.'-'.$i.'-caption','type'  => 'textarea','title' => 'キャプション'),
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