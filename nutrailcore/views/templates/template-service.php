<?php
nutrail_page_meta('config-service');

include NUTRAIL_CORE_PATH.'views/parts/header/header-basic.php';

// Page title
if (file_exists(get_theme_file_path('views/parts/page-title.php'))) {
    include locate_template('views/parts/page-title.php');
}

$content = nutrail_get_meta('service_content');
?>
    <section class="section_space section_service">
        <div class="container">

            <?php get_template_part('views/parts/section', 'title', [
                'title' => nutrail_get_meta('service_title'),
                'lead'  => nutrail_get_meta('service_text'),
            ]); ?>

            <?php if (!empty($content)): ?>

                <div class="mb-50"></div>

                <div class="service-list d-flex flex-column flex-row-gap-6">
                    <?php foreach ($content as $item):
                        ?>
                        <div class="service-item row gx-0">
                            <?php if (!empty($item['service_content_image']['url'])): ?>
                                <?php
                                if(!empty($item['service_content_link']['url'])){
                                    echo '<a class="col-md-5 thumbnail mb-20 mb-md-0" href="'.$item['service_content_link']['url'].'">'.get_media($item['service_content_image']).'</a>';
                                }
                                else{
                                    echo '<div class="col-md-5 thumbnail mb-20 mb-md-0">'.get_media($item['service_content_image']).'</div>';
                                }
                                ?>
                            <?php endif; ?>
                            <div class="col-md-7">
                                <div class="content pl-md-35 h-100 d-flex flex-column align-items-start">
                                    <?php if (!empty($item['service_content_title'])): ?>
                                        <h3 class="title text-line-2 fs-5 fs-md-3 mb-20">
                                            <?php
                                            if(!empty($item['service_content_link']['url'])){
                                                echo '<a href="'.esc_url($item['service_content_link']['url']).'">
                                                '.$item['service_content_title'].'
                                                </a>';
                                            }
                                            else{
                                                echo '<div>
                                                '.$item['service_content_title'].'
                                                </div>';
                                            }
                                            ?>
                                            
                                        </h3>
                                    <?php endif; ?>
                                    <?php if (!empty($item['service_content_text'])): ?>
                                        <p class="lead lh-lg mb-35 pb-20">
                                            <?php echo nl2br($item['service_content_text']) ?>
                                        </p>
                                    <?php endif; ?>
                                    <?php if (!empty($item['service_content_price'])): ?>
                                        <div class="price mt-auto mb-20 w-100">
                                            <div class="regular d-flex justify-content-end align-items-baseline">
                                                <p class="fw-bold mr-30"><?php echo @$item['service_content_name']; ?></p>
                                                <p class="amount">
                                                    <span class="number fs-3 fw-bold"><?php echo nutrail_price_format($item['service_content_price']) ?></span>
                                                    <span class="unit fw-bold ml-5">円</span>
                                                </p>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
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
