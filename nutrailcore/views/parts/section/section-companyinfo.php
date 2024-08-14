<?php
$children_content = null;

$this_address = null;
if(!empty(@$config_page[$section_view_config_key.'_postnum'])){
    $this_address .= "〒".@$config_page[$section_view_config_key.'_postnum']."\n";
}
if(!empty(@$config_page[$section_view_config_key.'_pref'])){
    $this_address .= @$config_page[$section_view_config_key.'_pref'];
}
if(!empty(@$config_page[$section_view_config_key.'_city'])){
    $this_address .= @$config_page[$section_view_config_key.'_city'];
}
if(!empty(@$config_page[$section_view_config_key.'_street'])){
    $this_address .= @$config_page[$section_view_config_key.'_street'];
}
if(!empty(@$config_page[$section_view_config_key.'_build'])){
    $this_address .= @$config_page[$section_view_config_key.'_build'];
}
if(!empty(@$config_page[$section_view_config_key.'_map_link'])){
    $target = null;
    if(!empty(@$config_page[@$section_view_config_key.'_map_link']['target'])){
        $target = ' target="_blank"';
    }
    $this_address .= '<div><a class="btn btn-xs btn-outline-main" href="'.@$config_page[$section_view_config_key.'_map_link']['url'].'"'.$target.'>'.@$config_page[$section_view_config_key.'_map_link']['text'].'</a></div>';
}

$array_info1 = array(
    array('name' => @$section_view_config_key.'_name','type'  => 'text','title' => '会社名'),
    array('name' => @$section_view_config_key.'_name-kana','type'  => 'text','title' => '会社名(カナ)'),
    array('name' => @$section_view_config_key.'_name-eng','type'  => 'text','title' => '会社名(英語)'),
    array('name' => @$section_view_config_key.'_address','type'  => 'text','title' => '所在地','value' => $this_address),
    array('name' => @$section_view_config_key.'_president-name','type'  => 'text','title' => '代表者名'),
    array('name' => @$section_view_config_key.'_officer','type'  => 'textarea','title' => '役員'),
    array('name' => @$section_view_config_key.'_businesscontent','type'  => 'textarea','title' => '事業内容'),
    array('name' => @$section_view_config_key.'_license','type'  => 'textarea','title' => '許可・認可'),
    array('name' => @$section_view_config_key.'_bank','type'  => 'textarea','title' => '取引銀行'),
    array('name' => @$section_view_config_key.'_customer','type'  => 'textarea','title' => '主要取引先'),
);
if(is_array(@$array_info1)){
    foreach ($array_info1 as $info_value) {
        if(!empty(@$info_value['value'])){
            $children_content[] = html_pileup_content(array(
                'type' => 'table-tr-2column','title' => @$info_value['title'],'text' => @$info_value['value']
            ));
        }
        else{
            $children_content[] = html_pileup_content(array(
                'type' => 'table-tr-2column','title' => @$info_value['title'],'text' => @$config_page[@$info_value['name']]
            ));
        }
    }
}

if(is_array(@$config_page[$section_view_config_key.'_other_table'])){
    foreach ($config_page[$section_view_config_key.'_other_table'] as $sec_content) {
        $children_content[] = html_pileup_content(array(
            'type' => 'table-tr-2column','title' => @$sec_content[$section_view_config_key.'_other_table_title'],'text' => @$sec_content[$section_view_config_key.'_other_table_text'],
        ));
    }
}

// Wrap
$pileup_html = null;
$pileup_html = array(
    array(
        'elem' => 'section','class' => array('section',@$config_page[$section_view_config_key.'_class']),'style' => array('background-color' => @$config_page[$section_view_config_key.'_bgc'],'color' => @$config_page[$section_view_config_key.'_color'],'background-image' => @$config_page[$section_view_config_key.'_bgi']['url']),
        'content' => array(
            array('elem' => 'div','class' => array('titleset'),'content' => array(
                    html_pileup_content(array(
                        'type' => 'titleset',
                        'title' => @$config_page[$section_view_config_key.'_main_title'],
                        'subtitle' => @$config_page[$section_view_config_key.'_sub_title'],
                        'description' => @$config_page[$section_view_config_key.'_description'],
                        'readmore' => @$config_page[$section_view_config_key.'_readmore'],
                    )),
                )
            ),
            array('elem' => 'div','class' => array('container-s'),'content' => array(
                    array('elem' => 'div','class' => array(@$config_page[$section_view_config_key.'_inner_classset'],@$config_page[$section_view_config_key.'_inner_class']),'content' => array(
                            array('elem' => 'table','class' => array('table-list'),'content' => $children_content
                        )
                    )
                )),
            )
        )
    ),
);
echo html_pileup($pileup_html);