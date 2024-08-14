<?php
nutrail_page_meta('config-history');

include NUTRAIL_CORE_PATH.'views/parts/header/header-basic.php';

// Page title
if (file_exists(get_theme_file_path('views/parts/page-title.php'))) {
    include locate_template('views/parts/page-title.php');
}

$table_comapny = null;
$table_history = null;
$content       = nutrail_get_meta('history_content');
$class         = nutrail_get_meta('history_class');
$attr          = [
    'class' => 'section_history pt-30'
];
if (!empty($class)) {
    $attr['class'] .= ' '.$class;
}
?>
    <div <?php echo nutrail_attr($attr) ?>>
        <div class="container">
            <?php
            if (!empty($content)) {
                foreach ($content as $key => $value) {
                    if (!empty($value['history_content_title']) and !empty($value['history_content_post'])) {
                        $table_history .= '<tr>';
                        $table_history .= '<th>'.date('Y年m月d日', strtotime($value['history_content_post'])).'</th>';
                        $table_history .= '<td>
                                        <div class="text_size_m">'.$value['history_content_title'].'</div>
                                        <div class="text_size_s">'.$value['history_content_content'].'</div>
                                        </td>';
                        $table_history .= '</tr>';
                    }
                }
            }
            if (!empty($table_history)) {
                echo '<div><table class="table-striped-columns">'.$table_history.'</table></div>';
            }
            ?>
        </div>
    </div>
<?php

// Home button
if (file_exists(get_theme_file_path('views/parts/back-home.php'))) {
    include locate_template('views/parts/back-home.php');
}

include NUTRAIL_CORE_PATH.'views/parts/footer/footer-basic.php';