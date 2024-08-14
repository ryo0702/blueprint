<?php
if(@$_POST['select_infotype'] == 'taigu'){
    $array_generate_toppage_recruit_lists = array(
        array(
            'list_main_title' => array('type' => 'value','value' => 'MERIT'),
            'list_content_list' => array('type' => 'value','value' => array(
                array(
                    'list_content_list_title' => "福利厚生が充実",
                    'list_content_list_text' => "健康保険、厚生年金、雇用保険など充実した福利厚生をご用意しています。",
                ),
                array(
                    'list_content_list_title' => "待遇がずば抜けて良い",
                    'list_content_list_text' => "中小企業ながら、同じ職種の企業の中でずば抜けて待遇が良いと好評です。",
                ),
                array(
                    'list_content_list_title' => "経験者は給与アップ",
                    'list_content_list_text' => "経験者で能力があれば、初期の段階から給与アップ。",
                ),
                array(
                    'list_content_list_title' => "やる気次第で昇給",
                    'list_content_list_text' => "やる気がある社員には、年に何度も昇給のチャンスがあります。",
                ),
            )),
        ),
        array(
            'list_main_title' => array('type' => 'value','value' => 'MERIT'),
            'list_content_list' => array('type' => 'value','value' => array(
                array(
                    'list_content_list_title' => "給与水準が高い",
                    'list_content_list_text' => "給与水準は高く、努力次第で年収アップも目指せます。",
                ),
                array(
                    'list_content_list_title' => "年に複数回の昇給チャンス",
                    'list_content_list_text' => "能力に応じて、年に複数回の昇給があります。",
                ),
                array(
                    'list_content_list_title' => "交通費支給等の手当が充実",
                    'list_content_list_text' => "交通費、家族手当など、各種手当も充実しています。",
                ),
                array(
                    'list_content_list_title' => "安心して働ける環境",
                    'list_content_list_text' => "健康保険、厚生年金、雇用保険など充実した福利厚生をご用意しています。",
                ),
            ))
        )
    );
}
elseif(@$_POST['select_infotype'] == 'mikeiken'){
    $array_generate_toppage_recruit_lists = array(
        array(
            'list_main_title' => array('type' => 'value','value' => 'MERIT'),
            'list_content_list' => array('type' => 'value','value' => array(
                array(
                    'list_content_list_title' => "未経験者でも安心",
                    'list_content_list_text' => "マニュアルがあるので未経験でも安心して働けます",
                ),
                array(
                    'list_content_list_title' => "先輩社員の80%は未経験から",
                    'list_content_list_text' => "先輩社員のほとんどが".@$_POST['select_jobtype']."、未経験からスタート",
                ),
                array(
                    'list_content_list_title' => "社員同士の仲が良い",
                    'list_content_list_text' => "社員同士のコミュニケーションが良いので、働きやすい職場です",
                ),
                array(
                    'list_content_list_title' => "乱暴だったり、怖い上司はいません",
                    'list_content_list_text' => "上司が威圧的でないので、安心して働けます",
                ),
            )),
        ),
        array(
            'list_main_title' => array('type' => 'value','value' => 'MERIT'),
            'list_content_list' => array('type' => 'value','value' => array(
                array(
                    'list_content_list_title' => "初めてこの業種で働く人でも安心",
                    'list_content_list_text' => @$_POST['select_jobtype']."の業界未経験でも、しっかりとフォローしてくれます",
                ),
                array(
                    'list_content_list_title' => "初心者でも高待遇で働ける",
                    'list_content_list_text' => "初心者でも高待遇で働けるので、安心して挑戦できます",
                ),
                array(
                    'list_content_list_title' => "中途採用も大歓迎",
                    'list_content_list_text' => "中途採用も大歓迎ですので、遠慮なくご応募ください",
                ),
                array(
                    'list_content_list_title' => "丁寧親切に教えます",
                    'list_content_list_text' => "教育体制が整っているので、丁寧に指導してもらえます",
                ),
            ))
        )
    );
}
else{
    $array_generate_toppage_recruit_lists = array(
        array(
            'list_main_title' => array('type' => 'value','value' => 'MERIT'),
            'list_content_list' => array('type' => 'value','value' => array(
                array(
                    'list_content_list_title' => '働きやすい環境',
                    'list_content_list_text' => '社員のストレスを軽減するために、心地よい職場環境を整備しています。',
                ),
                array(
                    'list_content_list_title' => '安定した収入',
                    'list_content_list_text' => '賞与や昇給があるため、安定した収入を得ることができます。',
                ),
                array(
                    'list_content_list_title' => '通勤が楽',
                    'list_content_list_text' => '車・バイク・自転車・電車通勤が選べるので、通勤時間もストレスフリーです。',
                ),
                array(
                    'list_content_list_title' => 'マニュアル化',
                    'list_content_list_text' => '仕事のやり方がマニュアル化されているので、初心者でも安心して働くことができます。',
                ),
            )),
        ),
        array(
            'list_main_title' => array('type' => 'value','value' => 'MERIT'),
            'list_content_list' => array('type' => 'value','value' => array(
                array(
                    'list_content_list_title' => '家族や友人と離れない',
                    'list_content_list_text' => '転勤がないので、'.@$_POST['company_pref'].'で安心して働くことができます。',
                ),
                array(
                    'list_content_list_title' => '安心して働ける',
                    'list_content_list_text' => '創業20年以上の歴史を持ち、社員同士の仲が良いので、安心して働けます。',
                ),
                array(
                    'list_content_list_title' => '社員旅行あり',
                    'list_content_list_text' => '毎年社員旅行を行っており、社員同士の親睦も深められます。',
                ),
                array(
                    'list_content_list_title' => '業績上昇中',
                    'list_content_list_text' => '業績が5年以上上昇しているので、将来性もあります。',
                ),
            ))
        ),
        array(
            'list_main_title' => array('type' => 'value','value' => 'MERIT'),
            'list_content_list' => array('type' => 'value','value' => array(
                array(
                    'list_content_list_title' => '安定的に稼げる',
                    'list_content_list_text' => '収入も安定しており、働きがいがあります。',
                ),
                array(
                    'list_content_list_title' => '地元愛あふれる会社',
                    'list_content_list_text' => @$_POST['company_pref'].'出身の社長や社員全員が地元を大事にしています。',
                ),
                array(
                    'list_content_list_title' => 'ストレスフリーで働ける',
                    'list_content_list_text' => '社員一人ひとりの健康管理にも配慮し、ストレスフリーな職場を目指しています。',
                ),
                array(
                    'list_content_list_title' => '中途採用、40歳以上の方も歓迎',
                    'list_content_list_text' => '年齢や学歴に関係なく、やる気とポテンシャルを重視して採用しています。',
                ),
            ))
        )    
    );
}

$array_generate_toppage_recruit_list_num = null;
$array_generate_toppage_recruit_list_num = array_rand($array_generate_toppage_recruit_lists);
if(is_array(@$array_generate_toppage_recruit_lists[$array_generate_toppage_recruit_list_num])){
    foreach ($array_generate_toppage_recruit_lists[$array_generate_toppage_recruit_list_num] as $this_content_key => $this_content_value) {
        $array_setup_toppage_recruit['insert_values'][$this_content_key] = $this_content_value;
    }
}

