<?php
// allow only to admin
$capabilities = array(
    'publish_posts'       => 'manage_options',
    'edit_posts'          => 'manage_options',
    'edit_others_posts'   => 'manage_options',
    'delete_posts'        => 'manage_options',
    'delete_others_posts' => 'manage_options',
    'read_private_posts'  => 'manage_options',
    'edit_post'           => 'manage_options',
    'delete_post'         => 'manage_options',
    'read_post'           => 'manage_options',
);
$array_cpt = array(
    'inquiries'     => array(
        'title'           => 'お問い合わせ',
        'titles'          => 'お問い合わせ',
        'public'          => true,
        'adminmenu'       => false,
        'search'          => false,
        'archive'         => false,
        'restapi'         => false,
        'supports'        => array('title'),
        'capability_type' => 'post',
        'capabilities'    => $capabilities,
    ),
    'hearingsystem' => array(
        'title'           => 'ヒアリングシステム',
        'titles'          => 'ヒアリングシステム',
        'public'          => true,
        'adminmenu'       => false,
        'search'          => false,
        'archive'         => false,
        'restapi'         => false,
        'supports'        => array('title'),
        'capability_type' => 'post',
        'capabilities'    => $capabilities,
    ),
);