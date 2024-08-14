<?php
$children_content = $loop_layout = null;

// Group Content
if(is_array(@$config_page[$section_view_config_key.'_content_list'])){
    foreach ($config_page[$section_view_config_key.'_content_list'] as $sec_content) {
        $children_content[] = html_pileup_content(array(
            'type' => 'faq-content',
            'q_title' => @$sec_content[$section_view_config_key.'_content_q_title'],
            'a_title' => @$sec_content[$section_view_config_key.'_content_a_title'],
            'a_text' => @$sec_content[$section_view_config_key.'_content_a_text'],
        ));
    }
}

// Wrap
$pileup_html = null;
$pileup_html = array(
    array(
        'elem' => 'section','class' => array('section section-faq',@$config_page[$section_view_config_key.'_class']),'style' => array('background-color' => @$config_page[$section_view_config_key.'_bgc'],'color' => @$config_page[$section_view_config_key.'_color'],'background-image' => @$config_page[$section_view_config_key.'_bgi']['url']),
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
                        array(
                            'elem' => 'ul','class' => array('list'),
                            'content' => $children_content,
                        )
                    ))
                )
            )
        )
    ),
);
echo html_pileup($pileup_html);