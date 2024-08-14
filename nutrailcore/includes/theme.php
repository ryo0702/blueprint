<?php
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * @return void
 */
if (!function_exists('nutrail_theme_support')) {
    function nutrail_theme_support()
    {
        /**
         * Manage titles.
         */
        add_theme_support('title-tag');

        /**
         * Enable thumbnails.
         * It also sets the default thumbnail size.
         */
        add_theme_support('post-thumbnails');
        add_image_size( 'thumbnail', 300, 200, true );

        /**
         * Add page excerpt.
         */
        add_post_type_support('page', 'excerpt');

        /**
         * Support amp.
         */
        add_theme_support('amp', ['paired' => true]);

        /**
         * Support block.
         */
        add_theme_support('align-wide');
        add_theme_support('wp-block-styles');

        /**
         * Other config.
         */
        add_theme_support('responsive-embeds');
        add_theme_support('automatic-feed-links');
        add_theme_support('customize-selective-refresh-widgets');

        // Switch default core markup for search form, comment form, and comments.
        // to output valid HTML5.
        // Added a new value in HTML5 array 'navigation-widgets' as this was introduced in WP5.5 for better accessibility.
        add_theme_support('html5', [
            'navigation-widgets',
            'search-form',
            'gallery',
            'caption',
            'style',
            'script',
        ]);
    }

    add_action('after_setup_theme', 'nutrail_theme_support');
}

/**
 * dequeue scripts
 */
if (!function_exists('nutrail_dequeue_scripts')) {
    function nutrail_dequeue_scripts()
    {
        $has_block = false;
        $template  = get_page_template_slug();

        if (is_single() || is_page()) {
            $has_block = true;
        }
        if (is_page() && !empty($template)) {
            $has_block = false;
        }
        if (is_front_page()) {
            $has_block = false;
        }
        if (!$has_block) {
            wp_dequeue_style('wp-block-library');
            wp_dequeue_style('wp-block-library-theme');
            wp_dequeue_style('global-styles');
        }
    }

    add_action('wp_enqueue_scripts', 'nutrail_dequeue_scripts', 999);
}

/**
 * Filters list of page templates for a theme.
 *
 * @param string[] $post_templates Array of template header names keyed by the template file name.
 * @param WP_Theme $theme The theme object.
 * @param WP_Post|null $post The post being edited, provided for context, or null.
 * @param string $post_type Post type to get the templates for.
 *
 * @since 4.9.6
 *
 */
if (!function_exists('nutrail_get_page_templates')) {
    function nutrail_get_page_templates($post_templates, $theme, $post, $post_type)
    {
        $results = scandir(NUTRAIL_CORE_PATH.'views/templates');

        foreach ($results as $result) {
            if ('.' === $result[0]) {
                continue;
            }

            $name      = 'nutrailcore/'.$result;
            $full_path = NUTRAIL_CORE_PATH.'views/templates/'.$result;

            if (!preg_match('|Template Name:(.*)$|mi', file_get_contents($full_path), $header)) {
                continue;
            }

            $post_templates[$name] = $header[1];
        }

        return $post_templates;
    }

    add_filter('theme_page_templates', 'nutrail_get_page_templates', 10, 4);
}

/**
 * WP Header.
 */
if (!function_exists('nutrail_generator_tag')) {
    function nutrail_generator_tag($gen, $type)
    {
        $version = wp_get_theme()->get('Version');
        $version = 'Powered by ESSENCE - '.$version;

        switch ($type) {
            case 'html':
                $gen .= "<meta name='generator' content='".esc_attr($version)."'>\n";
                break;
            case 'xhtml':
                $gen .= "<meta name='generator' content='".esc_attr($version)."' />\n";
                break;
        }

        return $gen;
    }

    add_filter('get_the_generator_html', 'nutrail_generator_tag', 10, 2);
    add_filter('get_the_generator_xhtml', 'nutrail_generator_tag', 10, 2);
}

/**
 * Schema header.
 */
if (!function_exists('nutrail_print_schema_header')) {
    function nutrail_print_schema_header()
    {
        global $post;

        $GLOBALS['array_config_schema'] = [
            '@context' => 'https://schema.org',
            '@graph'   => []
        ];

        $description = !empty($post) && has_excerpt($post) ? get_the_excerpt($post) : get_bloginfo('description');
        $company     = include_once NUTRAIL_CORE_PATH.'includes/schema/company.php';
        // $post        = include_once NUTRAIL_CORE_PATH.'includes/schema/post.php';
        $schema      = [
            '@context' => 'https://schema.org',
            '@graph'   => [
                [
                    '@type'           => 'WebSite',
                    'url'             => home_url('/'),
                    'potentialAction' => [
                        '@type'       => 'SearchAction',
                        'target'      => [
                            '@type'       => 'EntryPoint',
                            'urlTemplate' => home_url('?s={search_term_string}'),
                        ],
                        'query-input' => 'required name=search_term_string',
                    ],
                ],
            ]
        ];

        if (!empty($company)) {
            $schema['@graph'][] = $company;
        }
        if (!empty($post)) {
            $schema['@graph'][] = $post;
        }

        if (file_exists(NUTRAIL_THEME_DIR.'inc/nutrail_schema.php')) {
            require_once NUTRAIL_THEME_DIR.'inc/nutrail_schema.php';
        }

        nutrail_print_schema($schema);

        // Google Verification
        if (!empty(nutrail_get_option('editor_gs_id'))) {
            echo "<meta name='google-site-verification' content='".nutrail_get_option('editor_gs_id')."' />\n";
        }

        // Google Analytic
        if (!empty(nutrail_get_option('editor_ua_id'))) {
            ?>
            <!-- Google Analytics -->
            <script>
                (function (i, s, o, g, r, a, m) {
                    i['GoogleAnalyticsObject'] = r;
                    i[r] = i[r] || function () {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
                    a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                    a.async = 1;
                    a.src   = g;
                    m.parentNode.insertBefore(a, m)
                })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

                ga('create', '<?php echo nutrail_get_option('editor_ua_id') ?>', 'auto');
                ga('send', 'pageview');
            </script>
            <!-- End Google Analytics -->
            <?php
        }

        // Code editor
        echo nutrail_get_option('editor_header');

        // Site description
        if (current_theme_supports('title-tag')) {
            echo "<meta name='description' content='".esc_attr(@$description)."' />\n";
        }
    }

    add_action('wp_head', 'nutrail_print_schema_header', 0);
}

/**
 * Schema footer.
 */
if (!function_exists('nutrail_print_schema_footer')) {
    function nutrail_print_schema_footer()
    {
        if (!empty($GLOBALS['array_config_schema']['@graph'])) {
            nutrail_print_schema();
        }
        echo nutrail_get_option('editor_footer');
    }

    add_action('wp_footer', 'nutrail_print_schema_footer');
}