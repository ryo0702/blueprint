<?php
$common       = nutrail_get_option('config-common');
$site_name    = nutrail_get_option('site_name');
$navbar_logo  = nutrail_get_option('navbar_logo');
$menu_class   = 'menu d-flex';
$navbar_class = 'navbar navbar-basic boxshadow';

if (!empty($common['navbar_fixed'])) {
    $navbar_class .= ' navbar-fixed';
    echo '<div class="placeholder-fixed"></div>';
}

if(!empty($logo_link_no)){
    $navbar_logo = preg_replace('/<a .*?>(.*?)<\/a>/', "$1", $navbar_logo);
}
?>
<header class="<?php echo esc_attr($navbar_class) ?>">
    <div class="container">
        <div class="navbar-contents d-flex justify-content-between align-items-center">
            <h1 class="logo"><?php echo wp_kses_post(@$navbar_logo); ?></h1>
            <div class="navbar-menu d-flex align-items-center h-navbar-logo">
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
    </div>
</header>