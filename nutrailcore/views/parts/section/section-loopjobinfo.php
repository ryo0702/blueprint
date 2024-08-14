
<?php
/**
 * Section job
 *
 * @var $config_page
 * @var $section_view_config_key
 */

 $args = array(
    'meta_key' => '_wp_page_template', 
    'meta_value' => 'templates/template-recruit-page.php', 
    'post_type' => 'page', 
    'orderby' => 'date'
 );
 $the_query = new WP_Query( $args );
 if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        $config_page_this_jobpage = $thisbgi = $children_content_inner = $children_content_address = null;
        $config_page_this_jobpage = get_post_meta(get_the_ID(),'config-recruit-page',true);
        if(!empty($config_page_this_jobpage) && is_array($config_page_this_jobpage)){
            if(!empty($config_page_this_jobpage['jobinfo_amount_money'])){
                if(!empty($config_page_this_jobpage['jobinfo_salary_payment_method'])){
                    $children_content_inner .= array_get_label(array_salary_payment_method(), @$config_page_this_jobpage['jobinfo_salary_payment_method']).' ';
                }
                // カンマ区切り
                $children_content_inner .= number_format(@$config_page_this_jobpage['jobinfo_amount_money']).'円';
                $children_content_inner = '<span>'.$children_content_inner.'</span>';
            }
            if (!empty(@$config_page_this_jobpage['jobinfo_pref'])) {
                $children_content_address .= @$config_page_this_jobpage['jobinfo_pref'];
            }
            if (!empty(@$config_page_this_jobpage['jobinfo_city'])) {
                $children_content_address .= @$config_page_this_jobpage['jobinfo_city'];
            }
            if(!empty($children_content_address)){
                $children_content_inner .= '<span class="ml-10px">'.$children_content_address.'</span>';
            }
            if(!empty($children_content_inner)){
                $children_content_inner = '<div class="mt-10px">'.$children_content_inner.'</div>';
            }
        }
        // wordpress if has thumbnail
        if (has_post_thumbnail()) {
            $thisbgi = get_the_post_thumbnail_url();
        } else {
            $thisbgi = get_template_directory_uri().'/assets/images/nophoto.png';
        }
        $children_content .= '<tr><td><div class="d-flex flex-row row justify-content-between loopjobinfo">
        <a href="'.get_the_permalink().'" class="thumbnails col-md-4 col-sm-12"><div class="thumbnail" style="background-image:url('.$thisbgi.');"></div></a>
        <div class="texts col-md-8 col-sm-12">
            <div><a href="'.get_the_permalink().'" style="display:block;" class="title"><h3>' . get_the_title() . '</h3></a></div>
            '.$children_content_inner.'
            <div class="mt-10px">
                <div>
                <a href="'.get_the_permalink().'" class="btn btn-action">詳細</a>
                <a href="'.get_the_permalink().'#contactform-wrap" class="btn btn-action" style="margin-left:3px;">ご応募</a>
                </div>
            </div>
        </div>
        </div></td></tr>';
    }
    wp_reset_postdata();
 }

// Wrap
$pileup_html = null;
$pileup_html = array(
    array(
        'elem'    => 'section',
        'class'   => array('section', @$config_page[$section_view_config_key.'_class']),
        'style'   => array(
            'background-color' => @$config_page[$section_view_config_key.'_bgc'],
            'color'            => @$config_page[$section_view_config_key.'_color'],
            'background-image' => @$config_page[$section_view_config_key.'_bgi']['url']
        ),
        'content' => array(
            array(
                'elem'    => 'div',
                'class'   => array('titleset'),
                'content' => array(
                    html_pileup_content(array(
                        'type'        => 'titleset',
                        'title'       => 'JOB INFO',
                        'subtitle'    => '求人情報一覧',
                        // 'description' => @$config_page[$section_view_config_key.'_description'],
                        // 'readmore'    => @$config_page[$section_view_config_key.'_readmore'],
                    )),
                )
            ),
            array(
                'elem'    => 'div',
                'class'   => array('container-s'),
                'content' => array(
                    array(
                        'elem'    => 'div',
                        'class'   => array(
                            @$config_page[$section_view_config_key.'_inner_classset'],
                            @$config_page[$section_view_config_key.'_inner_class']
                        ),
                        'content' => array(
                            array('elem' => 'table', 'class' => array('table-list'), 'content' => $children_content)
                        )
                    )
                )
            )
        )
    ),
);

echo html_pileup($pileup_html);

include_once NUTRAIL_CORE_PATH.'includes/schema/job.php';