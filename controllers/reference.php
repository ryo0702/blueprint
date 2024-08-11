<?php
if(!empty(@$_GET['reference']) && file_exists(get_template_directory().'/views/contents/'.$_GET['reference'].'.php')){
  include get_template_directory().'/views/parts/head.php';
  include get_template_directory().'/views/parts/navbar-reference.php';
  include get_template_directory().'/views/contents/'.$_GET['reference'].'.php';
  include get_template_directory().'/views/contents/reference.php';
  include get_template_directory().'/views/parts/footer.php';
  include get_template_directory().'/views/parts/foot.php';
}
