<?php
if(file_exists(get_template_directory().'/views/parts/section/content-single-'.@$sectionData['section-content']['contents-layout'].'.php')){
  include get_template_directory().'/views/parts/section/content-single-'.@$sectionData['section-content']['contents-layout'].'.php';
}
else{
  include get_template_directory().'/views/parts/section/content-single-layout-left-text-right-image.php';
}
?>
