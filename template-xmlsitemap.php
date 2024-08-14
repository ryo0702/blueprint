<?php
/*
Template Name: XMLサイトマップ
*/

header('Content-Type: text/xml; charset=utf-8', true);
echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

// トップページ
echo '<url>';
echo '<loc>'.home_url().'</loc>';
echo '<changefreq>daily</changefreq>';
echo '<priority>1.0</priority>';
echo '</url>';

// 固定ページ
$pages = get_pages(array('sort_order' => 'desc', 'orderby' => 'date'));
foreach ($pages as $page) {
    echo '<url>';
    echo '<loc>'.get_page_link($page->ID).'</loc>';
    echo '<changefreq>monthly</changefreq>';
    echo '<priority>0.8</priority>';
    echo '</url>';
}

// 投稿
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'order' => 'DESC',
    'orderby' => 'date',
);
$posts = get_posts($args);
foreach ($posts as $post) {
    echo '<url>';
    echo '<loc>'.get_permalink($post->ID).'</loc>';
    echo '<changefreq>monthly</changefreq>';
    echo '<priority>0.6</priority>';
    echo '</url>';
}

echo '</urlset>';
?>