<?php
if (!function_exists('array_get_label')) {
    function array_get_label($array = null, $key = null)
    {
        $html = '';

        if (!empty($key)) {
            if (is_array($key)) {
                foreach ($key as $name) {
                    $html .= array_get_label($array, $name)."\n";
                }
            } elseif (!empty(@$array[$key])) {
                $html = $array[$key];
            }
        }

        return $html;
    }
}

if (!function_exists('array_employment_status')) {
    function array_employment_status($key = '')
    {
        $array = [
            'FULL_TIME'  => '正社員',
            'PART_TIME'  => 'パートタイマー',
            'CONTRACTOR' => '業務請負',
            'TEMPORARY'  => '期間社員',
            'INTERN'     => 'インターン',
            'PER_DIEM'   => '日雇い',
            'OTHER'      => 'その他'
        ];

        if (!empty($key) && !empty($array[$key])) {
            return $array[$key];
        }

        return $array;
    }
}

if (!function_exists('array_salary_payment_method')) {
    function array_salary_payment_method($key = '')
    {
        $array = [
            'HOUR'  => '時給',
            'DAY'   => '日給',
            'WEEK'  => '週休',
            'MONTH' => '月給',
            'YEAR'  => '年収',
        ];

        if (!empty($key) && !empty($array[$key])) {
            return $array[$key];
        }

        return $array;
    }
}

if (!function_exists('array_education_requirements')) {
    function array_education_requirements($key = '')
    {
        $array = [
            'high school'              => '高卒',
            'associate degree'         => '短大',
            'bachelor degree'          => '大卒',
            'professional certificate' => '専門家資格',
            'postgraduate degree'      => '大学院卒',
        ];

        if (!empty($key) && !empty($array[$key])) {
            return $array[$key];
        }

        return $array;
    }
}

if (!function_exists('array_pref')) {
    function array_pref(){
        return array(
            "北海道",
            "青森県",
            "岩手県",
            "宮城県",
            "秋田県",
            "山形県",
            "福島県",
            "茨城県",
            "栃木県",
            "群馬県",
            "埼玉県",
            "千葉県",
            "東京都",
            "神奈川県",
            "新潟県",
            "富山県",
            "石川県",
            "福井県",
            "山梨県",
            "長野県",
            "岐阜県",
            "静岡県",
            "愛知県",
            "三重県",
            "滋賀県",
            "京都府",
            "大阪府",
            "兵庫県",
            "奈良県",
            "和歌山県",
            "鳥取県",
            "島根県",
            "岡山県",
            "広島県",
            "山口県",
            "徳島県",
            "香川県",
            "愛媛県",
            "高知県",
            "福岡県",
            "佐賀県",
            "長崎県",
            "熊本県",
            "大分県",
            "宮崎県",
            "鹿児島県",
            "沖縄県"
        );
    }
}