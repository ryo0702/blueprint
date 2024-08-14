<?php
include NUTRAIL_CORE_PATH.'views/parts/header/header-basic.php';

if (have_posts()) {while (have_posts()) {
    the_post();

$this_post_meta = $thiskey = $sendmail = null;
$thiskey = 'config-contact';
$childkey = 'contact';
$this_post_meta = get_post_meta(get_the_ID(),$thiskey,true);

// Page title
if (file_exists(get_theme_file_path('views/parts/page-title.php'))) {
    include locate_template('views/parts/page-title.php');
}

$contact_action = add_query_arg(
    [
        'action' => 'nutrail_ajax_inquery',
        'nonce'  => wp_create_nonce('nutrail_nonce'),
    ],
    admin_url('admin-ajax.php')
);

$contact_list   = $this_post_meta[$childkey.'_list'];
$form_name      = $this_post_meta[$childkey.'_formname'];
$sendmail      = $this_post_meta[$childkey.'_sendmail'];
$btn_label      = $this_post_meta[$childkey.'_btn_label'];
$privacy_policy = $this_post_meta[$childkey.'_privacypolicy_checkbox_link'];
$redirect       = $this_post_meta[$childkey.'_redirect'];
$table_comapny  = null;
$disabled       = null;
$form_number    = 0;

if (!empty($contact_list)): ?>
    <div class="container_s pt-30">
        <div class="form box-shadow content_inner pt-50">
            <form id="contact-form" action="<?php echo esc_url($contact_action) ?>"
                  method="post" enctype="multipart/form-data">
                <?php
                if (!empty($form_name)) {
                    echo '<input type="hidden" name="formname" value="'.esc_attr($form_name).'">';
                }
                if (!empty($sendmail)) {
                    echo '<input type="hidden" name="sendmail" value="'.esc_attr($sendmail).'">';
                }
                if (!empty($redirect['url'])) {
                    echo '<input type="hidden" name="redirect_url" value="'.esc_url($redirect['url']).'">';
                }

                echo '<input type="hidden" name="formid" value="'.get_the_ID().'">';

                $json = null;
                $json = wp_json_encode($contact_list);
                echo '<input type="hidden" name="contact_list" value="'.esc_attr($json).'">';

                echo '<div class="row gy-0">';

                foreach ($contact_list as $key => $contact) {
                    echo nutrail_form_input($contact, $key);
                }

                echo '</div>';

                if (!empty($privacy_policy['url'])):
                    $disabled = 'disabled';
                    ?>
                    <div class="form-group agree">
                        <input type="checkbox" name="agree" id="agree-check" required>
                        <label class="form-check-label" for="agree-check">
                            <a href="<?php echo esc_url($privacy_policy['url']) ?>"
                               target="_blank"
                               class="text_underline">規約</a>に同意しますか？
                        </label>
                    </div>
                <?php endif; ?>

                <div class="form-group submit">
                    <?php
                    if (!empty($btn_label)) {
                        if (nutrail_is_amp()) {
                            $disabled = '';
                        }
                        echo '<button type="submit" class="btn btn-xl btn-action" '.esc_attr($disabled).'>'.esc_html($btn_label).'</button>';
                    }
                    if (nutrail_is_amp()) {
                        echo '<div class="form-message success" submit-success>送信成功しました</div>';
                        echo '<div class="form-message error" submit-error>送信失敗しました</div>';
                    } else {
                        echo '<p class="form-message"></p>';
                    }
                    ?>
                </div>
            </form>
        </div>
    </div>
<?php endif;

// Home button
if (file_exists(get_theme_file_path('views/parts/back-home.php'))) {
    include locate_template('views/parts/back-home.php');
}

}}
include NUTRAIL_CORE_PATH.'views/parts/footer/footer-basic.php';