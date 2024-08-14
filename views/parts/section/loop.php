<?php 
if(@$arr_section_data[$section_key_number.'-type'] == 'newslist'){
  include get_template_directory().'/views/parts/section/loop-newslist.php';
}