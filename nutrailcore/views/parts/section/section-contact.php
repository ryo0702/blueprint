<?php
echo '<section class="section" id="contactform-wrap">';

// Wrap
$pileup_html = $sendmail = null;
$pileup_html = array(
    array(
        'elem'    => 'div',
        'class'   => array('titleset'),
        'content' => array(
            html_pileup_content(array(
                'type'        => 'titleset',
                'title'       => @$config_page[$section_view_config_key.'_main_title'],
                'subtitle'    => @$config_page[$section_view_config_key.'_sub_title'],
                'description' => @$config_page[$section_view_config_key.'_description'],
                'readmore'    => @$config_page[$section_view_config_key.'_readmore'],
            )),
        )
    ),
);
echo html_pileup($pileup_html);

$contact_action = add_query_arg(
    [
        'action' => 'nutrail_ajax_inquery',
        'nonce'  => wp_create_nonce('nutrail_nonce'),
    ],
    admin_url('admin-ajax.php')
);
$contact_list   = @$config_page[$section_view_config_key.'_list'];
$form_name      = @$config_page[$section_view_config_key.'_formname'];
$sendmail      = @$config_page[$section_view_config_key.'_sendmail'];
$btn_label      = @$config_page[$section_view_config_key.'_btn_label'];
$privacy_policy = @$config_page[$section_view_config_key.'_privacypolicy_checkbox_link'];
$redirect       = @$config_page[$section_view_config_key.'_redirect'];
$table_comapny  = null;
$disabled       = null;
$form_number    = 0;

// Contact
if (!empty($contact_list)): ?>
    <div class="container_xs pt-30" id="contactform">
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
                               class="text_underline" style="text-decoration:underline;">規約</a>に同意しますか？
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
                        echo '<div class="form-message success" submit-success>送信が成功しました</div>';
                        echo '<div class="form-message error" submit-error>送信に失敗しました</div>';
                    } else {
                        echo '<p class="form-message"></p>';
                    }
                    ?>
                </div>
            </form>
        </div>
    </div>
<?php endif;
echo '</section>';