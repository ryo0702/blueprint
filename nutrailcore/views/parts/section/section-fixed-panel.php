<?php
$pileup_html = null;

$add_class = null;
if(!empty(@$config_page[$section_view_config_key.'_view'])){
    $add_class = ' fixed-panel-view';
}

$pileup_html = array(
    array('elem' => 'div','class' => array('fixed-panel'.$add_class),'content' => array(
        array('elem' => 'div','class' => array('close'),'content' => '<div></div><div></div>'),
        html_pileup_content(array('type' => 'thumbnail-div','image' => @$config_page[$section_view_config_key.'_img'])),
        array('elem' => 'div','class' => array('area-text'),'content' => array(
            array('elem' => 'h2','class' => 'ffs-m fw-bold fflineh-xs text-center fmb-s fmt-s',
                'content' => @$config_page[$section_view_config_key.'_title'],
                'br' => true
            ),
            array(
                'elem' => 'p','class' => 'ffs-m fflineh-xs text-center fmb-s',
                'content' => @$config_page[$section_view_config_key.'_text'],
                'br' => true
            ),
            array(
                'elem' => 'a','class' => 'btn btn-l btn-action fmt-m','href' => @$config_page[$section_view_config_key.'_btn']['url'],
                'content' => @$config_page[$section_view_config_key.'_btn']['text']
            ),
        ))
    ))
);
echo html_pileup($pileup_html);