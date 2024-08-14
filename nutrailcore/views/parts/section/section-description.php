<?php
$pileup_html = null;
$pileup_html = array(
    array('elem' => 'section','class' => array('section',@$config_page[$section_view_config_key.'_class']),'style' => array('background-color' => @$config_page[$section_view_config_key.'_bgc'],'color' => @$config_page[$section_view_config_key.'_color'],'background-image' => @$config_page[$section_view_config_key.'_bgi']['url']),
        'content' => array(
            array(
                'elem' => 'div','class' => array('titleset container-xs'),'content' => array(
                    array('elem' => 'div','class' => array(@$config_page[$section_view_config_key.'_inner_classset'],@$config_page[$section_view_config_key.'_inner_class']),'content' => array(
                        array('elem' => 'h2','class' => 'section-description-title-main ffs-xl text-center fmb-s',
                            'content' => nl2br(@$config_page[$section_view_config_key.'_description_title_main']),
                            'br' => true
                        ),
                        array('elem' => 'p','class' => 'section-description-text text-center fmb-m',
                            'content' => nl2br(@$config_page[$section_view_config_key.'_description_title_sub']),
                            'br' => true
                        ),
                        array('elem' => 'div','class' => array('item-image','fmb-s'),'content' => array(
                                html_pileup_content(array('type' => 'thumbnail-div','image' => @$config_page[$section_view_config_key.'_description_image'])),
                                array(
                                    'elem' => 'p','class' => 'section-description-caption text-center ffs-xs fmt-s',
                                    'content' => @$config_page[$section_view_config_key.'_description_caption'],
                                    'br' => true
                                ),
                            ),
                        ),
                        array(
                            'elem' => 'p','class' => 'section-description-text fmb-s ffs-m',
                            'content' => @$config_page[$section_view_config_key.'_description_text'],
                            'br' => true
                        ),
                    ))
                )
            )
        )
    ),
);
echo html_pileup($pileup_html);