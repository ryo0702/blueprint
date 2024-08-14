<?php
header('Content-type: application/xml; charset=utf-8');
echo '<?xml version="1.0" encoding="UTF-8" ?>';
echo '<urlset xmlns="http://www.google.com/schemas/sitemap/0.84" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.google.com/schemas/sitemap/0.84 http://www.google.com/schemas/sitemap/0.84/sitemap.xsd">
';

echo '<url>
<loc>'.site_url().'</loc>
<priority>1.00</priority>
</url>';

if(is_array(@$array_post_type)){
    echo '<url>';
    foreach ($array_post_type as $posttype_key => $posttype_priority) {
        $the_query = null;
        $the_query = new WP_Query( array('post_type' => $posttype_key,'posts_per_page' => -1) );
        if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                echo '<loc>'.get_the_permalink().'</loc><priority>'.$posttype_priority.'</priority>';
            }
            wp_reset_postdata();
        }
    }
    echo '</url>';
}

echo '</urlset>';