<?php
// Content
$section_view_inner = null;
if(!empty($arr_section_data[$section_key_number.'-logo']['url'])){
  $section_view_inner .= '<div class="content-group logo"><h1><img src="'.@$arr_section_data[$section_key_number.'-logo']['url'].'" alt="'.@$arr_section_data[$section_key_number.'-logo']['alt'].'" title="'.@@$arr_section_data[$section_key_number.'-logo']['alt'].'"></h1></div>';
}
if(!empty($section_view_inner)){
  $section_view .= '<div class="content">'.$section_view_inner.'</div>';
}

// Background Overlay
if(!empty($arr_section_data[$section_key_number.'-overlay'])){
  $section_view .= '<div class="'.$arr_section_data[$section_key_number.'-overlay'].'"></div>';
}

// Background Image
$section_view_inner = null;
if($arr_section_data[$section_key_number.'-type'] == 'split-bgi'){
  if(!empty($arr_section_data[$section_key_number.'-bgi']['url'])){
    $section_view_inner .= '<div class="split-left" style="background-image:url(\''.$arr_section_data[$section_key_number.'-bgi']['url'].'\');"></div>';
  }
  if(!empty($arr_section_data[$section_key_number.'-bgi2']['url'])){
    $section_view_inner .= '<div class="split-left" style="background-image:url(\''.$arr_section_data[$section_key_number.'-bgi2']['url'].'\');"></div>';
  }
}
if(!empty($section_view_inner)){
  $section_view .= '<div class="bgi">'.$section_view_inner.'</div>';
}

if(!empty($section_view)){
  echo '<div class="heroimage hero-h60vh hero-split">'.$section_view.'</div>';
}
?>