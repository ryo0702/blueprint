<?php
$site_name = get_bloginfo('name');
$common    = nutrail_get_option('config-common', [], true);
$logo      = $site_name;
if (!empty($common['logo']['url'])) {
    $logo = '<img src="'.esc_url($common['logo']['url']).'" height="35" alt="'.esc_html($site_name).'">';
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php echo !empty($args['subject']) ? $args['subject'] : $site_name; ?></title>
</head>
<body>
<table style="width:100%;border:solid 1px #d6d4d4" cellspacing="0" cellpadding="0" border="0">
    <tbody>
    <tr>
        <td style="padding-top:0;padding-bottom:12px;background-color:#f8f8f8;border-bottom:solid 1px #ccc;"
            align="left">
            <table style="width:100%" cellspacing="0" cellpadding="0" border="0">
                <tbody>
                <tr>
                    <td style="padding-left:24px;padding-right:24px" valign="middle" align="center"><br>
                        <a href="<?php echo home_url('/') ?>" style="display: block;margin-bottom: 8px;">
                            <?php echo $logo; ?>
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    <tr>
        <td style="padding-top:0;padding-bottom:12px;background-color:#fff" align="left">
            <table style="width:100%;border-bottom:solid 1px #ccc" cellspacing="0" cellpadding="0" border="0">
                <tbody>
                <?php if (!empty($args['user_name'])): ?>
                    <tr>
                        <td style="padding-left:24px;padding-right:24px"><br>
                            <div style="font-size:18px;font-weight:400;color:#000;;padding-top:20px">
                                <?php echo sprintf('%s %s,',
                                    esc_html__('Hello', 'nutrail'),
                                    esc_html($args['user_name'])
                                ) ?>
                            </div>
                        </td>
                    </tr>
                <?php endif; ?>
                <tr>
                    <td style="padding-left:12px;padding-right:12px">
                        <table style="width:100%" cellspacing="0" cellpadding="0" border="0" align="left">
                            <tbody>
                            <tr>
                                <td style="padding-left:12px;padding-right:12px;padding-top:18px;padding-bottom:12px"
                                    valign="top">
                                    <table style="width:100%" cellspacing="0" cellpadding="0" border="0">
                                        <tbody>
                                        <tr>
                                            <td style="padding-bottom:20px;padding-top: 15px;">
                                                <?php
                                                if (!empty($args['content'])) {
                                                    echo $args['content'];
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <?php echo esc_html__('Thanks', 'nutrail') ?>, <br>
                                                <?php echo esc_html($site_name) ?>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <br>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    <tr style="background-color:#fff">
        <td style="font-size:12px;line-height:16px;color:#000;padding:20px 20px"
            align="left">
            <span style="text-align:center;display:block"> © Copyright <?php echo date('Y'); ?> <?php echo esc_html($site_name) ?> - All Rights Reserved </span>
            <br>
        </td>
    </tr>
    </tbody>
</table>
</body>
</html>
