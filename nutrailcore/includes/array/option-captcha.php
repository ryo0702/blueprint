<?php
$config_options_captcha = array(
    'name'   => 'captcha',
    'title'  => 'reCaptcha v3',
    'icon'   => 'fa fa-key',
    'fields' => array(
        array(
            'type'    => 'notice',
            'style'   => 'success',
            'content' => 'reCAPTCHA requires an API key, consisting of a "public" and a "private" key. You can sign up for a <a href="https://www.google.com/recaptcha/admin" target="_blank">free reCAPTCHA key</a>.',
        ),
        array(
            'id'    => 'captcha_enable',
            'type'  => 'switcher',
            'title' => 'Enable',
        ),
        array(
            'id'    => 'captcha_pubkey',
            'type'  => 'text',
            'title' => 'Public Key ( Site Key )',
        ),
        array(
            'id'    => 'captcha_privkey',
            'type'  => 'text',
            'title' => 'Private Key',
        ),
    )
);