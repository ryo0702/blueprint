<?php
$common       = nutrail_get_option('config-common');
$site_name    = nutrail_get_option('site_name');
$navbar_logo  = nutrail_get_option('navbar_logo');
$menu_class   = 'menu menu-column';
$navbar_class = 'navbar-center boxshadow';
$navbar_tel   = '';
?>

<header class="<?php echo esc_attr($navbar_class) ?>">
    <div>
        <div>
            <div class="container">
                <div class="navbar-contents d-flex justify-content-between align-items-center">
                    <div class="navbar-center-left">
                        <div class="menu-icon-wrap">
                            <div class="menu-icon-chocolate menu-icon-menu">
                                <div class="dot1"></div>
                                <div class="dot2"></div>
                                <div class="dot3"></div>
                                <div class="dot4"></div>
                                <div class="dot5"></div>
                                <div class="dot6"></div>
                                <div class="dot7"></div>
                                <div class="dot8"></div>
                                <div class="dot9"></div>
                            </div>
                            <div class="menu-icon-text">MENU</div>
                        </div>
                    </div>
                    <h1 class="navbar-center-center"><?php echo wp_kses_post($navbar_logo); ?></h1>
                    <div class="navbar-center-right"></div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="navbar-center-drawr">
    <div class="navbar-center-drawr-innder container">
        <?php
        if (has_nav_menu('menu_main')) {
            wp_nav_menu([
                'theme_location' => 'menu_main',
                'depth'          => 2,
                'container'      => '',
                'menu_class'     => $menu_class,
            ]);
        }
        ?>
    </div>
</div>