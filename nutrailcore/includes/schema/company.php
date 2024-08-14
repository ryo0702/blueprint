<?php
global $post;

$config_company  = nutrail_get_option('config-company', []);
$config_common   = nutrail_get_option('config-common', []);
$site_title      = get_bloginfo('name').' - '.get_bloginfo('description');
$company_street  = [];
$company_images  = [];
$company_work    = [];
$company_weekend = [];

if (empty($config_company) || empty($config_company['company_name'])) {
    return null;
}

if (!empty(@$config_company['company_image1'])) {
    $company_images[] = @$config_company['company_image1'];
}
if (!empty(@$config_company['company_image2'])) {
    $company_images[] = @$config_company['company_image2'];
}
if (!empty($config_company['company_image3'])) {
    $company_images[] = @$config_company['company_image3'];
}

if ((bool)@$config_company['company_open_day_monday']) {
    $company_work[] = 'Monday';
}
if ((bool)@$config_company['company_open_day_tuesday']) {
    $company_work[] = 'Tuesday';
}
if ((bool)@$config_company['company_open_day_wednesday']) {
    $company_work[] = 'Wednesday';
}
if ((bool)@$config_company['company_open_day_thursday']) {
    $company_work[] = 'Thursday';
}
if ((bool)@$config_company['company_open_day_friday']) {
    $company_work[] = 'Friday';
}
if ((bool)@$config_company['company_open_day_saturday']) {
    $company_work[]    = 'Saturday';
    $company_weekend[] = 'Saturday';
}
if ((bool)@$config_company['company_open_day_sunday']) {
    $company_work[]    = 'Sunday';
    $company_weekend[] = 'Sunday';
}

if (empty($company_images) && !empty($config_common['logo']['url'])) {
    $company_images = [$config_common['logo']['url']];
}

if (!empty($config_company['company_street'])) {
    $company_street[] = $config_company['company_street'];
}

if (!empty($config_company['company_build'])) {
    $company_street[] = $config_company['company_build'];
}

return [
    '@type'                     => 'Organization',
    'url'                       => home_url('/'),
    'image'                     => $company_images,
    'name'                      => @$config_company['company_name'],
    'address'                   => [
        '@type'           => 'PostalAddress',
        'streetAddress'   => !empty($company_street) ? implode(' - ', $company_street) : '',
        'addressLocality' => @$config_company['company_city'],
        'addressRegion'   => @$config_company['company_pref'],
        'postalCode'      => @$config_company['company_postnum'],
        'addressCountry'  => @$config_company['company_city'],
    ],
    'geo'                       => [
        '@type'     => 'GeoCoordinates',
        'latitude'  => @$config_company['company_geo']['latitude'],
        'longitude' => @$config_company['company_geo']['longitude'],
    ],
    'logo'                      => [
        '@type'   => 'ImageObject',
        'url'     => @$config_common['logo']['url'],
        'width'   => @$config_common['logo']['width'],
        'height'  => @$config_common['logo']['height'],
        'caption' => @$site_title,
    ],
    'openingHoursSpecification' => [
        [
            '@type'     => 'OpeningHoursSpecification',
            'dayOfWeek' => @$company_work,
            'opens'     => @$config_company['company_open_time_opens'],
            'closes'    => @$config_company['company_open_time_closes'],
        ],
        [
            '@type'     => 'OpeningHoursSpecification',
            'dayOfWeek' => @$company_weekend,
            'opens'     => @$config_company['company_open_time_sutur_sun_opens'],
            'closes'    => @$config_company['company_open_time_sutur_sun_closes'],
        ],
    ],
    'telephone'                 => @$config_company['company_contact_tel'],
    'servesCuisine'             => 'Japan',
    'priceRange'                => '¥¥¥',
    'acceptsReservations'       => true,
];