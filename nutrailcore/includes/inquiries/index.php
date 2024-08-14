<?php
function admin_inquery()
{
    add_menu_page(
        'お問い合わせ',
        'お問い合わせ',
        'manage_options',
        'admin_inquery',
        'add_admin_inquery',
        'dashicons-email',
        24
    );
}

add_action('admin_menu', 'admin_inquery');

function add_admin_inquery()
{
    if (!empty($_GET['delete'])) {
        if (!empty($_GET['post'])) {
            foreach ($_GET['post'] as $post_id) {
                wp_delete_post($post_id);
            }
        }
        require_once NUTRAIL_CORE_PATH.'includes/inquiries/delete.php';
        return;
    }
    if (empty($_GET['type']) || @$_GET['type'] == 'list') {
        require_once NUTRAIL_CORE_PATH.'includes/inquiries/list.php';
        return;
    }
    if (@$_GET['type'] == 'view' && !empty(@$_GET['id'])) {
        require_once NUTRAIL_CORE_PATH.'includes/inquiries/view.php';
        return;
    }
    if (@$_GET['type'] == 'statuschange' && !empty(@$_GET['id'])) {
        require_once NUTRAIL_CORE_PATH.'includes/inquiries/status.php';
        return;
    }
    if (@$_GET['type'] == 'delete' && !empty(@$_GET['id'])) {
        wp_delete_post(@$_GET['id']);
        require_once NUTRAIL_CORE_PATH.'includes/inquiries/delete.php';
    }
}

require_once NUTRAIL_CORE_PATH.'includes/inquiries/action.php';