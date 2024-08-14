<?php
/**
 * Schema job
 *
 * @var $config_page
 * @var $section_view_config_key
 */

$config_common    = nutrail_get_option('config-common', []);
$company_name     = @$config_page[$section_view_config_key.'_company_name'];
$amount_money     = @$config_page[$section_view_config_key.'_amount_money'];
$amount_money_max = @$config_page[$section_view_config_key.'_amount_money_max'];
$experience       = @$config_page[$section_view_config_key.'_experience_requirements'];
$education        = @$config_page[$section_view_config_key.'_education_requirements'];

if (empty($config_page[$section_view_config_key.'_occupation'])) {
    return;
}

$job_schema = [
    '@context'                      => 'https://schema.org/',
    '@type'                         => 'JobPosting',
    'directApply'                   => 'true',
    'datePosted'                    => wp_kses_post(@$config_page[$section_view_config_key.'_date_posted']),
    'validThrough'                  => wp_kses_post(@$config_page[$section_view_config_key.'_valid_through']),
    'employmentType'                => wp_kses_post(@$config_page[$section_view_config_key.'_employment_status']),
    'title'                         => wp_kses_post(@$config_page[$section_view_config_key.'_occupation']),
    'description'                   => wp_kses_post(@$config_page[$section_view_config_key.'_content']),
    'workHours'                     => wp_kses_post(@$config_page[$section_view_config_key.'_time']),
    'qualifications'                => wp_kses_post(@$config_page[$section_view_config_key.'_qualifications']),
    'skills'                        => wp_kses_post(@$config_page[$section_view_config_key.'_skills']),
    'baseSalary'                    => [
        '@type'    => 'MonetaryAmount',
        'currency' => 'JPY',
        'value'    => [
            '@type'    => 'QuantitativeValue',
            'minValue' => $amount_money,
            'maxValue' => !empty($amount_money_max) ? $amount_money_max : $amount_money,
            'unitText' => @$config_page[$section_view_config_key.'_salary_payment_method'],
        ],
    ],
    'hiringOrganization'            => [
        '@type'  => 'Organization',
        'name'   => wp_kses_post(@$company_name),
        'sameAs' => get_home_url('/'),
        'logo'   => @$config_common['logo']['url'],
    ],
    'jobLocation'                   => [
        '@type'   => 'Place',
        'address' => [
            '@type'           => 'PostalAddress',
            'postalCode'      => wp_kses_post(@$config_page[$section_view_config_key.'_postnum']),
            'streetAddress'   => wp_kses_post(@$config_page[$section_view_config_key.'_street']),
            'addressLocality' => wp_kses_post(@$config_page[$section_view_config_key.'_city']),
            'addressRegion'   => wp_kses_post(@$config_page[$section_view_config_key.'_pref']),
            'addressCountry'  => 'JP',
        ],
    ],
    'applicantLocationRequirements' => [
        '@type' => 'Country',
        'value' => 'JP',
    ],
    'identifier'                    => [
        '@type' => 'PropertyValue',
        'name'  => $company_name,
        'value' => get_home_url('/'),
    ],
];

if ($experience > 0) {
    $job_schema['experienceRequirements'] = [
        '@type'              => 'OccupationalExperienceRequirements',
        'monthsOfExperience' => $experience,
    ];
} else {
    $job_schema['experienceRequirements'] = 'no requirements';
}

if (!empty($education) && is_array($education)) {
    foreach ($education as $category) {
        $job_schema['educationRequirements'][] = [
            '@type'              => 'EducationalOccupationalCredential',
            'credentialCategory' => $category,
        ];
    }
}

if (!empty($config_page[$section_view_config_key.'_bonus'])) {
    $job_schema['estimatedSalary'][] = [
        '@type'    => 'MonetaryAmountDistribution',
        'name'     => 'bonus',
        'currency' => 'JPY',
        'minValue' => 0,
        'maxValue' => $config_page[$section_view_config_key.'_bonus'],
    ];
}

$job_salary = [
    '@context'           => 'https://schema.org/',
    '@type'              => 'Occupation',
    'name'               => wp_kses_post(@$config_page[$section_view_config_key.'_occupation']),
    'description'        => wp_kses_post(@$config_page[$section_view_config_key.'_salary_description']),
    'mainEntityOfPage'   => [
        '@type'        => 'WebPage',
        'lastReviewed' => @$config_page[$section_view_config_key.'_date_posted'],
    ],
    'occupationLocation' => [
        '@type' => 'City',
        'name'  => wp_kses_post(@$config_page[$section_view_config_key.'_city']),
    ],
    'estimatedSalary'    => [
        '@type'    => 'MonetaryAmountDistribution',
        'name'     => 'base',
        'currency' => 'JPY',
        'minValue' => $amount_money,
        'maxValue' => !empty($amount_money_max) ? $amount_money_max : $amount_money,
        'unitText' => wp_kses_post(@$config_page[$section_view_config_key.'_salary_payment_method']),
    ],
];

// add to schema
$GLOBALS['array_config_schema']['@graph'][] = $job_schema;
$GLOBALS['array_config_schema']['@graph'][] = $job_salary;