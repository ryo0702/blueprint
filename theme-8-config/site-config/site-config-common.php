<?php
$array_options[] = array(
    'name'        => 'common',
    'title'       => '共通設定',
    'description' => 'サイト全体で使用する共通設定を行います。AMPプラグインは必ずインストールしてください。',
    'icon'        => 'fas fa-cogs',
    'fields'      => array(
        array(
            'id'   => 'config-common',
            'type' => 'tabbed',
            'tabs' => array(
                array(
                    'title'  => '共通設定',
                    'fields' => array(
                        array(
                            'id'    => 'logo',
                            'type'  => 'media',
                            'title' => 'ロゴ',
                            'url'   => false,
                        ),
                        array(
                            'id'    => 'logo-opp',
                            'type'  => 'media',
                            'title' => '反対色ロゴ',
                            'url'   => false,
                        ),
                    ),
                ),
                array(
                    'title'  => 'ナビゲーションバー',
                    'fields' => array(
                        array(
                            'id'    => 'navbar-type',
                            'type'  => 'select',
                            'title' => 'ナビゲーションバータイプ',
                            'options' => array(
                                'navbar'       => 'ベーシック',
                                'navbar-fixed' => '固定',
                                'navbar-mv'    => 'MV一体型',
                            ),
                            'default' => 'navbar',
                        ),
                        array(
                            'id'    => 'navbar-phone',
                            'type'  => 'text',
                            'title' => '電話番号',
                        ),
                        array(
                            'id'    => 'navbar-phone-description',
                            'type'  => 'text',
                            'title' => '電話番号下 説明文',
                        ),
                    ),
                ),
                array(
                    'title'  => 'フッター',
                    'fields' => array(
                        array(
                            'id'    => 'footermenu-text',
                            'type'  => 'textarea',
                            'title' => 'ロゴ下 説明文',
                        ),
                        array(
                            'id'    => 'footermenu-menu-name1',
                            'type'  => 'text',
                            'title' => 'メニュー名①',
                        ),
                        array(
                            'id'    => 'footermenu-menu-name2',
                            'type'  => 'text',
                            'title' => 'メニュー名②',
                        ),
                        array(
                            'id'    => 'footermenu-menu-name3',
                            'type'  => 'text',
                            'title' => 'メニュー名③',
                        ),
                        array(
                            'id'    => 'footermenu-btn1',
                            'type'  => 'link',
                            'title' => 'ボタン①',
                        ),
                        array(
                            'id'    => 'footermenu-btn2',
                            'type'  => 'link',
                            'title' => 'ボタン②',
                        ),
                    ),
                ),
                array(
                    'title'  => 'ローディング',
                    'fields' => array(
                        array(
                            'id'    => 'loading-logo',
                            'type'  => 'media',
                            'title' => 'ローディング字表示ロゴ',
                            'url'   => false,
                        ),
                    ),
                ),
                array(
                    'title'  => 'その他',
                    'fields' => array(
                        array(
                            'id'    => 'basic-authentication-name',
                            'type'  => 'text',
                            'title' => 'ベーシック認証 ユーザー名',
                        ),
                        array(
                            'id'    => 'basic-authentication-password',
                            'type'  => 'text',
                            'title' => 'ベーシック認証 パスワード',
                        ),
                    ),
                ),
            )
        ),
        array(
            'id'    => 'lazyload',
            'type'  => 'switcher',
            'title' => '遅延ロード',
        ),
        array(
            'id'    => 'turbolinks',
            'type'  => 'switcher',
            'title' => 'ターボリンクス',
        ),
    ),
);