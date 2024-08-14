<?php
$children_content = $loop_layout = null;

$contents_mv = null;
if(is_front_page()){}
else{
    $contents_mv = array('elem' => 'div','class' => array('btn-group fmt-m'),'content' => array(
        array('elem' => 'a','class' => array('btn btn-action btn-xl'),'content' => @$config_page[$section_view_config_key.'_button1']['text'],'href' => @$config_page[$section_view_config_key.'_button1']['url']),
        array('elem' => 'a','class' => array('btn btn-action btn-xl btn-outline-action-opposite fml-s-sp0'),'content' => @$config_page[$section_view_config_key.'_button2']['text'],'href' => @$config_page[$section_view_config_key.'_button2']['url'])
    ));
}



// Wrap
$pileup_html = null;
$pileup_html = array(
    array(
        'elem' => 'div','class' => array('mainvisual same-height',@$config_page[$section_view_config_key.'_class']),'content' => array(
            array('elem' => 'div','class' => array('container-s mainvisual-content'),'content' => array(
                array('elem' => 'div','class' => array('mainvisual-content-inner',@$config_page[$section_view_config_key.'_card'],@$config_page[$section_view_config_key.'_layout']),'content' => array(
                    array('elem' => 'p','class' => array('title-sub'),'content' => @$config_page[$section_view_config_key.'_sub_title'],'br' => true),
                    array('elem' => 'h1','class' => array('title-main'),'content' => @$config_page[$section_view_config_key.'_main_title'],'br' => true),
                    array('elem' => 'p','class' => array('lead'),'content' => @$config_page[$section_view_config_key.'_lead'],'br' => true),
                    array('elem' => 'p','class' => array('text'),'content' => @$config_page[$section_view_config_key.'_text'],'br' => true),
                    $contents_mv,
                    array('elem' => 'div','class' => array('mainvisual-badges d-flex'),'content' => array(
                        array('elem' => 'div','class' => array('mainvisual-badge-gold1 d-flex align-items-center justify-content-center'),'content' => array(
                            array('elem' => 'p','content' => @$config_page[$section_view_config_key.'_badge1'],'br' => true),
                        )),
                        array('elem' => 'div','class' => array('mainvisual-badge-gold2 d-flex align-items-center justify-content-center'),'content' => array(
                            array('elem' => 'p','content' => @$config_page[$section_view_config_key.'_badge2'],'br' => true),
                        )),
                    )),
                )),
            )),
            array('elem' => 'bgi-div','class' => array('mainvisual-bgi same-height-set'),'style' => array('background-image' => @$config_page[$section_view_config_key.'_bgi']['url'])),
            array('elem' => 'bgi-div','class' => array('mainvisual-overlay-black same-height-set')),
        )
    ),
);
echo html_pileup($pileup_html);