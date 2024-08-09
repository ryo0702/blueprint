<?php
function enqueue_theme_styles() {
	wp_enqueue_style('theme-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_theme_styles');