<?php
/**
 * Load Admin Script
 */
if (!function_exists('nutrail_load_admin_script')) {
	function nutrail_load_admin_script()
	{
		$version = wp_get_theme()->get('Version');

		wp_enqueue_style('nutrail-admin-style', get_theme_file_uri('/dist/css/admin-css.min.css'), null, $version);

		wp_enqueue_script('nutrail-main', NUTRAIL_CORE_URL.'assets/js/admin.js', null, $version, true);
		wp_enqueue_script('nutrail-admin-script', get_theme_file_uri('/dist/js/admin.min.js'), ['jquery-core'], $version, true);
		wp_enqueue_script('nutrail-admin-runtime', get_theme_file_uri('/dist/js/runtime.min.js'), ['jquery-core'], $version, true);

		// Add variables to scripts
		wp_localize_script('nutrail-main', 'nutrail_params', [
			'ajaxurl' => admin_url('admin-ajax.php'),
			'nonce'   => wp_create_nonce('nutrail_nonce'),
		]);
	}

	add_action('admin_enqueue_scripts', 'nutrail_load_admin_script');
}

/**
 * Add Next Page Button in First Row
 */
if (!function_exists('nutrail_add_mce_buttons')) {
	function nutrail_add_mce_buttons($buttons, $id)
	{
		/* only add this for content editor */
		if ('content' != $id) {
			return $buttons;
		}

		/* add next page after more tag button */
		array_splice($buttons, 12, 0, 'wp_page');

		return $buttons;
	}

	add_filter('mce_buttons', 'nutrail_add_mce_buttons', 10, 2);
}

/**
 * Allow upload svg file
 */
if (!function_exists('nutrail_allow_mime_types')) {
	function nutrail_allow_mime_types($mimes)
	{
		$mimes['svg'] = 'image/svg+xml';

		return $mimes;
	}

	add_filter('upload_mimes', 'nutrail_allow_mime_types', 10, 2);
}

if (!function_exists('nutrail_fix_svg_thumb_display')) {
	function nutrail_fix_svg_thumb_display()
	{
		echo '<style type="text/css">.attachment-info .thumbnail img { width: 120px; height: auto;}</style>';
	}

	add_action('admin_print_footer_scripts', 'nutrail_fix_svg_thumb_display');
}

/**
 * phpmailer_init.
 */
function nutrail_phpmailer_smtp($phpmailer)
{
	$options = get_option(WPOPTIONKEY);

	if (!empty($options['smtp_enable']) && $options['smtp_enable'] == 1) {
		$phpmailer->isSMTP();
		$phpmailer->Host       = $options['smtp_server'];
		$phpmailer->Port       = $options['smtp_port'];
		$phpmailer->Username   = $options['smtp_username'];
		$phpmailer->Password   = $options['smtp_password'];
		$phpmailer->SMTPSecure = $options['smtp_secure'];
		$phpmailer->From       = $options['smtp_from'];
		$phpmailer->FromName   = $options['smtp_name'];
		$phpmailer->SMTPAuth   = true;
		$phpmailer->Timeout    = 10;
		$phpmailer->SetFrom($phpmailer->From, $phpmailer->FromName);
	}
}

add_action('phpmailer_init', 'nutrail_phpmailer_smtp');

/**
 * check captcha.
 */
function nutrail_check_captcha()
{
	$enable  = nutrail_get_option('captcha_enable', false, true);
	$privkey = nutrail_get_option('captcha_privkey', '', true);

	if (!nutrail_is_amp() && $enable) {
		if (empty($_POST['g-recaptcha-response'])) {
			wp_send_json_error([
				'message' => esc_html__('Empty token captcha.', 'nutrail')
			]);
		}
		require_once NUTRAIL_CORE_PATH.'classes/recaptchalib.php';

		$token     = wp_unslash($_POST['g-recaptcha-response']);
		$reCaptcha = new ReCaptcha($privkey);
		$response  = $reCaptcha->verifyResponse(
			$_SERVER['REMOTE_ADDR'],
			$token
		);
		if ($response == null || !$response->success) {
			wp_send_json_error([
				'message' => esc_html__('Error captcha.', 'nutrail')
			]);
		}
	}
}

/**
 * Send email.
 */
function nutrail_send_email($receive_email, $subject, $args)
{
	if (empty($args['content'])) {
		return false;
	}
	$args['subject'] = $subject;
	$style           = !empty($args['style']) ? $args['style'] : 'style-01';

	add_filter('wp_mail_content_type', 'nutrail_mail_content_type');

	ob_start();
	get_template_part('nutrailcore/views/emails/'.$style, null, $args);

	return wp_mail($receive_email, $subject, ob_get_clean());
}

function nutrail_mail_content_type()
{
	return 'text/html';
}