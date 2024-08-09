<?php 
if(is_front_page() || is_home()){
    if(!empty($_GET['reference'])){
        include get_template_directory().'/controllers/reference.php';
    }
    else{
        include get_template_directory().'/controllers/toppage.php';
    }
}
?>
