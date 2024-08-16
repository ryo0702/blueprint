<?php
$include_design_webfont = array(
  'common-ff' => array(
    'id'    => 'common-ff',
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
'common-ff-eng' => array(
    'id'    => 'common-ff-eng',
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
  array('id' => 'common-fs','type' => 'number','title' => '標準文字サイズ','default' => '15','unit' => 'px'),
  array('id' => 'link-text-decoration','type' => 'select','title' => 'リンクデコレーション','default' => 'none','options' => array(
    'none' => 'なし','underline' => '下線','overline' => '上線','line-through' => '取り消し線'
  )),
);

$include_design_common = array(
  array('id' => 'body-bgc','type' => 'color','title' => 'ボディ 背景色','default' => '#ffffff'),
  array('id' => 'body-fc','type' => 'color','title' => '文字色','default' => '#333333'),
  array('id' => 'link-fc','type' => 'color','title' => 'リンクカラー','default' => '#333333'),
  array('id' => 'link-fc-hover','type' => 'color','title' => 'リンクカラー：ホバー','default' => '#636363'),
  // Text
  array('id' => 'text-xs','type' => 'text','title' => 'テキストサイズ XS','default' => '0.6','unit' => 'em'),
  array('id' => 'text-s','type' => 'text','title' => 'テキストサイズ S','default' => '0.8','unit' => 'em'),
  array('id' => 'text-m','type' => 'text','title' => 'テキストサイズ M','default' => '1','unit' => 'em'),
  array('id' => 'text-l','type' => 'text','title' => 'テキストサイズ L','default' => '1.6','unit' => 'em'),
  array('id' => 'text-xl','type' => 'text','title' => 'テキストサイズ XL','default' => '2.4','unit' => 'em'),
  array('id' => 'text-xxl','type' => 'text','title' => 'テキストサイズ XXL','default' => '4.2','unit' => 'em'),
  array('id' => 'text-lh-m','type' => 'number','title' => 'テキストライン','default' => '160','unit' => '%'),
  // Spacing
  array('id' => 'space-xs','type' => 'number','title' => 'スペース XS','default' => '5','unit' => 'px'),
  array('id' => 'space-s','type' => 'number','title' => 'スペース XS','default' => '10','unit' => 'px'),
  array('id' => 'space-m','type' => 'number','title' => 'スペース XS','default' => '25','unit' => 'px'),
  array('id' => 'space-l','type' => 'number','title' => 'スペース XS','default' => '50','unit' => 'px'),
  array('id' => 'space-xl','type' => 'number','title' => 'スペース XS','default' => '100','unit' => 'px'),
  array('id' => 'gutter','type' => 'number','title' => 'ガーター','default' => '25','unit' => 'px'),
  array('id' => 'gutter-l','type' => 'number','title' => 'ガーター L','default' => '50','unit' => 'px'),
  array('id' => 'gutter-xl','type' => 'number','title' => 'ガーター XL','default' => '100','unit' => 'px'),
  // Loading Screen
  array('id' => 'loading-screen-bgc','type' => 'color','title' => 'ローディング 背景色','default' => '#ffffff'),
  array('id' => 'loading-screen-fc','type' => 'color','title' => 'ローディング 文字色','default' => '#333333'),
);

$include_color_set = array(
);

$include_all_css = array_merge($include_design_webfont, $include_section_common, $include_design_common);
