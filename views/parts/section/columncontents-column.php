<?php 
include get_template_directory().'/views/parts/section/parts-title.php';

// Column
$section_view_inner = null;
if(is_array(@$arr_section_data[$section_key_number.'-contents'])){
  $i = 0;
  foreach (@$arr_section_data[$section_key_number.'-contents'] as $column_content) {
    $section_view_inner2 = $section_view_inner3 = null;
    $i++;
    if(!empty($column_content['image']['url'])){
      if(!empty($arr_section_data[$section_key_number.'-divimage'])){
        $class_thumbnail = '';
      }
      else{
        $class_thumbnail = 'thumbnail thumbnail-silver';
      }
      if(!empty($column_content['link']['url'])){
        $section_view_inner2 .= '<a href="'.$column_content['link']['url'].'" class="'.$class_thumbnail.'"><img src="'.$column_content['image']['url'].'" alt="'.@$column_content['image']['alt'].'"></a>';
      }
      else{
        $section_view_inner2 .= '<div class="'.$class_thumbnail.'"><img src="'.$column_content['image']['url'].'" alt="'.@$column_content['image']['alt'].'"></div>';
      }
    }
    if(!empty($column_content['title'])){
      if(!empty($column_content['link']['url'])){
        $section_view_inner3 .= '<h3><a href="'.$column_content['link']['url'].'" class="text-m-plus">'.nl2br($column_content['title']).'</a></h3>';
      }
      else{
        $section_view_inner3 .= '<h3 class="text-m-plus">'.nl2br($column_content['title']).'</h3>';
      }
    }
    if(!empty($column_content['description'])){
      $section_view_inner3 .= '<p class="mt-xs text-s">'.nl2br($column_content['description']).'</p>';
    }
    if(!empty($section_view_inner3)){
      $section_view_inner2 .= '<div class="texts mt-s">'.$section_view_inner3.'</div>';
    }
    if(!empty(@$arr_section_data[$section_key_number.'-numbering'])){
      $section_view_inner2 .= '<div class="texts mt-s"><div class="badge badge-circle">'.$i.'</div></div>';
    }
    if(!empty($section_view_inner2)){
      $section_view_inner .= '<div class="col position-relative">'.$section_view_inner2.'</div>';
    }
  }
}
if(!empty($section_view_inner)){
  $section_view .= '<div'.theme_elem_attachment(array('class' => array('row','row-'.@$arr_section_data[$section_key_number.'-type']))).'">'.$section_view_inner.'</div>';
}

// Wrap
if(!empty($section_view)){
  echo '<section><div class="container">'.$section_view.'</div></section>';
}
?>