<?php
function add_class($array = null)
{
    $return = null;
    if (!empty($array) and is_array($array)) {
        foreach ($array as $val) {
            if (!empty($val) and !is_array($val)) {
                $return .= @$val.' ';
            }
        }
        $return = rtrim($return);
    } elseif (!empty($array)) {
        $return = $array;
    }

    if (!empty($return)) {
        $return = ' class="'.$return.'"';
    }

    return $return;
}

function add_style($array = null, $value = false)
{
    $return = null;

    if (!empty($array) and is_array($array)) {
        foreach ($array as $key => $val) {
            if (empty($val)) {
                continue;
            }
            if ($key == 'background-image') {
                $return .= $key.':url(\''.esc_url($val).'\');';
            } else {
                $return .= $key.':'.$val.';';
            }
        }
    } elseif (!empty($array)) {
        $return = $array;
    }

    if (!empty($return)) {
        $return = $value ? $return : ' style="'.$return.'"';
    }

    return $return;
}

function add_style_bgset($array = null)
{
    $style_array = null;

    if (!empty($array) and is_array($array)) {
        if (!empty($array['background-color'])) {
            $style_array['background-color'] = $array['background-color'];
        }
        if (!empty($array['background-image']['url'])) {
            $style_array['background-image'] = 'url(\''.esc_url($array['background-image']['url']).'\')';
        }
        if (!empty($array['background-position'])) {
            $style_array['background-position'] = $array['background-position'];
        }
        if (!empty($array['background-repeat'])) {
            $style_array['background-repeat'] = $array['background-repeat'];
        }
        if (!empty($array['background-attachment'])) {
            $style_array['background-attachment'] = $array['background-attachment'];
        }
        if (!empty($array['background-size'])) {
            $style_array['background-size'] = $array['background-size'];
        }
    }

    return $style_array;
}

function add_address($pref = null, $city = null, $street = null, $build = null, $wrap_start = null, $wrap_end = null)
{
    $return = null;
    if (!empty($pref)) {
        $return .= $pref;
    }
    if (!empty($city)) {
        $return .= $city;
    }
    if (!empty($street)) {
        $return .= $street;
    }
    if (!empty($build)) {
        $return .= $build;
    }
    if (!empty($return) and !empty($wrap_start) and !empty($wrap_end)) {
        $return = $wrap_start.$return.$wrap_end;
    }

    return $return;
}

function get_media($media = null, $size = 'post-thumbnail', $attr = [])
{
    global $post;

    if ($media == 'post' && has_post_thumbnail($post)) {
        return get_the_post_thumbnail($post, $size, $attr);
    }

    if (empty($media['url'])) {
        $media = [
            'url'    => get_theme_file_uri('dist/images/nophoto.png'),
            'width'  => 631,
            'height' => 407,
            'alt'    => 'Placeholder',
        ];
    }

    $lazyload     = nutrail_get_option('lazyload');
    $media        = wp_parse_args($attr, $media);
    $media['src'] = $media['url'];

    if ($lazyload) {
        $media['src']      = 'data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==';
        $media['data-src'] = $media['url'];
        if (!isset($media['class'])) {
            $media['class'] = 'lazyload';
        } else {
            $media['class'] .= ' lazyload';
        }
    } else {
        $media['loading'] = 'lazy';
    }

    unset($media['id']);
    unset($media['url']);
    unset($media['thumbnail']);
    unset($media['description']);

    $attr = array_map('esc_attr', $media);
    $html = rtrim("<img");

    foreach ($attr as $name => $value) {
        $html .= " $name=".'"'.$value.'"';
    }
    $html .= ' />';

    return $html;
}

function nutrail_attr($attr = array(), $args = array())
{
    $output = '';

    // Cycle through attributes, build tag attribute string.
    foreach ($attr as $key => $value) {
        if (!$value) {
            continue;
        }
        if (true === $value) {
            $output .= esc_html($key).' ';
        } else {
            $output .= sprintf('%s="%s" ', esc_html($key), esc_attr($value));
        }
    }

    $output = apply_filters("nutrail_attr_output", $output, $attr, $args);

    return trim($output);
}

function nutrail_background_attr($class, $media, $attr = [])
{
    $lazyload = nutrail_get_option('lazyload');
    $attr     = wp_parse_args($attr, [
        'class' => $class,
        'style' => null,
    ]);

    if (!empty($media['url'])) {
        $attr['style'] = wp_parse_args($attr['style'], [
            'background-image'    => 'url('.esc_url($media['url']).')',
            'background-size'     => 'cover',
            'background-position' => 'center center',
        ]);
        if (strpos($attr['class'], 'parallax-window') !== false) {
            if (!nutrail_is_amp()) {
                unset($attr['style']['background-image']);
                unset($attr['style']['background-size']);

                $attr['data-image-src']      = esc_url($media['url']);
                $attr['data-parallax']       = 'scroll';
                $attr['data-position']       = $attr['style']['background-position'];
                $attr['style']['background'] = 'transparent';
            }
        } elseif ($lazyload) {
            unset($attr['style']['background-image']);

            $attr['class']   .= ' lazyload';
            $attr['data-bg'] = esc_url($media['url']);
        }
    }

    $attr['style'] = add_style($attr['style'], true);

    return nutrail_attr($attr);
}

function nutrail_section_attr($key, $attr = [], $options = false)
{
    $lazyload = nutrail_get_option('lazyload');
    $attr     = wp_parse_args($attr, [
        'class' => null,
        'style' => null,
    ]);

    $bgi_url = $options ? nutrail_get_option($key.'_bgi.url') : nutrail_get_meta($key.'_bgi.url');
    $color   = $options ? nutrail_get_option($key.'_color') : nutrail_get_meta($key.'_color');
    $bgc     = $options ? nutrail_get_option($key.'_bgc') : nutrail_get_meta($key.'_bgc');
    $class   = $options ? nutrail_get_option($key.'_class') : nutrail_get_meta($key.'_class');

    if (!empty($bgi_url)) {
        $attr['style'] = wp_parse_args($attr['style'], [
            'background-image'    => esc_url($bgi_url),
            'background-size'     => 'cover',
            'background-position' => 'center center',
        ]);
        if ($lazyload) {
            unset($attr['style']['background-image']);
            $attr['class']   .= ' lazyload';
            $attr['data-bg'] = esc_url($bgi_url);
        }
    }
    if (!empty($bgc)) {
        $attr['style']['background-color'] = $bgc;
        $attr['style']['--section-bgc']    = $bgc;
    }
    if (!empty($color)) {
        $attr['style']['color']           = $color;
        $attr['style']['--section-color'] = $color;
    }
    if (!empty($class)) {
        $attr['class'] .= ' '.$class;
    }

    $attr['style'] = add_style($attr['style'], true);

    return nutrail_attr($attr);
}

function html_pileup($array = null)
{
    $return   = null;
    $lazyload = nutrail_get_option('lazyload');

    if (is_array(@$array)) {
        foreach (@$array as $child_elem) {
            $elem = $content = $href = $src = $atta = null;

            // Lazyload
            if ($lazyload && !empty($child_elem['style']['background-image'])) {
                $atta .= 'data-bg='.$child_elem['style']['background-image'];
                if (!empty($child_elem['class']) && is_array($child_elem['class'])) {
                    $child_elem['class'][] = 'lazyload';
                } else {
                    $child_elem['class'] = ['lazyload'];
                }
                unset($child_elem['style']['background-image']);
            }

            // Elem
            if (empty($child_elem['elem'])) {
                $elem = 'div';
                if (!empty($child_elem['href']) && $elem !== 'a') {
                    $elem                           = 'a';
                    $href                           = ' href="'.esc_url($child_elem['href']).'"';
                    $child_elem['style']['display'] = 'block';
                }
            } elseif ($child_elem['elem'] == 'youtube') {
                $elem = 'iframe';
                $src  = ' src="https://www.youtube-nocookie.com/embed/'.@$child_elem['src'].'"';
            } elseif ($child_elem['elem'] == 'thumbnail-div') {
                $elem = 'div';
                if (!empty(@$child_elem['href']) && $elem !== 'a') {
                    $elem = 'a';
                    $href = ' href="'.esc_url($child_elem['href']).'"';
                    @$child_elem['style']['display'] = 'block';
                }
            } elseif ($child_elem['elem'] == 'bgi-div') {
                $elem = 'div';
            } else {
                $elem = $child_elem['elem'];
                if (!empty($child_elem['href']) && $elem !== 'a') {
                    $elem                           = 'a';
                    $href                           = ' href="'.esc_url($child_elem['href']).'"';
                    $child_elem['style']['display'] = 'block';
                }
                if (!empty($child_elem['href'])) {
                    $href = ' href="'.esc_url($child_elem['href']).'"';
                }
                if (!empty($child_elem['src']) && empty($src)) {
                    $src = ' src="'.esc_url($child_elem['src']).'"';
                }
            }

            // Children content
            if (is_array(@$child_elem['content'])) {
                $content = html_pileup(@$child_elem['content']);
            } elseif (!empty(@$child_elem['content'])) {
                if (@$child_elem['br'] == true) {
                    $content = nl2br(@$child_elem['content']);
                } else {
                    $content = @$child_elem['content'];
                }
            }

            // Before After
            $elem_before = null;
            if (!empty(@$child_elem['before'])) {
                $elem_before = @$child_elem['before'];
            }
            $elem_after = null;
            if (!empty(@$child_elem['after'])) {
                $elem_after = @$child_elem['after'];
            }
            $elem_before_inner = null;
            if (!empty(@$child_elem['before-inner'])) {
                $elem_before_inner = @$child_elem['before-inner'];
            }
            $elem_after_inner = null;
            if (!empty(@$child_elem['after-inner'])) {
                $elem_after_inner = @$child_elem['after-inner'];
            }

            // Return Elem
            if (!empty($content)) {
                $return .= $elem_before.'<'.$elem.add_class(@$child_elem['class']).add_style(@$child_elem['style']).$href.$src.$atta.'>'.$elem_before_inner.$content.$elem_after_inner.'</'.$elem.'>'.$elem_after;
            } elseif (@$child_elem['elem'] == 'blank') {
                $return .= $elem_before.'<div'.add_class(@$child_elem['class']).add_style(@$child_elem['style']).$href.$src.$atta.'>'.$elem_before_inner.$elem_after_inner.'</div>'.$elem_after;
            } elseif (@$child_elem['elem'] == 'thumbnail-div' || @$child_elem['elem'] == 'bgi-div') {
                $return .= $elem_before.'<'.$elem.add_class(@$child_elem['class']).add_style(@$child_elem['style']).$href.$src.$atta.'>'.$elem_before_inner.$content.$elem_after_inner.'</'.$elem.'>'.$elem_after;
            } elseif(@$child_elem['elem'] == 'youtube'){
                if(!empty(@$child_elem['src'])){
                    $return .= $elem_before.'<'.$elem.add_class(@$child_elem['class']).add_style(@$child_elem['style']).$href.$src.$atta.'>'.$elem_before_inner.$content.$elem_after_inner.'</'.$elem.'>'.$elem_after;
                }
            }
        }
    }

    return $return;
}

function layout_column_cal($layouttype = null)
{
    if (@$layouttype == 'layout-2column' or @$layouttype == 2) {
        return 6;
    } elseif (@$layouttype == 'layout-3column' or @$layouttype == 3) {
        return 4;
    } elseif (@$layouttype == 'layout-4column' or @$layouttype == 4) {
        return 3;
    } elseif (empty(@$layouttype)) {
        return 4;
    } else {
        return false;
    }
}

function html_pileup_content($array = null)
{
    $return = null;

    if (is_array(@$array)) {
        if ($array['type'] == 'thumbnail-div' && is_array(@$array['image']) && !empty(@$array['image']['url'])) {
            $return = array(
                'elem'  => 'thumbnail-div',
                'class' => array('thumbnail'),
                'style' => array('background-image' => @$array['image']['url']),
            );
        } elseif ($array['type'] == 'table-tr-2column') {
            if (!empty(@$array['text'])) {
                $return = array(
                    'elem'    => 'tr',
                    'content' => array(
                        array('elem' => 'th', 'class' => '', 'content' => @$array['title']),
                        array('elem' => 'td', 'class' => '', 'content' => @$array['text'], 'br' => true),
                    ),
                );
            }
        } elseif ($array['type'] == 'title-text') {
            $return = array(
                'elem'    => 'div',
                'class'   => array('item-text'),
                'content' => array(
                    array(
                        'elem'    => 'h2',
                        'class'   => 'main-title fmb-xs ffs-m-plus',
                        'content' => @$array['title'],
                        'br'      => true
                    ),
                    array(
                        'elem'    => 'p',
                        'class'   => 'content-text fmb-xs ffs-m',
                        'content' => @$array['text'],
                        'br'      => true
                    ),
                ),
            );
        } elseif ($array['type'] == 'titleset') {
            $return = array(
                'elem'    => 'div',
                'class'   => array('container-xs text-center', 'fmb-m'),
                'content' => array(
                    array(
                        'elem'    => 'h2',
                        'class'   => 'ffs-xl',
                        'content' => nl2br(@$array['title']),
                    ),
                    array(
                        'elem'    => 'h3',
                        'class'   => 'ffs-m fmt-s',
                        'content' => nl2br(@$array['subtitle']),
                    ),
                    array(
                        'elem'    => 'p',
                        'class'   => 'ffs-m fmt-m',
                        'content' => nl2br(@$array['description']),
                    ),
                    array(
                        'elem'    => 'a',
                        'class'   => 'btn btn-m btn-outline-main ffs-m fmt-m',
                        'href'    => @$array['readmore']['url'],
                        'content' => @$array['readmore']['text'],
                    )
                )
            );
        } elseif ($array['type'] == 'layout-1column' or $array['type'] == 'layout-2column' or $array['type'] == 'layout-3column' or $array['type'] == 'layout-4column') {
            $column = null;
            $column = layout_column_cal(@$array['type']);
            $return = array(
                'elem'    => 'div',
                'class'   => array('item col-md-'.$column),
                'content' => array(
                    array(
                        'elem'    => 'div',
                        'class'   => array('item-image', 'fmb-s', 'fw-bold'),
                        'content' => array(
                            html_pileup_content(array(
                                'type'  => 'thumbnail-div',
                                'image' => @$array['image']
                            ))
                        ),
                    ),
                    array(
                        'elem'    => 'div',
                        'class'   => array('item-text'),
                        'content' => array(
                            html_pileup_content(array(
                                'type'  => 'title-text',
                                'title' => @$array['title'],
                                'text'  => @$array['text']
                            ))
                        )
                    ),
                ),
            );
        } elseif ($array['type'] == 'brunch') {
            $column = null;
            $column = layout_column_cal(@$array['layout']);
            $return = array(
                'elem'    => 'div',
                'class'   => array('item col-md-'.$column),
                'content' => array(
                    array(
                        'elem'    => 'div',
                        'class'   => array('item-image', 'fmb-s'),
                        'href'    => @$array['link']['url'],
                        'content' => array(
                            html_pileup_content(array(
                                'type'  => 'thumbnail-div',
                                'image' => @$array['image']
                            ))
                        ),
                    ),
                    array(
                        'elem'    => 'div',
                        'content' => array(
                            array(
                                'elem'    => 'h3',
                                'class'   => 'fmb-xs ffs-l fw-bold',
                                'content' => @$array['title'],
                                'href'    => @$array['link']['url'],
                                'br'      => true
                            ),
                            array(
                                'elem'         => 'p',
                                'class'        => 'fmb-xs ffs-m',
                                'content'      => @$array['tel'],
                                'before-inner' => 'TEL.',
                            ),
                            array(
                                'elem'    => 'p',
                                'class'   => 'fmb-xs ffs-m',
                                'content' => @$array['address'],
                                'br'      => true
                            ),
                        ),
                    ),
                ),
            );
        } elseif ($array['type'] == 'list-content') {
            $return = array(
                'elem'    => 'li',
                'class'   => array('item'),
                'content' => array(
                    array('elem' => 'h3', 'class' => array('item-text ffs-l'), 'content' => @$array['title']),
                    array('elem' => 'p', 'class' => array('item-text ffs-m'), 'content' => @$array['text']),
                ),
            );
        } elseif ($array['type'] == 'faq-content') {
            $return = array(
                'elem'    => 'li',
                'class'   => array('item'),
                'content' => array(
                    array(
                        'elem'         => 'h3',
                        'class'        => array('faq-item-q ffs-l fw-bold'),
                        'content'      => @$array['q_title'],
                        'before-inner' => 'Q.'
                    ),
                    array(
                        'elem'         => 'h3',
                        'class'        => array('faq-item-a ffs-l fw-bold'),
                        'content'      => @$array['a_title'],
                        'before-inner' => 'A.'
                    ),
                    array('elem' => 'p', 'class' => array('faq-item-a-text ffs-m'), 'content' => @$array['a_text']),
                ),
            );
        }
    }

    return $return;
}