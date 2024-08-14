<?php
include NUTRAIL_CORE_PATH.'views/parts/header/header-basic.php';
if ( have_posts() ) {
   while ( have_posts() ) {
   the_post();
    if (file_exists(get_theme_file_path('views/parts/page-title.php'))) {
        include locate_template('views/parts/page-title.php');
    }

    $this_post_meta = $thiskey = null;
    $thiskey = 'config-thankyou';
    $childkey = 'thankyoupage-content';
    $this_post_meta = get_post_meta(get_the_ID(),$thiskey,true);

    echo '<div class="container-wrap fmt-m fmb-m">';
    echo '<article class="container">';
    echo '<div class="wpcontent">';
    echo '<h3 class="ffs-l fmb-s">お問合せ誠にありがとうございます</h3>';
    if(!empty($this_post_meta['thankyou_content'])){
        echo '<p>'.nl2br($this_post_meta['thankyou_content']).'</p>';
    }
    else{
        echo '<p>フォームは正常に送信されました。</p>';
        echo '<p>メッセージの送信頂き誠にありがとうございました。</p>';
    }
    echo '</div>';
    echo '<div class="wpcontent-back fmt-m text-center">';
    echo '<a href="'.get_home_url().'" class="btn btn-outline-main">トップページ</a>';
    echo '</div>';

    echo '</article>';
    echo '</div>';
   }
}
include NUTRAIL_CORE_PATH.'views/parts/footer/footer-basic.php';