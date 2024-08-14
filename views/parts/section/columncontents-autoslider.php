<?php
include get_template_directory().'/views/parts/section/parts-title.php';

$section_view_inner = null;
if(is_array(@$arr_section_data[$section_key_number.'-contents'])){
  foreach (@$arr_section_data[$section_key_number.'-contents'] as $column_content) {
    if(!empty($column_content['image']['url'])){
      $section_view_inner .= '<li><div class="thumbnail thumbnail-silver"><img src="'.$column_content['image']['url'].'" alt="'.@$column_content['image']['alt'].'"></div></li>';
    }
  }
  if(!empty($section_view_inner)){
    echo '<section><ul class="slider" data-slick=\'{"infinite":true,"autoplay":true,"autoplaySpeed": 0,"slidesToShow":3,"slidesToScroll":1,"speed":8000,"centerMode":true,"cssEase":"linear"}\'>
      '.$section_view_inner.'
    </ul></section>';
  }
}