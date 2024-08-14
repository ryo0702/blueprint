<?php 
include get_template_directory().'/views/parts/section/parts-title.php';


// Loop
$section_view_inner = $categories = $category_name = null;
$args = array(
  'post_type' => 'post',
  'posts_per_page' => 5,
);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
	$section_view_inner .= '<div class="news-list"><ul>';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
    // Category
    $categories = get_the_category();
    $category_name = !empty($categories) ? esc_html($categories[0]->name) : '新着情報';
    // View
		$section_view_inner .= '<li class="item"><a href="'.get_the_permalink().'">
      <div class="item-category">'.$category_name.'</div>
      <div class="item-titles">
        <div class="item-title">'.get_the_title().'</div>
        <div class="item-description">'.get_the_excerpt().'</div>
      </div>
      <div class="item-link"><span class="material-symbols-outlined">arrow_circle_right</span></div>
    </a></li>';
	}
	$section_view_inner .= '</ul></div>';
	wp_reset_postdata();

  if(!empty($section_view_inner)){
    $section_view .= $section_view_inner;
  }

  // Wrap
  if(!empty($section_view)){
    echo '<section class="section-news"><div class="container">'.$section_view.'</div></section>';
  }
}


