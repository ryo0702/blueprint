<?php 
// Remove Adminbar
show_admin_bar(false);

// Add Scripts
function wp_enqueue_scripts_code(){
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
add_action('wp_head', 'wp_enqueue_scripts_code', 5);

// アーカイブページのタイトル改変
add_filter( 'get_the_archive_title', function ($title) {
  if ( is_category() ) {
      $title = single_cat_title( '', false );
  } elseif ( is_tag() ) {
      $title = single_tag_title( '', false );
  } elseif ( is_author() ) {
      $title = '<span class="vcard">' . get_the_author() . '</span>';
  }
  return $title;
});

function register_theme_menus() {
    register_nav_menus(array(
        'navbar' => 'ナビゲーションバー',
        'footermenu-main' => 'フッターメニュー メイン',
        'footermenu-sub' => 'フッターメニュー サブ'
    ));
}
add_action('init', 'register_theme_menus');

function nutrail_excerpt_more($output_filter)
{
    if (is_admin() && !wp_doing_ajax()) {
        return $output_filter;
    }

    return '...';
}
add_filter('excerpt_more', 'nutrail_excerpt_more', 11);


if (!function_exists('nutrail_script_defer_parsing')) {
    function nutrail_script_defer_parsing($url)
    {
        if (is_admin() || is_customize_preview()) {
            return $url;
        }

        if (str_contains($url, '.js')) {
            $defer = apply_filters('nutrail_filter_defer_parsing', [
                'wp-includes/js/jquery/jquery.min.js',
            ]);

            foreach ($defer as $handle) {
                if (!str_contains($url, $handle)) {
                    return "$url' defer='defer";
                }
            }
        }

        return $url;
    }
}
add_filter('clean_url', 'nutrail_script_defer_parsing');

// Disable Gutenberg
function wpa_blocks_disable_gutenberg($use_block_editor, $post_type){
    if($post_type == 'post'){
        return true;
    }
    else{
        return false;
    }
}
add_filter('use_block_editor_for_post_type', 'wpa_blocks_disable_gutenberg', 10, 2);
add_filter('gutenberg_can_edit_post_type', 'wpa_blocks_disable_gutenberg', 10, 2);

// Delete Editor for Template
function remove_editor_for_template($post) {
    $current_template = get_post_meta($post->ID, '_wp_page_template', true);
    if ($current_template == 'template-freelayout.php') {
        remove_post_type_support('page', 'editor');
    }
}
add_action('add_meta_boxes_page', 'remove_editor_for_template');


function add_custom_styles() {
    include get_template_directory() . "/configs/site-config/css/include-design.php";
    if(!empty(get_option('config-theme'))){
      $global_config = get_option('config-theme');
    }
    $webfont_include = $insert_webfont = null;
    if(!empty($global_config['config-design']['common-ff'])){
      $insert_webfont = $include_design_webfont['common-ff']['options'][$global_config['config-design']['common-ff']];
      $insert_webfont = str_replace(' ', '+', $insert_webfont);
      $webfont_include .= 'family='.$insert_webfont.'&';
    }
    $insert_webfont = null;
    if(!empty($global_config['config-design']['common-ff-eng'])){
      $insert_webfont = $include_design_webfont['common-ff-eng']['options'][$global_config['config-design']['common-ff-eng']];
      $insert_webfont = str_replace(' ', '+', $insert_webfont);
      $webfont_include .= 'family='.$insert_webfont.'&';
    }
    if(!empty($webfont_include)){
      wp_enqueue_style('googlewebfont', 'https://fonts.googleapis.com/css2?'.$webfont_include.'display=swap');
    }

    echo '<style type="text/css">:root {';
        foreach ($include_all_css as $css_item) {
          if(!empty($css_item['id']) && @$css_item['skip'] != 'on'){
            if(!empty($global_config['config-design'][$css_item['id']])){
              if(!empty($css_item['unit'])){
                echo '--'.$css_item['id'].':'.$global_config['config-design'][$css_item['id']].$css_item['unit'].';';
              }
              else{
                echo '--'.$css_item['id'].':'.$global_config['config-design'][$css_item['id']].';';
              }
            }
            else{
              if(!empty($css_item['unit'])){
                echo '--'.$css_item['id'].':'.$css_item['default'].$css_item['unit'].';';
              }
              else{
                echo '--'.$css_item['id'].':'.$css_item['default'].';';
              }
            }
          }
        }
    echo '}</style>';
}
add_action('wp_head', 'add_custom_styles',10);


function theme_elem_attachment($arr = null){
  $return_wrap = $return = null;
  foreach (@$arr as $key => $atts) {
    $return = null;
    if(is_array(@$atts)){
      foreach ($atts as $att) {
        if(!empty($att)){
          $return .= $att.' ';
        }
      }
      if(!empty($return)){
        $return = rtrim($return);
        $return_wrap .= $key.'="'.$return.'" ';
      }
    }
  }
  if(!empty($return_wrap)){
    $return_wrap = rtrim($return_wrap);
    return ' '.$return_wrap;
  }
  else{
    return null;
  }
}