<?php
/*
 * @var $array
 * @var $insert_field
 * */
$view_title = !empty($array['view_title']) ? $array['view_title'] : [];

if ($view_title !== 'off') {
    $settings = array(
        'key'         => $array['key'],
        'main'        => true,
        'sub'         => true,
        'description' => true,
        'readmore'    => true
    );
    if (!empty($array['view_title']) && is_array($array['view_title'])) {
        $settings = wp_parse_args($array['view_title'], $settings);
    }
    $array_section_title = array_metabox_title_set($settings);
    $insert_field        = array_merge($array_section_title, $insert_field);
}