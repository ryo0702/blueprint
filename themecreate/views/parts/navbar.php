<div class="navbar">
    <div class="nav-buttons">
    </div>
    <h1 class="logo"><a href="<?php echo site_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo" /></a></h1>
    <div class="nav-buttons">
        <a href="#" class="humburger">
            <hr><hr><hr>
        </a>
    </div>
</div>
<?php 
include get_template_directory().'/views/parts/drawermenu.php';
?>