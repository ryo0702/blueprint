<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create-theme']) && check_admin_referer('submit', 'create-theme')) {
  $theme_name = $_POST['theme-name'];
  create_theme($theme_name);
}
else{
  include get_template_directory().'/views/parts/head.php';
  include get_template_directory().'/views/parts/navbar-reference.php';
  include get_template_directory().'/views/contents/toppage.php';
  include get_template_directory().'/views/parts/footer.php';
  include get_template_directory().'/views/parts/foot.php';
}
