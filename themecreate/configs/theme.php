<?php
function enqueue_theme_styles() {
	wp_enqueue_style('theme-style', get_template_directory_uri() . '/style.css');
	wp_enqueue_script('theme-script', get_template_directory_uri() . '/scripts/theme.js', array('jquery'), false, true);
}
add_action('wp_enqueue_scripts', 'enqueue_theme_styles');