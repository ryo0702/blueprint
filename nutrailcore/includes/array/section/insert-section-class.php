<?php
/*
 * @var $array
 * @var $insert_field
 * */
$is_disable = !empty($array['class_style']) && is_string($array['class_style']) ? $array['class_style'] : 'on';

if ($is_disable != 'off') {
	$settings = array(
		'class'          => true,
		'bgi'            => true,
		'bgc'            => true,
		'color'          => true,
		'inner_classset' => true,
		'inner_class'    => true,
	);
	if (!empty($array['class_style']) && is_array($array['class_style'])) {
		$settings = wp_parse_args($array['class_style'], $settings);
	}
	$array_section_config = array(
		'class'          => array('id' => @$array['key'].'_class', 'type' => 'text', 'title' => 'クラス'),
		'bgi'            => array('id' => @$array['key'].'_bgi', 'type' => 'media', 'title' => '背景画像'),
		'bgc'            => array('id' => @$array['key'].'_bgc', 'type' => 'color', 'title' => '背景色'),
		'color'          => array('id' => @$array['key'].'_color', 'type' => 'color', 'title' => '文字色'),
		'inner_classset' => array('id' => @$array['key'].'_inner_classset', 'type' => 'select', 'title' => '中コンテンツ設定', 'options' => array('none' => 'なし', 'card' => 'カード',)),
		'inner_class'    => array('id' => @$array['key'].'_inner_class', 'type' => 'text', 'title' => '中コンテンツ クラス'),
	);

	foreach ($settings as $key => $enable) {
		if (!$enable) {
			unset($array_section_config[$key]);
		}
	}

	$insert_field = array_merge($insert_field, array_values($array_section_config));
}