<?php
function enqueue_theme_styles() {
	// Styles
	wp_enqueue_style('theme-style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('theme-slick-theme', get_template_directory_uri() . '/lib/slick/slick-theme.css');
	wp_enqueue_style('theme-slick', get_template_directory_uri() . '/lib/slick/slick.css');
	// Scripts
	wp_enqueue_script('theme-slick-script', get_template_directory_uri() . '/lib/slick/slick.min.js', array('jquery'), false, true);
	wp_enqueue_script('theme-script', get_template_directory_uri() . '/scripts/theme.js', array('jquery'), false, true);
	
	echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
	echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
	$google_fonts_url = 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Noto+Sans+JP:wght@100..900&display=swap';
	wp_enqueue_style('google-fonts', $google_fonts_url, array(), null);
	wp_enqueue_style('google-icon', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200', array(), null);
}
add_action('wp_enqueue_scripts', 'enqueue_theme_styles');