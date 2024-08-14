<?php
$site_name = nutrail_get_option('site_name');
?>
<footer class="mt-50px">
<div class="footermenu-column">
    <div class="footermenu-column-innder container">
        <?php
        if (has_nav_menu('menu_main')) {
            wp_nav_menu([
                'theme_location' => 'menu_footer',
                'depth'          => 2,
                'container'      => '',
                'menu_class'     => 'menu-column',
            ]);
        }
        ?>
    </div>
</div>
<div class="copyright pt-20px pb-20px">
    <div class="container text-center fs-xs">Copyright © <?php echo $site_name; ?>. All Rights Reserved.</div>
</div>
</footer>