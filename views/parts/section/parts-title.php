<?php 
$section_view_inner = null;
if(!empty(@$arr_section_data[$section_key_number.'-title'])){
  $section_view_inner .= '<h2 class="title">'.nl2br(@$arr_section_data[$section_key_number.'-title']).'</h2>';
}
if(!empty(@$arr_section_data[$section_key_number.'-subtitle'])){
  $section_view_inner .= '<div class="title-eng">'.nl2br(@$arr_section_data[$section_key_number.'-subtitle']).'</div>';
}
if(!empty(@$arr_section_data[$section_key_number.'-description'])){
  $section_view_inner .= '<div class="description">'.nl2br(@$arr_section_data[$section_key_number.'-description']).'</div>';
}
if(!empty($section_view_inner)){
  $section_view .= '<div class="title-group">'.$section_view_inner.'</div>';
}