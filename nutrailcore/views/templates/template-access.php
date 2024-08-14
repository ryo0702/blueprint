<?php
nutrail_page_meta('config-access');

include NUTRAIL_CORE_PATH.'views/parts/header/header-basic.php';

// Page title
if (file_exists(get_theme_file_path('views/parts/page-title.php'))) {
    include locate_template('views/parts/page-title.php');
}

$map            = nutrail_get_meta('access_map');
$tel            = nutrail_get_meta('access_tel');
$business_hours = nutrail_get_meta('access_business_hours');
$postalcode     = nutrail_get_meta('access_postalcode');
$address        = nutrail_get_meta('access_address');
$class          = nutrail_get_meta('access_class');
$navbar_logo    = nutrail_get_option('navbar_logo');
$link_embed     = add_query_arg(
    [
        'q'       => $map['latitude'].','.$map['longitude'],
        'hl'      => 'ja',
        'z'       => $map['zoom'],
        'output'  => 'embed',
        'maptype' => 'satellite',
    ],
    'https://maps.google.com/maps'
);
$attr           = [
    'class' => 'section_map'
];
if (!empty($class)) {
    $attr['class'] .= ' '.$class;
}
?>
    <section <?php echo nutrail_attr($attr) ?>>
        <div class="container_s">
            <div class="map-data">
                <iframe class="google-map w-100"
                        frameborder="0"
                        scrolling="no"
                        marginheight="0"
                        marginwidth="0"
                        loading="lazy"
                        src="<?php echo esc_url($link_embed) ?>"
                >
                </iframe>
                <div class="content p-15 p-md-30">
                    <div class="logo align-self-center align-self-md-start">
                        <?php echo wp_kses_post($navbar_logo); ?>
                    </div>
                    <div class="contact">
                        <div class="tel mb-20">
                            <?php if (!empty($tel)): ?>
                                <p class="phone">
                                    <span class="fw-bold"><?php echo esc_html__('TEL', 'nutrail') ?></span>
                                    <span class="fw-bold fs-2"><?php echo esc_html($tel) ?></span>
                                </p>
                            <?php endif; ?>
                            <?php if (!empty($business_hours)): ?>
                                <p class="tel_description"><?php echo esc_html($business_hours) ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="address">
                            <?php if (!empty($postalcode)): ?>
                                <p><?php echo esc_html($postalcode) ?></p>
                            <?php endif; ?>
                            <?php if (!empty($address)): ?>
                                <p><?php echo esc_html($address) ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php

// Home button
if (file_exists(get_theme_file_path('views/parts/back-home.php'))) {
    include locate_template('views/parts/back-home.php');
}

include NUTRAIL_CORE_PATH.'views/parts/footer/footer-basic.php';