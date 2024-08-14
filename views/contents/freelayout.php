
<?php
$arr_config_page_data = $arr_section_type = null;
$arr_config_page_data = get_post_meta(get_the_ID(),'config-page',true);

echo '<main class="contents">';
if(is_array(@$arr_config_page_data['sort'])){
  foreach (@$arr_config_page_data['sort'] as $section_sort) {
    $section_view = $section_view_inner = $section_key = $section_number = $section_key_number = $arr_section_data = null;
    if (strpos($section_sort['section-type'], '-') !== false) {
      $arr_section_type = explode('-', $section_sort['section-type']);
      if(file_exists(get_template_directory().'/views/parts/section/'.$arr_section_type[0].'.php')){
        $section_key = $arr_section_type[0];
        $section_number = $arr_section_type[1];
        $section_key_number = $section_key.'-'.$section_number;
        $arr_section_data = $arr_config_page_data['contents-'.$section_key];
        include get_template_directory().'/views/parts/section/'.$section_key.'.php';
      }
    }
  }
}
echo '</main>';
?>