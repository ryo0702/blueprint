<?php
nutrail_page_meta('config-greeting');

include NUTRAIL_CORE_PATH.'views/parts/header/header-basic.php';

// Page title
if (file_exists(get_theme_file_path('views/parts/page-title.php'))) {
    include locate_template('views/parts/page-title.php');
}

$greeting_name  = nutrail_get_meta('greeting_name');
$greeting_post  = nutrail_get_meta('greeting_post');
$greeting_image = nutrail_get_meta('greeting_image');
$greeting_title = nutrail_get_meta('greeting_title');
$greeting_text  = nutrail_get_meta('greeting_text');
?>
    <div class="container pt-30">
        <div class="row gx-10">
            <div class="col-md-5 text-center">
                <?php
                if (!empty($greeting_image['url'])) {
                    echo '<div class="ratio ratio-3x4 mb-20"><div class="thumbtate">'.get_media($greeting_image).'</div></div>';
                }
                if (!empty($greeting_name)) {
                    echo '<h5 class="name mb-10">'.esc_html($greeting_name).'</h5>';
                }
                if (!empty($greeting_post)) {
                    echo '<p class="position">'.esc_html($greeting_post).'</p>';
                }
                ?>
            </div>
            <div class="col-md-7 pt-30 pt-md-0">
                <?php
                if (!empty($greeting_title)) {
                    echo '<h2 class="title mb-20">'.esc_html($greeting_title).'</h2>';
                }
                if (!empty($greeting_text)) {
                    echo '<p class="lead">'.esc_html($greeting_text).'</p>';
                }
                ?>
            </div>
        </div>
    </div>
<?php

// Home button
if (file_exists(get_theme_file_path('views/parts/back-home.php'))) {
    include locate_template('views/parts/back-home.php');
}

include NUTRAIL_CORE_PATH.'views/parts/footer/footer-basic.php';