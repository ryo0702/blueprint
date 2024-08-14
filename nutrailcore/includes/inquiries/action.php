<?php
/*
 * Send email
 * */
if (!function_exists('nutrail_ajax_inquery')) {
    function nutrail_ajax_inquery()
    {
        check_ajax_referer('nutrail_nonce', 'nonce');

        nutrail_check_captcha();

        if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {
            $post_meta     = [];
            $redirect_url  = '';
            $email_address = '';
            $array_post    = wp_unslash($_POST);
            $contact_list  = !empty($array_post['contact_list']) ? json_decode($array_post['contact_list'], true) : null;

            $post_meta['formid']   = @$array_post['formid'];
            $post_meta['formname'] = @$array_post['formname'];
            $post_meta['sendmail'] = @$array_post['sendmail'];

            if (!empty($contact_list) && is_array($contact_list)) {
                foreach ($contact_list as $key => $field) {
                    if ($field['contact_list_type'] == 'input_textarea') {
                        $field_val = sanitize_textarea_field($array_post['field-'.$key]);
                    } elseif ($field['contact_list_type'] == 'input_email') {
                        $field_val     = sanitize_email($array_post['field-'.$key]);
                        $email_address = $field_val;
                    } else {
                        $field_val = sanitize_text_field($array_post['field-'.$key]);
                    }
                    $post_meta['content'][] = array(
                        'key'   => 'field-'.@$key,
                        'label' => esc_html(@$field['contact_list_title']),
                        'value' => $field_val
                    );
                }
            }

            if (!empty($array_post['redirect_url'])) {
                $redirect_url = $array_post['redirect_url'];
            }

            if (empty($post_meta)) {
                wp_send_json_success([
                    'message' => esc_html__('Error no data.', 'nutrail'),
                ]);
            }

            $post_id = wp_insert_post([
                'post_title'  => $post_meta['formname'].'-'.$post_meta['formid'].'-'.date('Ymd H:i:s'),
                'post_status' => 'draft',
                'post_author' => 1,
                'post_type'   => 'inquiries',
                'meta_input'  => [
                    'content' => $post_meta,
                ]
            ]);

            if (!empty($email_address)) {
                $headers = [];
                $message = '';
                $options = get_option(WPOPTIONKEY);
                $emails  = get_users(['login__in' => get_super_admins(), 'fields' => 'user_email']);

                if (!empty($post_meta['formname'])) {
                    $subject = $post_meta['formname'];
                } else {
                    $subject = 'お問合せフォーム';
                }


                if (!empty(get_bloginfo('name'))) {
                    $headers[] = 'From: '.get_bloginfo('name').' <'.@$options['smtp_from'].'>';
                }

                if (!empty($post_meta['sendmail'])) {
                    $headers[] = 'Bcc: '.$post_meta['sendmail'];
                }

                $message .= "メールの送信、誠にありがとうございます。\r\n";
                $message .= "送信頂いた内容は以下の通りとなります。\r\n";

                $message .= "----------------------------------------------------------------\r\n";

                $message .= "\r\n";

                if (!empty($post_meta['content']) && is_array($post_meta['content'])) {
                    foreach ($post_meta['content'] as $key => $value) {
                        $message .= "■ ".@$value['label']."\r\n";
                        $message .= @$value['value']."\r\n";
                        $message .= "\r\n";
                    }
                }

                $message .= "----------------------------------------------------------------\r\n";

                $message .= get_bloginfo('name')."\r\n";
                $message .= "URL: ".home_url('/')."\r\n";
                $message .= "送信元メール: ".@$options['smtp_from']."\r\n";

                $message .= "----------------------------------------------------------------";

                if (!wp_mail($email_address, $subject, $message, $headers)) {
                    wp_delete_post($post_id);
                    wp_send_json_error([
                        'message' => esc_html__('Can not send email.', 'nutrail'),
                    ]);
                }
            }

            wp_send_json_success([
                'message'  => 'フォームの送信ありがとうございます。正常に送信されました。',
                'redirect' => $redirect_url,
            ]);
        } else {
            wp_send_json_error([
                'message' => '送信中に問題が発生しました。もう一度お試しください。',
            ]);
        }

        wp_send_json_error([
            'message' => 'エラーが発生したため、メッセージを送信できませんでした。',
        ]);
    }

    add_action('wp_ajax_nutrail_ajax_inquery', 'nutrail_ajax_inquery');
    add_action('wp_ajax_nopriv_nutrail_ajax_inquery', 'nutrail_ajax_inquery');
}