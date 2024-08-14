<?php
function add_pageexport_submenu() {
  add_submenu_page(
      'admin_options',
      'ページエクスポート',
      'ページエクスポート',
      'manage_options',
      'pageexport',
      'pageexport_callback'
  );
}
add_action('admin_menu', 'add_pageexport_submenu');
function pageexport_callback() {
  get_template_part('/theme-8-config/adminpage/pageexport');
}

function add_pagesetup_submenu() {
  add_submenu_page(
      'admin_options',
      'ページセットアップ',
      'ページセットアップ',
      'manage_options',
      'pagesetup',
      'pagesetup_callback'
  );
}
add_action('admin_menu', 'add_pagesetup_submenu');
function pagesetup_callback() {
  get_template_part('/theme-8-config/adminpage/pagesetup');
}