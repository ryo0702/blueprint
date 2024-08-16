<?php
// Text
$section_view_inner = null;
if(!empty($arr_section_data[$section_key_number.'-title-sub'])){
  $section_view_inner .= '<div class="text-xxl text-bg-title fc-tertiary z-index-1">'.nl2br(@$arr_section_data[$section_key_number.'-title-sub']).'</div>';
}
if(!empty($arr_section_data[$section_key_number.'-title'])){
  $section_view_inner .= '<h2 class="text-xl position-relative z-index-2">'.nl2br(@$arr_section_data[$section_key_number.'-title']).'</h2>';
}
if(!empty($arr_section_data[$section_key_number.'-description'])){
  $section_view_inner .= '<p class="mt-l text-m-plus position-relative z-index-2">'.nl2br(@$arr_section_data[$section_key_number.'-description']).'</p>';
}
if(!empty($arr_section_data[$section_key_number.'-btn']['url'])){
  $target = null;
  if(!empty($arr_section_data[$section_key_number.'-target'])){
    $target = ' target="'.$arr_section_data[$section_key_number.'-target'].'"';
  }
  $section_view_inner .= '<div class="mt-l"><a href="'.$arr_section_data[$section_key_number.'-btn']['url'].'" class="button button-ghost button-radius button-material-symbols-right"'.@$target.'>'.$arr_section_data[$section_key_number.'-btn']['text'].'<span class="material-symbols-outlined">chevron_right</span></a></div>';
}
if(!empty($section_view_inner)){
  $section_view .= '<div class="col position-relative">'.$section_view_inner.'</div>';
}

// Image
$section_view_inner = null;
if(!empty($arr_section_data[$section_key_number.'-image']['url'])){
  $section_view_inner .= '<div class="thumbnail thumbnail-silver">
    <img src="'.$arr_section_data[$section_key_number.'-image']['url'].'" alt="'.@$arr_section_data[$section_key_number.'-image']['alt'].'">
  </div>';
}
if(!empty($arr_section_data[$section_key_number.'-caption'])){
  $section_view_inner .= '<p class="tac text-s mt-xs">'.nl2br(@$arr_section_data[$section_key_number.'-caption']).'</p>';
}
if(!empty($section_view_inner)){
  $section_view .= '<div class="col">'.$section_view_inner.'</div>';
}

// Wrap
if(!empty($section_view)){
  echo '<section class="imagetext">
    <div class="container"><div class="row row-4-3column gutter-xl">'.$section_view.'</div></div>
  </section>';
}
?>
