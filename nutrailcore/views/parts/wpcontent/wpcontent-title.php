<?php
// Page title
if (file_exists(get_theme_file_path('views/parts/page-title.php'))) {
    include locate_template('views/parts/page-title.php');
}

echo '<div class="container-wrap fmt-m fmb-m">';
echo '<article class="container">';
echo '<div class="wpcontent">';
the_content();
echo '</div>';

echo '<div class="wpcontent-back fmt-m text-center">';
echo '<a href="'.get_home_url().'" class="btn btn-outline-main">トップページ</a>';
echo '</div>';

echo '</article>';
echo '</div>';