<?php
$view_parts_titles = $titles_button_class = $titles_s_class = $titles_description_class = null;
if(!empty($config_parts_titles['title-s'])){
    $titles_s_class = (empty($config_parts_titles['title-s-class'])) ? 'fs-s text-center mb-5px flh-m fls-xs' : $config_parts_titles['title-s-class'];
    $view_parts_titles .= '<h2 class="'.$titles_s_class.'">'.$config_parts_titles['title-s'].'</h2>';
}
if(!empty($config_parts_titles['title-l'])){
    $titles_button_class = (empty($config_parts_titles['title-l-class'])) ? 'fs-xl text-center mb-5px flh-m fls-xs' : $config_parts_titles['title-l-class'];
    $view_parts_titles .= '<h2 class="'.$titles_button_class.'">'.$config_parts_titles['title-l'].'</h2>';
}
if(!empty($config_parts_titles['description'])){
    $titles_description_class = (empty($config_parts_titles['title-description-class'])) ? 'mx-auto flh-m fls-xs' : $config_parts_titles['title-description-class'];
    $view_parts_titles .= '<p class="'.$titles_description_class.'">'.$config_parts_titles['description'].'</p>';
}
if(!empty($config_parts_titles['title-bottom']['label'])){
    $titles_button_class = (empty($config_parts_titles['title-button-class'])) ? 'btn btn-action' : $config_parts_titles['title-button-class'];
    $view_parts_titles .= '<div class="mt-50px text-center">
        <a href="'.@$config_parts_titles['title-bottom']['link'].'" class="'.$titles_button_class.'">'.@$config_parts_titles['title-bottom']['label'].'</a>
    </div>';
}



if(!empty($view_parts_titles)){
    echo '<div class="section-titles container_xs">'.$view_parts_titles.'</div>';
}
?>