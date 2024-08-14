<?php
if(@$_POST['select_infotype'] == 'taigu'){
    $array_generate_toppage_recruit_mvs = array(
        array(
            'mainvisual_main_title' => array('type' => 'value','value' => "待遇・福利厚生、\n高い給与の会社で\nあなたの能力を発揮！"),
            'mainvisual_sub_title' => array('type' => 'value','value' => "働きがいのある会社"),
            'mainvisual_lead' => array('type' => 'value','value' => "あなたの能力とやる気を、\n待遇・福利厚生、\n給与に反映します。"),
            'mainvisual_text' => array('type' => 'value','value' => @$_POST['company_pref']."で、高待遇・福利厚生、\n給与の良い当社「".@$_POST['company_name-short']."」で".@$_POST['select_jobtype']."の仕事で、\nあなたの能力を発揮しませんか？\n未経験でもやる気があれば大歓迎！\n充実した研修で、".@$_POST['select_jobtype']."の業務内容を1ヶ月でマスターできます。\n日々の成果が報われるやりがいのあるお仕事です。\n少しでもご興味がある方は、ページ下のフォームからご応募ください。"),
            'mainvisual_button1' => array('type' => 'value','value' => array('href' => '#contactform-wrap','text' => '求人のご応募')),
            'mainvisual_badge1' => array('type' => 'value','value' => "待遇\n充実"),
            'mainvisual_badge2' => array('type' => 'value','value' => "高給与\nお約束"),
        ),
        array(
            'mainvisual_main_title' => array('type' => 'value','value' => "待遇・福利厚生、給与が抜群\nあなたが活躍できる会社です"),
            'mainvisual_sub_title' => array('type' => 'value','value' => "働きがいを感じる会社"),
            'mainvisual_lead' => array('type' => 'value','value' => "急成長中の当社では、待遇・福利厚生、給与が抜群です。あなたの力を最大限に発揮し、働きがいを感じる職場です。"),
            'mainvisual_text' => array('type' => 'value','value' => "待遇・福利厚生、給与が抜群\n".@$_POST['company_pref']."で働くなら、現在急成長中の「".@$_POST['company_name-short']."」で".@$_POST['select_jobtype']."の仕事で、一緒に働きませんか？\n未経験からでも大丈夫。教育体制が整っており、1ヶ月で業務内容をマスターできます。やる気と熱意をお持ちの方を、全力でサポートします。\n毎日の仕事が実績につながり、スキルアップできるやりがいのあるお仕事です。少しでもご興味のある方は、下のフォームからご応募ください。"),
            'mainvisual_button1' => array('type' => 'value','value' => array('href' => '#contactform-wrap','text' => '求人のご応募')),
            'mainvisual_badge1' => array('type' => 'value','value' => "未経験\n歓迎"),
            'mainvisual_badge2' => array('type' => 'value','value' => "年齢\n不問"),
        ),
    );
}
elseif(@$_POST['select_infotype'] == 'mikeiken'){
    $array_generate_toppage_recruit_mvs = array(
        array(
            'mainvisual_main_title' => array('type' => 'value','value' => "あなたの力を活かしませんか？\n経験者・年齢不問の\n急成長企業で、自分らしく働こう！"),
            'mainvisual_sub_title' => array('type' => 'value','value' => "働きがいのある会社で、\nやりがいを実感しましょう！"),
            'mainvisual_lead' => array('type' => 'value','value' => "急成長中の当社で、\nあなたの力を発揮しませんか？"),
            'mainvisual_text' => array('type' => 'value','value' => @$_POST['company_pref']."で働くなら、現在急成長中の当社「".@$_POST['company_name-short']."」で".@$_POST['select_jobtype']."の仕事で、一緒に働きましょう！\n中途採用・未経験者歓迎・年齢不問の企業です。\n1ヶ月で業務内容は覚えられる教育システムをご用意していますので、やる気のある方ならどなたでも大歓迎です。\n毎日の仕事が実績になり、着実にスキル＆キャリアアップでき、お客様にも感謝されるやりがいのあるお仕事です。\n少しでもご興味のある方はページ下のフォームからご応募ください。お待ちしています。"),
            'mainvisual_button1' => array('type' => 'value','value' => array('href' => '#contactform-wrap','text' => '求人のご応募')),
            'mainvisual_badge1' => array('type' => 'value','value' => "未経験\n歓迎"),
            'mainvisual_badge2' => array('type' => 'value','value' => "年齢\n不問"),
        ),
        array(
            'mainvisual_main_title' => array('type' => 'value','value' => "自分のやりがいを見つけよう！\n経験者・年齢不問の\n成長企業で、あなたの力を活かそう！"),
            'mainvisual_sub_title' => array('type' => 'value','value' => "自分の力を試せる\n成長企業で、新たなスタートを切ろう！"),
            'mainvisual_lead' => array('type' => 'value','value' => "あなたの力が必要です！\n中途採用・未経験者歓迎・年齢不問の\n当社で、新しい仲間になりませんか？"),
            'mainvisual_text' => array('type' => 'value','value' => @$_POST['company_pref']."で働くなら、成長企業で働きませんか？\n中途採用・未経験者歓迎・年齢不問の当社で、".@$_POST['select_jobtype']."の仕事をして、自分の力を試してみませんか？\n1ヶ月で業務内容は覚えられる教育システムをご用意していますので、未経験の方も安心して働けます。\n毎日の仕事が実績になり、着実にスキル＆キャリアアップできるやりがいのあるお仕事です。\n少しでもご興味がある方は、ページ下のフォームからご応募ください。お待ちしています！"),
            'mainvisual_button1' => array('type' => 'value','value' => array('href' => '#contactform-wrap','text' => '求人のご応募')),
            'mainvisual_badge1' => array('type' => 'value','value' => "中途\n採用"),
            'mainvisual_badge2' => array('type' => 'value','value' => "未経\n験歓迎"),
        ),
        'insert_values' => array(
            'mainvisual_main_title' => array('type' => 'value','value' => "成長企業で一緒に働こう！\n未経験者歓迎・年齢不問の\n中途採用募集中！"),
            'mainvisual_sub_title' => array('type' => 'value','value' => "未来を切り開くチャンスがここにある！\n中途採用募集、\n未経験者歓迎・年齢不問で採用中！"),
            'mainvisual_lead' => array('type' => 'value','value' => "当社であなたの可能性を広げませんか？\n未経験者歓迎・年齢不問で\n中途採用募集中です！"),
            'mainvisual_text' => array('type' => 'value','value' => @$_POST['company_pref']."での就職は、当社で決まり！\n中途採用募集、未経験者歓迎・年齢不問で、".@$_POST['select_jobtype']."のお仕事ができます。\n1ヶ月で業務内容を覚えられる教育システムがあるので、未経験でも安心して始められます。\n当社で新しいスタートを切りませんか？興味がある方は、下記フォームからご応募ください。"),
            'mainvisual_button1' => array('type' => 'value','value' => array('href' => '#contactform-wrap','text' => '求人のご応募')),
            'mainvisual_badge1' => array('type' => 'value','value' => "未経験\n歓迎"),
            'mainvisual_badge2' => array('type' => 'value','value' => "年齢\n不問"),
        )
    );
}
else{
    $array_generate_toppage_recruit_mvs = array(
        array(
            'mainvisual_main_title' => array('type' => 'value','value' => "一緒に働きやすい環境を\nつくりませんか？"),
            'mainvisual_sub_title' => array('type' => 'value','value' => "働きやすい会社"),
            'mainvisual_lead' => array('type' => 'value','value' => "当社は、働きやすい環境を大切にしています。一緒に会社を成長させながら、お互いのライフスタイルに合わせた働き方ができます。"),
            'mainvisual_text' => array('type' => 'value','value' => "一緒に働きやすい環境をつくりませんか？\n".@$_POST['company_pref']."で働くなら、当社「".@$_POST['company_name-short']."」がオススメです。".@$_POST['select_jobtype']."の仕事で、やりがいを感じながら働いていただけます。\n働き方も柔軟で、ご希望に応じて在宅勤務も可能です。また、子育て中の方や介護をしている方にも理解のある職場です。\nご応募、お問い合わせは下のフォームからお願いします。"),
            'mainvisual_button1' => array('type' => 'value','value' => array('href' => '#contactform-wrap','text' => '求人のご応募')),
            'mainvisual_badge1' => array('type' => 'value','value' => "育児介護\n休暇あり"),
            'mainvisual_badge2' => array('type' => 'value','value' => "在宅\n勤務可"),
        ),
        array(
            'mainvisual_main_title' => array('type' => 'value','value' => "自分らしく働く\n自身の可能性を伸ばす"),
            'mainvisual_sub_title' => array('type' => 'value','value' => "あなたの個性を活かす会社"),
            'mainvisual_lead' => array('type' => 'value','value' => "当社は、社員一人ひとりの個性を大切にし、それぞれの強みを発揮できるような環境を整えています。自分らしく働ける場所がここにあります。"),
            'mainvisual_text' => array('type' => 'value','value' => "自分らしく働くために、当社で働きませんか？\n".@$_POST['company_pref']."での".@$_POST['select_jobtype']."の仕事をお探しの方にオススメです。当社では、あなたの個性を大切にして、働き方やスタイルに合わせて、自分らしく働くことができます。\nまた、働き方も柔軟で、フレックスタイム制度や在宅勤務も可能です。生活に合わせた働き方を実現できます。\nご応募、お問い合わせは下のフォームからお願いします。"),
            'mainvisual_button1' => array('type' => 'value','value' => array('href' => '#contactform-wrap','text' => '求人のご応募')),
            'mainvisual_badge1' => array('type' => 'value','value' => "未経験\n歓迎"),
            'mainvisual_badge2' => array('type' => 'value','value' => "在宅\n勤務可"),
        ),
        array(
            'mainvisual_main_title' => array('type' => 'value','value' => "未来を共に築く仲間を\n募集しています"),
            'mainvisual_sub_title' => array('type' => 'value','value' => "未来に貢献する会社"),
            'mainvisual_lead' => array('type' => 'value','value' => "当社は、社会に貢献することを目的とし、事業を展開しています。未来を共に築く仲間を募集しています。"),
            'mainvisual_text' => array('type' => 'value','value' => "未来に貢献する会社で、一緒に働いてみませんか？\n当社では、社会に貢献するための事業を展開しており、あなたの力を必要としています。".@$_POST['company_pref']."で働くなら、当社がオススメです。".@$_POST['select_jobtype']."の仕事で、やりがいを感じながら働いていただけます。\nまた、社員の成長を支援する教育制度や、社会貢献活動に参加できる機会も多数あります。\nご応募、お問い合わせは下のフォームからお願いします。"),
            'mainvisual_button1' => array('type' => 'value','value' => array('href' => '#contactform-wrap','text' => '求人のご応募')),
            'mainvisual_badge1' => array('type' => 'value','value' => "社会\n貢献"),
            'mainvisual_badge2' => array('type' => 'value','value' => "教育\n充実"),
        )
    );
}

$array_generate_toppage_recruit_mv_num = null;
$array_generate_toppage_recruit_mv_num = array_rand($array_generate_toppage_recruit_mvs);
if(is_array(@$array_generate_toppage_recruit_mvs[$array_generate_toppage_recruit_mv_num])){
    foreach ($array_generate_toppage_recruit_mvs[$array_generate_toppage_recruit_mv_num] as $this_content_key => $this_content_value) {
        $array_setup_toppage_recruit['insert_values'][$this_content_key] = $this_content_value;
    }
}