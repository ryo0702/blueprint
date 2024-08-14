<?php
$include_design_webfont = array(
  'webfont' => array(
    'id'    => 'webfont',
    'type'  => 'select',
    'title' => 'フォント',
    'url'   => false,
    'default' => '"Noto Sans JP", sans-serif',
    'options' => array(
        '"Noto Sans JP", sans-serif' => 'Noto Sans JP',
        '"Noto Serif JP", serif' => 'Noto Serif JP',
        'M PLUS Rounded 1c", sans-serif' => 'M PLUS Rounded 1c'
    )
),
'webfont-accent' => array(
    'id'    => 'webfont-accent',
    'type'  => 'select',
    'title' => 'アクセント',
    'url'   => false,
    'default' => 'noto-sans-jp',
    'options' => array(
      '"Prata", serif' => 'Prata',
      '"Lobster", sans-serif' => 'Lobster',
      '"Roboto", sans-serif' => 'Roboto',
      '"Oswald", sans-serif' => 'Oswald',
      '"Montserrat", sans-serif' => 'Montserrat',
    )
),
);

$include_section_common = array(
  array('id' => 'sec-fs-xxl','type' => 'number','title' => '文字サイズ(XXL)','default' => '60','unit' => 'px'),
  array('id' => 'sec-fs-xl','type' => 'number','title' => '文字サイズ(XL)','default' => '35','unit' => 'px'),
  array('id' => 'sec-fs-l','type' => 'number','title' => '文字サイズ(L)','default' => '20','unit' => 'px'),
  array('id' => 'sec-fs-m','type' => 'number','title' => '文字サイズ(M)','default' => '15','unit' => 'px'),
  array('id' => 'sec-fs-s','type' => 'number','title' => '文字サイズ(S)','default' => '13','unit' => 'px'),
  array('id' => 'sec-fs-xs','type' => 'number','title' => '文字サイズ(XS)','default' => '10','unit' => 'px'),
  array('id' => 'sec-mb-m','type' => 'number','title' => 'マージンサイズ(M)','default' => '50','unit' => 'px'),
  array('id' => 'sec-mb-s','type' => 'number','title' => 'マージンサイズ(S)','default' => '20','unit' => 'px'),
  array('id' => 'sec-mb-xs','type' => 'number','title' => 'マージンサイズ(XS)','default' => '10','unit' => 'px'),
);

$include_design_common = array(
  array('id' => 'body-fc','type' => 'color','title' => '文字色','default' => '#242424'),
  array('id' => 'link-fc','type' => 'color','title' => 'リンクカラー','default' => '#000'),
  array('id' => 'link-fc-hover','type' => 'color','title' => 'リンクカラー：ホバー','default' => '#3b3b3b'),
  array('id' => 'border-c','type' => 'color','title' => '線カラー','default' => '#C9C9C9'),
  array('id' => 'sec-bgc','type' => 'color','title' => 'セクション背景色','default' => '#f4f4f4'),
  array('id' => 'sec-bgc-sub','type' => 'color','title' => 'セクション背景色(サブ)','default' => '#ffffff'),
  array('id' => 'loading-bgc','type' => 'color','title' => 'ローディング背景色','default' => '#ffffff'),
  array('id' => 'page-header-bgc','type' => 'color','title' => 'ページタイトル背景色','default' => '#f8f8f8'),
  array('id'    => 'page-header-fc-class','type'  => 'select','title' => 'ページ文字色','default' => ' text-white',
  'options' => array(' text-white' => '白',' text-black' => '黒'),'skip' => 'on'),
  array('id' => 'page-header-alpha','type' => 'switcher','title' => '背景黒乗算','default' => 'on','skip' => 'on'),
  array('id' => 'page-header-bgi','type' => 'media','title' => '背景画像','skip' => 'on'),
  array('id' => 'navbar-bgc','type' => 'color','title' => 'ナビゲーションバー背景色','default' => '#f7f7f7'),
  array('id' => 'navbar-bgc-hover','type' => 'color','title' => 'ナビゲーションバー背景色：ホバー','default' => '#fcfcfc'),
  array('id' => 'navbar-underline-color','type' => 'color','title' => 'ナビゲーションバー下線色','default' => '#fcfcfc'),
  array('id' => 'navbar-fc','type' => 'color','title' => 'ナビゲーションバー文字色','default' => '#000'),
  array('id' => 'navbar-fc-hover','type' => 'color','title' => 'ナビゲーションバー文字色：ホバー','default' => '#000'),
  array('id' => 'navbar-height','type' => 'number','title' => 'ナビゲーションバー高さ','default' => '80','unit' => 'px'),
  array('id' => 'navbar-logo-height','type' => 'number','title' => 'ナビゲーションバーロゴ高さ','default' => '30','unit' => 'px'),
);

$include_color_set = array(
  array('id' => 'default-maincolor','type' => 'color','title' => 'デフォルト(メイン)','default' => '#fdfdfd'),
  array('id' => 'default-maincolor-hover','type' => 'color','title' => 'デフォルト(メイン ホバー)','default' => '#f7f7f7'),
  array('id' => 'default-subcolor','type' => 'color','title' => 'デフォルト(サブ)','default' => '#000'),
  array('id' => 'default-subcolor-hover','type' => 'color','title' => 'デフォルト(サブ ホバー)','default' => '#181818'),
  array('id' => 'default-border-c','type' => 'color','title' => 'デフォルト(ボーダー)','default' => '#C9C9C9'),
  array('id' => 'primary-maincolor','type' => 'color','title' => 'プライマリー(メイン)','default' => '#007bff'),
  array('id' => 'primary-maincolor-hover','type' => 'color','title' => 'プライマリー(メイン ホバー)','default' => '#0056b3'),
  array('id' => 'primary-subcolor','type' => 'color','title' => 'プライマリー(サブ)','default' => '#ffffff'),
  array('id' => 'primary-subcolor-hover','type' => 'color','title' => 'プライマリー(サブ ホバー)','default' => '#ffffff'),
  array('id' => 'primary-border-c','type' => 'color','title' => 'プライマリー(ボーダー)','default' => '#007bff'),
  array('id' => 'info-maincolor','type' => 'color','title' => 'インフォ(メイン)','default' => '#17a2b8'),
  array('id' => 'info-maincolor-hover','type' => 'color','title' => 'インフォ(メイン ホバー)','default' => '#117a8b'),
  array('id' => 'info-subcolor','type' => 'color','title' => 'インフォ(サブ)','default' => '#ffffff'),
  array('id' => 'info-subcolor-hover','type' => 'color','title' => 'インフォ(サブ ホバー)','default' => '#ffffff'),
  array('id' => 'info-border-c','type' => 'color','title' => 'インフォ(ボーダー)','default' => '#17a2b8'),
  array('id' => 'success-maincolor','type' => 'color','title' => 'サクセス(メイン)','default' => '#28a745'),
  array('id' => 'success-maincolor-hover','type' => 'color','title' => 'サクセス(メイン ホバー)','default' => '#1e7e34'),
  array('id' => 'success-subcolor','type' => 'color','title' => 'サクセス(サブ)','default' => '#ffffff'),
  array('id' => 'success-subcolor-hover','type' => 'color','title' => 'サクセス(サブ ホバー)','default' => '#ffffff'),
  array('id' => 'success-border-c','type' => 'color','title' => 'サクセス(ボーダー)','default' => '#28a745'),
  array('id' => 'warning-maincolor','type' => 'color','title' => 'ワーニング(メイン)','default' => '#007bff'),
  array('id' => 'warning-maincolor-hover','type' => 'color','title' => 'ワーニング(メイン ホバー)','default' => '#e0a800'),
  array('id' => 'warning-subcolor','type' => 'color','title' => 'ワーニング(サブ)','default' => '#ffffff'),
  array('id' => 'warning-subcolor-hover','type' => 'color','title' => 'ワーニング(サブ ホバー)','default' => '#ffffff'),
  array('id' => 'warning-border-c','type' => 'color','title' => 'ワーニング(ボーダー)','default' => '#ffc107'),
  array('id' => 'danger-maincolor','type' => 'color','title' => 'デンジャー(メイン)','default' => '#dc3545'),
  array('id' => 'danger-maincolor-hover','type' => 'color','title' => 'デンジャー(メイン ホバー)','default' => '#c82333'),
  array('id' => 'danger-subcolor','type' => 'color','title' => 'デンジャー(サブ)','default' => '#ffffff'),
  array('id' => 'danger-subcolor-hover','type' => 'color','title' => 'デンジャー(サブ ホバー)','default' => '#ffffff'),
  array('id' => 'danger-border-c','type' => 'color','title' => 'デンジャー(ボーダー)','default' => '#dc3545'),
);

$include_all_css = array_merge($include_design_webfont, $include_section_common, $include_design_common);
