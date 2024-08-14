<?php
if($section_value['type'] == 'cta'){
    $section_view_config_key = substr($section_view_config_key, 0, -1);
}
$pileup_html = null;
$pileup_html = array(
    array(
        'elem' => 'section','class' => array('section cta',@$section_view_config_key,@$config_page[$section_view_config_key.'_class']),'style' => array('background-image' => @$config_page[$section_view_config_key.'_bgi']['url'],'background-color' => @$config_page[$section_view_config_key.'_bgc']),'content' => array(
            array(
                'elem' => 'div','class' => array('container-s text-center'),'content' => array(
                    array(
                        'elem' => 'h2','class' => 'ffs-xl fflineh-xs text-center fmb-s',
                        'content' => @$config_page[$section_view_config_key.'_title_main'],
                        'br' => true
                    ),
                    array(
                        'elem' => 'a','class' => 'ffs-xxl fflineh-xs text-center fmb-m fw-bold cta-tel','href' => @$config_page[$section_view_config_key.'_tel'],
                        'content' => @$config_page[$section_view_config_key.'_tel'],'before' => '<span class="ffs-l fw-bold cta-tel-small">TEL</span>',
                    ),
                    array(
                        'elem' => 'p','class' => 'ffs-m text-center fmb-s fmb-m',
                        'content' => @$config_page[$section_view_config_key.'_description'],
                        'br' => true
                    ),
                    array(
                        'elem' => 'div','class' => array('btn-group'),'content' => array(
                            array(
                                'elem' => 'a','class' => 'btn btn-l btn-action','href' => @$config_page[$section_view_config_key.'_button1']['url'],
                                'content' => @$config_page[$section_view_config_key.'_button1']['text']
                            ),
                            array(
                                'elem' => 'a','class' => 'btn btn-l btn-outline-action-opposite fml-s','href' => @$config_page[$section_view_config_key.'_button2']['url'],
                                'content' => @$config_page[$section_view_config_key.'_button2']['text']
                            ),
                        ),
                    ),
                )
            )
        )
    ),
);
echo html_pileup($pileup_html);