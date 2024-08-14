<?php
if (!empty(NUTRAIL_CONFIG_THEME_MENU)) {
    function nutrail_memu_setup(){
        if(NUTRAIL_CONFIG_THEME_MENU == 'navbar_footer'){
            register_nav_menus(array(
                'menu_main'   => 'ナビゲーションメニュー',
                'menu_footer' => 'フッターメニュー',
            ));
        }
    }
    add_action('after_setup_theme', 'nutrail_memu_setup');
}
