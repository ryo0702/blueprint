<?php
nutrail_page_meta('config-staff');

include NUTRAIL_CORE_PATH.'views/parts/header/header-basic.php';

// Page title
if (file_exists(get_theme_file_path('views/parts/page-title.php'))) {
    include locate_template('views/parts/page-title.php');
}

$content = nutrail_get_meta('staff_content');
$class   = nutrail_get_meta('staff_class');
$attr    = [
    'class' => 'section_staff pt-50'
];
if (!empty($class)) {
    $attr['class'] .= ' '.$class;
}
?>
    <section <?php echo nutrail_attr($attr) ?>>
        <div class="container">
            <?php if (!empty($content)): ?>
                <div class="row cols-md-2 cols-lg-3 gx-8 gy-12 staff-grid">
                    <?php foreach ($content as $item):
                        $link = !empty($item['staff_content_link']['url']) ? $item['staff_content_link']['url'] : home_url();
                        ?>
                        <div class="col staff-item text-center">
                            <?php if (!empty($item['staff_content_image']['url'])): ?>
                                <a href="<?php echo esc_url($link) ?>" class="d-block ratio ratio-3x4 mb-10">
                                    <?php echo get_media($item['staff_content_image']) ?>
                                </a>
                            <?php endif; ?>
                            <?php if (!empty($item['staff_content_title'])): ?>
                                <h3 class="title fs-5 fs-md-4">
                                    <a href="<?php echo esc_url($link) ?>">
                                        <?php echo esc_html($item['staff_content_title']) ?>
                                    </a>
                                </h3>
                            <?php endif; ?>
                            <?php if (!empty($item['staff_content_post'])): ?>
                                <p class="lead">
                                    <?php echo esc_html($item['staff_content_post']) ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php

// Home button
if (file_exists(get_theme_file_path('views/parts/back-home.php'))) {
    include locate_template('views/parts/back-home.php');
}

include NUTRAIL_CORE_PATH.'views/parts/footer/footer-basic.php';