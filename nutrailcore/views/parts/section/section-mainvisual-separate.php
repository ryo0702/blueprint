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
        'elem' => 'div','class' => array('mainvisual mainvisual-separate same-height',@$config_page[$section_view_config_key.'_class']),'content' => array(
            array('elem' => 'div','class' => array('mainvisual-image'),'content' => ' ','style' => array('background-image' => @$config_page[$section_view_config_key.'_bgi']['url'])),
            array('elem' => 'div','class' => array('mainvisual-content'),'content' => array(
                array('elem' => 'div','class' => array('mainvisual-content-inner',),'content' => array(
                    array('elem' => 'p','class' => array('title-sub'),'content' => @$config_page[$section_view_config_key.'_sub_title'],'br' => true),
                    array('elem' => 'h1','class' => array('title-main'),'content' => @$config_page[$section_view_config_key.'_main_title'],'br' => true),
                    array('elem' => 'p','class' => array('lead'),'content' => @$config_page[$section_view_config_key.'_lead'],'br' => true),
                    array('elem' => 'p','class' => array('text'),'content' => @$config_page[$section_view_config_key.'_text'],'br' => true),
                    $contents_mv,
                )),
            )),
        )
    ),
);
echo html_pileup($pileup_html);