<?php
if (!function_exists('nutrail_form_input')) {
    function nutrail_form_input($contact = null, $key = null)
    {
        $return      = $required = $placeholder = $id = $title_label = $title_name = null;
        $column      = !empty($contact['contact_list_width']) ? $contact['contact_list_width'] : '12';
        $input_style = !empty($contact['contact_list_style']) ? $contact['contact_list_style'] : 'inline';
        $form_type   = @$contact['contact_list_type'];
        $id          = "field-".$key;
        $title_name  = "title-".$key;
        $label_id    = "for=".$id;

        if (@$contact['contact_list_required'] == true) {
            $required = 'required';
        }
        if (@$contact['contact_list_title']) {
            $title_label = esc_html(@$contact['contact_list_title']);
            if (!empty($required)) {
                $title_label .= '<span class="required">必須</span>';
            }
        }
        if (@$contact['contact_list_description']) {
            $placeholder = $contact['contact_list_description'];
        }

        // $title_label .= '<input type="hidden" name="'.$title_name.'" value="'.esc_attr(@$contact['contact_list_title']).'">';

        if ($form_type == 'input_textarea') {
            $return = '<textarea class="form-control" name="'.esc_attr($id).'" id="'.esc_attr($id).'" rows="5" placeholder="'.esc_attr($placeholder).'" '.esc_attr($required).'></textarea>';
        } elseif ($form_type == 'input_select') {
            $options = $input_option = null;
            if (!empty($contact['contact_list_option']) || !empty($contact['contact_list_option_array'])) {
                if (!empty($contact['contact_list_option'])){
                    $input_option = explode("\n", $contact['contact_list_option']);
                    $input_option = array_map('trim', $input_option);
                    $input_option = array_filter($input_option, 'strlen');
                    $input_option = array_values($input_option);
                }
                else{
                    $input_option = $contact['contact_list_option_array'];
                }
                if (!empty($placeholder)) {
                    $options .= '<option value="">'.esc_html($placeholder).'</option>';
                }
                if (is_array(@$input_option)) {
                    foreach ($input_option as $opt_label) {
                        $options .= '<option value="'.esc_attr($opt_label).'">'.esc_html($opt_label).'</option>';
                    }
                }
                $return = '<select name="'.esc_attr($id).'" id="'.esc_attr($id).'">'.$options.'</select>';
            }
        } elseif ($form_type == 'input_radio_yesno') {
            $label_id = '';
            $return   = '<div class="form-check form-check-inline">
                <input type="radio" name="'.esc_attr($id).'" id="'.esc_attr($id).'-yes" value="'.esc_html__('Yes', 'nutrail').'" checked>
                <label class="form-check-label" for="'.esc_attr($id).'-yes">'.esc_html__('Yes', 'nutrail').'</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" name="'.esc_attr($id).'" id="'.esc_attr($id).'-no" value="'.esc_html__('No', 'nutrail').'">
                <label class="form-check-label" for="'.esc_attr($id).'-no">'.esc_html__('No', 'nutrail').'</label>
            </div>';
        } elseif ($form_type == 'input_hidden_title_get_id') {
            if (!empty($_GET['id']) && is_numeric($_GET['id'])) {
                $return = '<div>'.get_the_title($_GET['id']).'</div>
                <input type="hidden" name="'.esc_attr($id).'" placeholder="'.esc_attr($placeholder).'" id="'.esc_attr($id).'" value="'.get_the_title($_GET['id']).'(ID'.$_GET['id'].')">';
            } else {
                $return = '<div>なし</div>
                <input type="hidden" name="'.esc_attr($id).'" placeholder="'.esc_attr($placeholder).'" id="'.esc_attr($id).'" value="">';
            }
        } elseif ($form_type == 'input_date') {
            $return = '<input type="date" name="'.esc_attr($id).'" placeholder="'.esc_attr($placeholder).'" class="form-control" id="'.esc_attr($id).'" '.esc_attr($required).'>';
        } else {
            $type   = ($form_type == 'input_email') ? 'email' : 'text';
            $return = '<input type="'.esc_attr($type).'" name="'.esc_attr($id).'" placeholder="'.esc_attr($placeholder).'" class="form-control" id="'.esc_attr($id).'" '.esc_attr($required).'>';
        }


        if (!empty($return)) {
            $column_inner = $input_style == 'inline' ? '6 mb-md-0' : '12';

            return '<div class="col-md-'.esc_attr($column).' form-group">
                <div class="row">
                    <label '.esc_attr($label_id).' class="col-md-'.esc_attr($column_inner).' mb-10 form-label">'.wp_kses_post($title_label).'</label>
                    <div class="col-md-'.esc_attr($column_inner).'">'.$return.'</div>
                </div>
            </div>';
        }

        return $return;
    }
}

/*
 * Send email
 * */
if (!function_exists('nutrail_ajax_contact_form')) {
    function nutrail_ajax_contact_form()
    {
        check_ajax_referer('nutrail_nonce', 'nonce');

        // Only process POST reqeusts.
        if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {

            // Action contact
            include locate_template('inc/nutrail_nonce.php');

        } else {
            wp_send_json_error([
                'message' => esc_html__('There was a problem with your submission, please try again.', 'nutrail'),
            ]);
        }

        wp_send_json_error([
            'message' => esc_html__('Oops! Something went wrong and we couldn\'t send your message.', 'nutrail'),
        ]);
    }

    add_action('wp_ajax_nutrail_ajax_contact_form', 'nutrail_ajax_contact_form');
    add_action('wp_ajax_nopriv_nutrail_ajax_contact_form', 'nutrail_ajax_contact_form');
}

/*
 * Test email
 * */
if (!function_exists('nutrail_email_test_smtp')) {
    function nutrail_email_test_smtp()
    {
        check_ajax_referer('nutrail_nonce', 'nonce');

        if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {
            $email   = sanitize_email($_POST['email']);
            $message = sanitize_textarea_field($_POST['message']);

            if (empty($email) || empty($message)) {
                wp_send_json_error([
                    'message' => esc_html__('Require fill email and message.', 'nutrail'),
                ]);
            }

            $options = get_option(WPOPTIONKEY);
            $headers = ['From: '.get_bloginfo('name').' <'.@$options['smtp_from'].'>'];
            $subject = 'Test email';

            if (wp_mail($email, $subject, $message, $headers)) {
                wp_send_json_success([
                    'message' => esc_html__('Email has been sent successfully.', 'nutrail'),
                ]);
            }
        }

        wp_send_json_error([
            'message' => esc_html__('Can not send email.', 'nutrail'),
        ]);
    }

    add_action('wp_ajax_nutrail_email_test_smtp', 'nutrail_email_test_smtp');
}