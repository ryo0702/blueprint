<?php
$insert_gsc_data = $gsc_data_key = $gsc_data_label = $gsc_data_number = null;
$gsc_data_key = 'seams';
$gsc_data_label = 'つなぎ目';
$gsc_data_number = 10;
for ($i=1; $i <= $gsc_data_number; $i++) {
  $insert_gsc_data[] = array(
    'title'     => $gsc_data_label .' '.$i,
    'fields'    => array(
      array('id'    => $gsc_data_key.'-'.$i.'-type','type'  => 'select','title' => 'デザイン',
        'options' => array(
          '' => 'ベーシック',
          'split-bgi' => '背景画像分割',
        ),
      ),
      array('id'    => $gsc_data_key.'-'.$i.'-logo','type'  => 'media','title' => 'ロゴ'),
      array('id'    => $gsc_data_key.'-'.$i.'-title','type'  => 'textarea','title' => 'タイトル'),
      array('id'    => $gsc_data_key.'-'.$i.'-description','type'  => 'textarea','title' => '説明文'),
      array('id'    => $gsc_data_key.'-'.$i.'-bgi','type'  => 'media','title' => '背景画像'),
      array('id'    => $gsc_data_key.'-'.$i.'-bgi2','type'  => 'media','title' => '背景画像②','dependency' => array($gsc_data_key.'-'.$i.'-type', '==', 'split-bgi' ),),
      array('id'    => $gsc_data_key.'-'.$i.'-overlay','type'  => 'select','title' => 'オーバーレイ',
        'options' => array(
          '' => 'なし',
          'overlay overlay-black' => 'ブラック',
          'overlay overlay-white' => 'ホワイト',
        ),
      ),
      array('id'    => $gsc_data_key.'-'.$i.'-height','type'  => 'select','title' => '高さ',
        'options' => array(
          'hero-h50vh' => '50VH',
          'hero-h60vh' => '60VH',
          'hero-h75vh' => '75VH',
          'hero-h100vh' => '100VH',
        ),
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
      'title'         => $gsc_data_label.'内容',
      'accordions'    => $insert_gsc_data,
    ),
  ),
);