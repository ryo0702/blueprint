<?php
$array_options[] = array(
    'name'     => 'smtp',
    'title'    => 'SMTP',
    'icon'     => 'fa fa-envelope',
    'sections' => array(
        array(
            'name'   => 'smtp_settings',
            'title'  => 'SMTP設定',
            'fields' => array(
                array(
                    'id'    => 'smtp_enable',
                    'type'  => 'switcher',
                    'title' => '有効化',
                ),
                array(
                    'id'         => 'smtp_server',
                    'type'       => 'text',
                    'title'      => 'ホスト',
                    'attributes' => [
                        'placeholder' => 'smtp.gmail.com',
                    ],
                ),
                array(
                    'id'         => 'smtp_from',
                    'type'       => 'text',
                    'title'      => '送信元メールアドレス',
                    'attributes' => [
                        'placeholder' => 'example@email.com',
                    ],
                ),
                array(
                    'id'         => 'smtp_name',
                    'type'       => 'text',
                    'title'      => '送信元名',
                    'attributes' => [
                        'placeholder' => 'WordPress',
                    ],
                ),
                array(
                    'id'    => 'smtp_username',
                    'type'  => 'text',
                    'title' => 'ユーザーアカウントもしくはメールアドレス',
                ),
                array(
                    'id'         => 'smtp_password',
                    'type'       => 'text',
                    'title'      => 'パスワード',
                    'attributes' => [
                        'type' => 'password',
                    ],
                ),
                array(
                    'id'      => 'smtp_port',
                    'type'    => 'number',
                    'title'   => 'ポート番号',
                    'default' => '456',
                ),
                array(
                    'id'      => 'smtp_secure',
                    'type'    => 'button_set',
                    'default' => 'SSL',
                    'options' => [
                        'TLS' => 'TLS',
                        'SSL' => 'SSL',
                    ],
                    'title'   => 'セキュア接続',
                ),
            ),
        ),
        array(
            'name'   => 'smtp_test',
            'title'  => '送信テスト',
            'fields' => array(
                array(
                    'id'         => 'smtp_test_email',
                    'type'       => 'text',
                    'before'     => '<h4 style="margin-bottom: 10px;">Send To</h4>',
                    'default'    => wp_get_current_user()->user_email,
                    'attributes' => [
                        'placeholder' => 'example@email.com',
                    ],
                ),
                array(
                    'id'      => 'smtp_test_message',
                    'type'    => 'textarea',
                    'before'  => '<h4 style="margin-bottom: 10px;">Message</h4>',
                    'default' => 'Test Message',
                ),
                array(
                    'id'      => 'smtp_test_button',
                    'type'    => 'content',
                    'after'   => '<p class="smtp-result" style="margin-top: 6px;">Please save before send test email.</p>',
                    'content' => '<a href="#" class="button button-primary send-test-smtp"/><i class="fa fa-paper-plane"></i> '.esc_html__('Send email', 'nutrail').'</a><span class="spinner" style="float:none;"></span>',
                ),
            ),
        ),
    ),
);