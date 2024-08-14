<?php
$array_generate_toppage_recruit_features3s = array(
    array(
        'features3_content' => array('type' => 'value','value' => array(
            array(
                'features3_content_title' => '社会保険等完備',
                'features3_content_text' => '健康保険、厚生年金保険、雇用保険など、社会保険の完備を実現しています。',
            ),
            array(
                'features3_content_title' => '長年の実績と信頼',
                'features3_content_text' => '会社は長年の実績を持ち、多くのお客様から信頼されています。',
            ),
            array(
                'features3_content_title' => 'ボーナスの実績あり',
                'features3_content_text' => '毎年、実績に応じたボーナスが支給され、やりがいを持って働くことができます。',
            ),
        )),
    ),
    array(
        'features3_content' => array('type' => 'value','value' => array(
            array(
                'features3_content_title' => '社会保険完備',
                'features3_content_text' => '健康保険、厚生年金保険、雇用保険など、社会保険を完備しています。',
            ),
            array(
                'features3_content_title' => 'ボーナス支給実績あり',
                'features3_content_text' => '実績に応じたボーナスが支給され、やりがいを持って働くことができます。',
            ),
            array(
                'features3_content_title' => '充実した福利厚生',
                'features3_content_text' => '通勤手当や慶弔休暇、社員旅行など、充実した福利厚生が用意されています。',
            ),
        )),
    ),
    array(
        'features3_content' => array('type' => 'value','value' => array(
            array(
                'features3_content_title' => '男女共に働きやすい環境',
                'features3_content_text' => '男女共に働きやすい職場環境を整え、女性の活躍を応援しています。',
            ),
            array(
                'features3_content_title' => '産休・育休制度が充実',
                'features3_content_text' => '産前産後休暇や育児休暇、時短勤務など、子育て中の社員が安心して働けるよう制度を整備しています。',
            ),
            array(
                'features3_content_title' => '福利厚生が充実',
                'features3_content_text' => '通勤手当や社員旅行、資格取得支援など、福利厚生が充実しており、働く環境も整備されています。',
            ),
        )),
    ),
);


$array_generate_toppage_recruit_features3_num = null;
$array_generate_toppage_recruit_features3_num = array_rand($array_generate_toppage_recruit_features3s);
if(is_array(@$array_generate_toppage_recruit_features3s[$array_generate_toppage_recruit_features3_num])){
    foreach ($array_generate_toppage_recruit_features3s[$array_generate_toppage_recruit_features3_num] as $this_content_key => $this_content_value) {
        $array_setup_toppage_recruit['insert_values'][$this_content_key] = $this_content_value;
    }
}