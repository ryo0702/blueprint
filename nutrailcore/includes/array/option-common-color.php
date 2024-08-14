<?php
$config_common_color = array(
    'title'  => 'カラー個別指定',
    'fields' => array(
        array(
            'id'     => 'colors',
            'type'   => 'fieldset',
            'fields' => array(
                array(
                    'id'    => 'body',
                    'type'  => 'color',
                    'title' => 'ボディーカラー',
                ),
                array(
                    'id'    => 'text',
                    'type'  => 'color',
                    'title' => 'テキストカラー',
                ),
                array(
                    'id'    => 'link-text',
                    'type'  => 'color',
                    'title' => 'リンクテキスト',
                ),
                array(
                    'id'    => 'link-hover',
                    'type'  => 'color',
                    'title' => 'リンクテキスト(ホバー)',
                ),
                array(
                    'id'    => 'line',
                    'type'  => 'color',
                    'title' => 'ラインカラー',
                ),
                array(
                    'id'      => 'navbar',
                    'type'    => 'color_group',
                    'title'   => 'ナビゲーションバー カラー',
                    'options' => array(
                        'top-bg'     => 'トップ 背景',
                        'bottom-bg'  => 'ボトム 背景',
                        'text-color' => 'テキストカラー',
                        'link-color' => 'リンクカラー',
                        'link-hover' => 'リンク(ホバー)カラー',
                    ),
                ),
                array(
                    'id'      => 'main',
                    'type'    => 'color_group',
                    'title'   => 'メイン',
                    'options' => array(
                        'default' => '基本色',
                        'hover'  => 'ホバー',
                        'text'  => 'テキスト',
                        'text-hover'  => 'テキスト(ホバー)',
                    ),
                ),
                array(
                    'id'      => 'sub',
                    'type'    => 'color_group',
                    'title'   => 'サブ',
                    'options' => array(
                        'default' => '基本色',
                        'hover'  => 'ホバー',
                        'text'  => 'テキスト',
                        'text-hover'  => 'テキスト(ホバー)',
                    ),
                ),
                array(
                    'id'      => 'action',
                    'type'    => 'color_group',
                    'title'   => 'アクション',
                    'options' => array(
                        'default' => '基本色',
                        'hover'  => 'ホバー',
                        'text'  => 'テキスト',
                        'text-hover'  => 'テキスト(ホバー)',
                    ),
                ),
                array(
                    'id'      => 'info',
                    'type'    => 'color_group',
                    'title'   => 'インフォ',
                    'options' => array(
                        'default' => '基本色',
                        'hover'  => 'ホバー',
                        'text'  => 'テキスト',
                        'text-hover'  => 'テキスト(ホバー)',
                    ),
                ),
                array(
                    'id'      => 'success',
                    'type'    => 'color_group',
                    'title'   => 'サクセス',
                    'options' => array(
                        'default' => '基本色',
                        'hover'  => 'ホバー',
                        'text'  => 'テキスト',
                        'text-hover'  => 'テキスト(ホバー)',
                    ),
                ),
            )
        ),
    ),
);