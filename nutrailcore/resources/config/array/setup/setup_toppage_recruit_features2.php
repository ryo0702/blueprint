<?php
$array_generate_toppage_recruit_features2s = array(
    array(
        'features2_content' => array('type' => 'value','value' => array(
            array(
                'features2_content_title' => '簡単に覚えられる研修内容',
                'features2_content_text' => '未経験者でも分かりやすく、覚えやすい研修内容を提供しています。',
            ),
            array(
                'features2_content_title' => 'すぐに習得できる研修プログラム',
                'features2_content_text' => '研修プログラムは、実践的でありながら短期間で習得できるように設計されています。',
            ),
            array(
                'features2_content_title' => 'キャリアアップに役立つ研修内容',
                'features2_content_text' => '研修内容は、将来のキャリアアップに必要なスキルや知識を身につけることができます。',
            ),
        )),
    ),
    array(
        'features2_content' => array('type' => 'value','value' => array(
            array(
                'features2_content_title' => '実践的な研修内容',
                'features2_content_text' => '研修内容は実践的なものが多く、学んだ知識をすぐに活かすことができます。',
            ),
            array(
                'features2_content_title' => '定期的な研修プログラム',
                'features2_content_text' => '研修プログラムは定期的に実施され、常に最新の知識やスキルを身につけることができます。',
            ),
            array(
                'features2_content_title' => '経験豊富な先輩講師',
                'features2_content_text' => '講師陣は、業界トップクラスの実務経験豊富な先輩講師からが直接教えます。',
            ),
        )),
    ),
    array(
        'features2_content' => array('type' => 'value','value' => array(
            array(
                'features2_content_title' => '柔軟なカリキュラム',
                'features2_content_text' => 'カリキュラムは柔軟に対応し、個々の学習スタイルやニーズに合わせた研修を提供しています。',
            ),
            array(
                'features2_content_title' => '豊富な研修資料',
                'features2_content_text' => '研修資料は豊富で充実しており、学習した内容を復習することができます。',
            ),
            array(
                'features2_content_title' => '専門性の高いトレーニング',
                'features2_content_text' => '研修は専門性の高いトレーニングが中心であり、高い技術力を身につけることができます。',
            ),
        )),
    ),
);


$array_generate_toppage_recruit_features2_num = null;
$array_generate_toppage_recruit_features2_num = array_rand($array_generate_toppage_recruit_features2s);
if(is_array(@$array_generate_toppage_recruit_features2s[$array_generate_toppage_recruit_features2_num])){
    foreach ($array_generate_toppage_recruit_features2s[$array_generate_toppage_recruit_features2_num] as $this_content_key => $this_content_value) {
        $array_setup_toppage_recruit['insert_values'][$this_content_key] = $this_content_value;
    }
}