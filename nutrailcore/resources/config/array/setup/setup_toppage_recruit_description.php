<?php
$array_generate_toppage_recruit_descriptions = array(
    array(
        'description_description_text' => array('type' => 'value','value' => "当社「".@$_POST['company_name-short']."」は".@$_POST['company_pref']."にある中小企業で、業績好調につき積極的に人材を募集しています。".@$_POST['select_jobtype']."の経験が浅い方でも、短期間でスキルアップが可能な環境で、充実したキャリアアップを目指すことができます。安心して働ける職場で、皆様のご応募をお待ちしています。"),
    ),
    array(
        'description_description_text' => array('type' => 'value','value' => "私達の仕事は会社だけでなく、お客様、そして地域の発展のため、長らく".@$_POST['company_pref']."で地元密着で活動してきました。その活動が地元の人々に認められ、何度も表彰を頂いたり、地元でのシェアナンバーワン企業へと成長しました。派手なお仕事ではありませんが、必ず必要になる仕事でやりがいも感じていただける仕事です。"),
    ),
    array(
        'description_description_text' => array('type' => 'value','value' => "当社は".@$_POST['company_pref']."の中小企業で、".@$_POST['select_jobtype']."の業務を行っており、現在、急速に成長している会社です。経験が浅い方でも、丁寧な研修があり、成長をサポートする環境が整っています。自己成長を目指す方には最適な職場で、将来的なキャリアアップも可能です。安定した職場で、働きやすい環境を提供しています。"),
    ),
    array(
        'description_description_text' => array('type' => 'value','value' => "弊社は".@$_POST['company_pref']."を拠点に、業績好調につき新たな仲間を募集しています。未経験の方でも、先輩社員がしっかりとサポートし、スキルアップを目指すことができます。社員一人ひとりが活躍できる環境を整えていますので、意欲的な方からのご応募をお待ちしています。"),
    ),
    array(
        'description_description_text' => array('type' => 'value','value' => "当社は".@$_POST['company_pref']."の中小企業で、業績好調につき新しい仲間を募集しています。仕事に必要な知識や技術は、入社後に習得することができます。また、正当な評価制度があり、頑張り次第で昇給や昇格の機会も与えられます。安定した職場で、長期的に働きたい方からのご応募をお待ちしています。"),
    ),
    array(
        'description_description_text' => array('type' => 'value','value' => "弊社は".@$_POST['company_pref']."に拠点を構える中小企業で、成長戦略を進める中で新たなメンバーを募集しています。仕事に必要なスキルは、研修を通じて一から学ぶことができます。仕事とプライベートのバランスを大切にしながら、やりがいのある仕事に取り組めます。未来に向けて、一緒に働きたい方からのご応募をお待ちしています。"),
    ),
);

$array_generate_toppage_recruit_description_num = null;
$array_generate_toppage_recruit_description_num = array_rand($array_generate_toppage_recruit_descriptions);
if(is_array(@$array_generate_toppage_recruit_descriptions[$array_generate_toppage_recruit_description_num])){
    foreach ($array_generate_toppage_recruit_descriptions[$array_generate_toppage_recruit_description_num] as $this_content_key => $this_content_value) {
        $array_setup_toppage_recruit['insert_values'][$this_content_key] = $this_content_value;
    }
}