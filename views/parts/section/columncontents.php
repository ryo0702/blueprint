<?php
if(@$arr_section_data[$section_key_number.'-type'] == 'autoslider'){
  include get_template_directory().'/views/parts/section/columncontents-autoslider.php';
}
else{
  include get_template_directory().'/views/parts/section/columncontents-column.php';
}