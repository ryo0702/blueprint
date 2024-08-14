<?php
global $post;

if (empty($post->ID)) {
    return null;
}

if (!is_single() && !is_page()) {
    return null;
}

$config_company = nutrail_get_option('config-company', []);
$config_common  = nutrail_get_option('config-common', []);
$site_title     = get_bloginfo('name').' - '.get_bloginfo('description');
$site_name      = !empty($config_company['company_name']) ? $config_company['company_name'] : get_bloginfo('name');
$schema         = [
    '@type'            => 'NewsArticle',
    'mainEntityOfPage' => [
        '@type' => 'WebPage',
        '@id'   => 'https://google.com/article',
    ],
    'publisher'        => [
        '@type' => 'Organization',
        'name'  => wp_kses_post($site_name),
        'logo'  => [
            '@type'   => 'ImageObject',
            'url'     => @$config_common['logo']['url'],
            'width'   => @$config_common['logo']['width'],
            'height'  => @$config_common['logo']['height'],
            'caption' => wp_kses_post(@$site_title),
        ],
    ],
    'author'           => [
        '@type' => 'Person',
        'name'  => get_the_author_meta('display_name', $post->post_author),
        'url'   => get_author_posts_url($post->post_author),
    ],
    'headline'         => wp_kses_post(get_the_title($post->ID)),
    'datePublished'    => get_the_date('c', $post),
    'dateModified'     => get_the_modified_date('c', $post),
];
if (has_post_thumbnail($post)) {
    $schema['image'] = [get_the_post_thumbnail_url($post, 'full')];
} else {
    $schema['image'] = [@$config_common['logo']['url']];
}

return $schema;