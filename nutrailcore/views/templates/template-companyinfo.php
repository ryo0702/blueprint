<?php
nutrail_page_meta('config-companyinfo');

include NUTRAIL_CORE_PATH.'views/parts/header/header-basic.php';

// Page title
if (file_exists(get_theme_file_path('views/parts/page-title.php'))) {
    include locate_template('views/parts/page-title.php');
}
?>
    <div class="container">
        <?php
        $table_comapny = null;
        if (!empty($config_page)) {
            if (!empty($config_page['companyinfo_name'])) {
                $insert_text = null;
                if (!empty($config_page['companyinfo_name-kana'])) {
                    $insert_text = '<div class="kana">('.$config_page['companyinfo_name-kana'].')</div>';
                }
                $table_comapny .= '<tr><th>会社名</th><td><div>'.$config_page['companyinfo_name'].$insert_text.'</div></td></tr>';
            }
            if (!empty($config_page['companyinfo_name-eng'])) {
                $table_comapny .= '<tr><th>会社名(英語)</th><td>'.$config_page['companyinfo_name-eng'].'</td></tr>';
            }
            if (!empty($config_page['companyinfo_president-name'])) {
                $insert_text = null;
                if (!empty($config_page['companyinfo_president-post'])) {
                    $insert_text = $config_page['companyinfo_president-post'].' ';
                }
                $table_comapny .= '<tr><th>代表</th><td>'.@$insert_text.$config_page['companyinfo_president-name'].'</td></tr>';
            }
            if (!empty($config_page['companyinfo_officer'])) {
                $table_comapny .= '<tr><th>役員</th><td>'.nl2br(@$config_page['companyinfo_officer']).'</td></tr>';
            }
            if (!empty($config_page['companyinfo_pref'])) {
                $insert_text = $insert_text2 = null;
                if (!empty($config_page['companyinfo_postnum'])) {
                    $insert_text .= '〒'.$config_page['companyinfo_postnum'].' ';
                }
                if (!empty($config_page['companyinfo_pref'])) {
                    $insert_text .= $config_page['companyinfo_pref'].' ';
                }
                if (!empty($config_page['companyinfo_city'])) {
                    $insert_text .= $config_page['companyinfo_city'].' ';
                }
                if (!empty($config_page['companyinfo_street'])) {
                    $insert_text .= $config_page['companyinfo_street'].' ';
                }
                if (!empty($config_page['companyinfo_build'])) {
                    $insert_text .= $config_page['companyinfo_build'].' ';
                }
                if (!empty($config_page['companyinfo_map_link']['url'])) {
                    $target = null;
                    if(!empty(@$config_page['companyinfo_map_link']['target'])){
                        $target = ' target="_blank"';
                    }
                    $this_address .= '<div><a class="btn btn-xs btn-outline-main" href="'.@$config_page[$section_view_config_key.'_map_link']['url'].'"'.$target.'>'.@$config_page[$section_view_config_key.'_map_link']['text'].'</a></div>';
                }
                $table_comapny .= '<tr><th>本社所在地</th><td>'.@$insert_text.@$insert_text2.'</td></tr>';
            }
            if (!empty($config_page['companyinfo_tel'])) {
                $table_comapny .= '<tr><th>電話番号</th><td>'.$config_page['companyinfo_tel'].'</td></tr>';
            }
            if (!empty($config_page['companyinfo_fax'])) {
                $table_comapny .= '<tr><th>FAX番号</th><td>'.$config_page['companyinfo_fax'].'</td></tr>';
            }
            if (!empty($config_page['companyinfo_businesscontent'])) {
                $table_comapny .= '<tr><th>業務内容</th><td>'.nl2br(@$config_page['companyinfo_businesscontent']).'</td></tr>';
            }
            if (!empty($config_page['companyinfo_license'])) {
                $table_comapny .= '<tr><th>資格・許可</th><td>'.nl2br(@$config_page['companyinfo_license']).'</td></tr>';
            }
            if (!empty($config_page['companyinfo_bank'])) {
                $table_comapny .= '<tr><th>取引銀行</th><td>'.nl2br(@$config_page['companyinfo_bank']).'</td></tr>';
            }
            if (!empty($config_page['companyinfo_customer'])) {
                $table_comapny .= '<tr><th>主要顧客</th><td>'.nl2br(@$config_page['companyinfo_customer']).'</td></tr>';
            }
        }
        if (!empty($table_comapny)) {
            echo '<div><table class="table-striped-columns">'.$table_comapny.'</table></div>';
        }
        ?>
    </div>
<?php

// Home button
if (file_exists(get_theme_file_path('views/parts/back-home.php'))) {
    include locate_template('views/parts/back-home.php');
}

include NUTRAIL_CORE_PATH.'views/parts/footer/footer-basic.php';