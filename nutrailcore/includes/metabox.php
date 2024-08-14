<?php
function array_metabox_title_set($array = null)
{
    $return = null;

    if (is_array(@$array) && !empty($array['key'])) {
        if (@$array['main'] === true) {
            $return[] = array(
                'id'    => $array['key'].'_main_title',
                'type'  => 'textarea',
                'title' => 'メインタイトル'
            );
        }
        if (@$array['sub'] === true) {
            $return[] = array(
                'id'    => $array['key'].'_sub_title',
                'type'  => 'textarea',
                'title' => 'サブタイトル'
            );
        }
        if (@$array['description'] === true) {
            $return[] = array(
                'id'    => $array['key'].'_description',
                'type'  => 'textarea',
                'title' => '説明文'
            );
        }
        if (@$array['readmore'] === true) {
            $return[] = array(
                'id'    => $array['key'].'_readmore',
                'type'  => 'link',
                'title' => 'さらに読む'
            );
        }
    }
    return $return;
}

function create_array_metabox_section($array = null)
{
    $return_array = null;
    if (is_array(@$array) and !empty($array['type']) and file_exists(NUTRAIL_CORE_PATH.'includes/array/section/section-'.$array['type'].'.php')) {
        require NUTRAIL_CORE_PATH.'includes/array/section/section-'.$array['type'].'.php';
    }

    return $return_array;
}

function merge_array_metaboxs_page($array_contents = null, $array_toppage_config = null)
{
    $return_config = $return = null;

    if (is_array(@$array_toppage_config) && is_array(@$array_contents)) {
        foreach ($array_toppage_config as $this_array) {
            $arr_return_this = null;
            if ($this_array['type'] == 'original' && !empty($this_array['path'])) {
                $array = $this_array;
                if (file_exists(@$this_array['path'])) {
                    require $this_array['path'];
                }
                $return_config[] = $arr_return_this;
            } elseif ($this_array['type'] == 'config' && !empty($this_array['config'])) {
                require NUTRAIL_CORE_PATH.'includes/array/config/config-'.$this_array['config'].'.php';
                $return_config[] = $arr_return_this;
            } else {
                $arr_return_this = create_array_metabox_section($this_array);
                $return_config[] = $arr_return_this;
            }
        }
        if (is_array(@$return_config) && !empty($array_contents['key'])) {
            $thistemplate = $thisposttype = null;
            if (!empty($array_contents['posttype'])) {
                $thisposttype = $array_contents['posttype'];
            } else {
                $thisposttype = 'page';
            }
            $return = array(
                'id'        => 'config-'.@$array_contents['key'],
                'title'     => @$array_contents['title'],
                'post_type' => $thisposttype,
                'context'   => 'normal',
                'priority'  => 'high',
                'sections'  => $return_config
            );
            if ($thisposttype == 'page') {
                $return['page_templates'] = 'templates/template-'.@$array_contents['key'].'.php';
            }
        }
    }

    return $return;
}