<?php
if(@$_POST['select_jobtype'] == '法人営業'){
    $array_generate_toppage_recruit_features1s = array(
        array(
            'features1_text' => array('type' => 'value','value' => "当社の法人営業は、お客様のビジネス課題に合わせ、最適な提案を行います。経験豊富なスタッフが、迅速かつ丁寧な対応で、お客様の期待に応えます。"),
            'features1_content' => array('type' => 'value','value' => array(
                array(
                    'features1_content_title' => "戦略的提案",
                    'features1_content_text' => "ビジネス課題を解決するため、戦略的な提案を行います。",
                ),
                array(
                    'features1_content_title' => "顧客ニーズに合わせたカスタマイズ",
                    'features1_content_text' => "お客様のニーズに合わせ、サービスのカスタマイズを行い、最適なソリューションを提供します。",
                ),
                array(
                    'features1_content_title' => "アフターサポート",
                    'features1_content_text' => "提案後も、アフターサポートをしっかりと行い、お客様との信頼関係を築きます。",
                ),
            )),
        ),
        array(
            'features1_text' => array('type' => 'value','value' => "法人営業は、お客様のビジネス課題に対して、最適なソリューションをご提案します。長年培ったノウハウと確かな技術力を持つスタッフが、お客様とともに課題解決に取り組みます。"),
            'features1_content' => array('type' => 'value','value' => array(
                array(
                    'features1_content_title' => "ニーズに合わせたカスタマイズ",
                    'features1_content_text' => "お客様のビジネスニーズに合わせて、最適なサービスを提供します。",
                ),
                array(
                    'features1_content_title' => "コンサルティングサービス",
                    'features1_content_text' => "お客様のビジネス課題を把握し、適切なコンサルティングを行います。",
                ),
                array(
                    'features1_content_title' => "継続的なアフターサポート",
                    'features1_content_text' => "サービス提供後も、継続的なアフターサポートを行い、お客様のビジネスに貢献します。",
                ),
            )),
        ),
    );
}
elseif(@$_POST['select_jobtype'] == '受付・一般事務'){
    $array_generate_toppage_recruit_features1s = array(
        array(
            'features1_text' => array(
                'type' => 'value',
                'value' => "当社では、受付業務や一般事務に関する様々な業務を担当しています。お客様からのお問い合わせやご依頼に迅速かつ丁寧に対応し、スムーズな業務遂行に努めています。"
            ),
            'features1_content' => array(
                'type' => 'value',
                'value' => array(
                    array(
                        'features1_content_title' => "来客対応",
                        'features1_content_text' => "当社に来られたお客様を迎え、お茶出しや受付対応を行います。"
                    ),
                    array(
                        'features1_content_title' => "電話対応",
                        'features1_content_text' => "お客様からのお問い合わせに対し、丁寧かつ迅速に対応し、必要な情報を提供します。"
                    ),
                    array(
                        'features1_content_title' => "書類管理",
                        'features1_content_text' => "書類の整理やファイリングなど、一般事務に関する業務を行います。"
                    ),
                )
            ),
        ),
        array(
            'features1_text' => array(
                'type' => 'value',
                'value' => "当社の受付・一般事務担当者は、お客様からの問い合わせやご要望に対し、素早く的確に対応しています。また、様々な書類の作成や管理にも力を入れ、社内の業務効率化に貢献しています。"
            ),
            'features1_content' => array(
                'type' => 'value',
                'value' => array(
                    array(
                        'features1_content_title' => "来客対応",
                        'features1_content_text' => "当社にお越しいただいたお客様を心よくお迎えし、ご希望に合わせたサポートを行います。"
                    ),
                    array(
                        'features1_content_title' => "電話応対",
                        'features1_content_text' => "お客様からのお問い合わせには、明るく迅速に対応し、適切な情報提供を心がけています。"
                    ),
                    array(
                        'features1_content_title' => "書類作成",
                        'features1_content_text' => "報告書や資料作成など、一般事務に必要な書類を正確かつ迅速に作成いたします。"
                    ),
                )
            )
        ),
    );
}
elseif(@$_POST['select_jobtype'] == '医療事務・介護事務'){
    $array_generate_toppage_recruit_features1s = array(
        array(
            'features1_text' => array(
                'type' => 'value',
                'value' => "当社の医療事務・介護事務担当者は、医療や介護の現場を支える重要な存在です。診療や介護の記録や請求書の作成、患者様やその家族とのやり取りなど、様々な業務に取り組んでいます。"
            ),
            'features1_content' => array(
                'type' => 'value',
                'value' => array(
                    array(
                        'features1_content_title' => "診療記録管理",
                        'features1_content_text' => "医師の診療内容や看護師の処置内容などを正確に記録し、データ入力やファイリングを行います。"
                    ),
                    array(
                        'features1_content_title' => "請求業務",
                        'features1_content_text' => "患者様や保険会社への請求書作成や請求処理を行い、スムーズな医療・介護サービスを提供するための支援を行います。"
                    ),
                    array(
                        'features1_content_title' => "患者・家族対応",
                        'features1_content_text' => "医療・介護に関する相談や問い合わせに対応し、丁寧かつ迅速な対応を心がけます。"
                    ),
                )
            ),
        ),
        array(
            'features1_text' => array(
                'type' => 'value',
                'value' => "当社の医療事務・介護事務担当者は、医療現場や介護施設で必要とされる様々な業務を担当しています。日々変化する状況に柔軟に対応し、利用者様やそのご家族との信頼関係を築いています。"
            ),
            'features1_content' => array(
                'type' => 'value',
                'value' => array(
                    array(
                        'features1_content_title' => "介護サービスの調整",
                        'features1_content_text' => "利用者様やご家族との連絡調整を行い、介護サービス提供のスムーズな運営を支援します。"
                    ),
                    array(
                        'features1_content_title' => "書類管理",
                        'features1_content_text' => "介護保険の申請書や各種手続きに必要な書類を整理し、正確かつ迅速な処理を行います。"
                    ),
                    array(
                        'features1_content_title' => "医療・介護関連業務",
                        'features1_content_text' => "診療報酬の請求書作成や処方箋のデータ入力、病院の内部統制に関する業務などを担当しています。"
                    ),
                )
            ),
        ),
    );
}
elseif(@$_POST['select_jobtype'] == '施工管理・現場監督'){
    $array_generate_toppage_recruit_features1s = array(
        array(
            'features1_text' => array(
                'type' => 'value',
                'value' => "当社の施工管理・現場監督は、建設現場における品質・安全・コストの管理を担当しています。工程管理や協力会社との調整、施工図書の作成など、多岐にわたる業務に取り組んでいます。"
            ),
            'features1_content' => array(
                'type' => 'value',
                'value' => array(
                    array(
                        'features1_content_title' => "安全管理",
                        'features1_content_text' => "労働災害の防止をはじめ、現場での安全確保に取り組みます。必要な安全教育を実施し、危険箇所のチェックや点検を行います。"
                    ),
                    array(
                        'features1_content_title' => "進捗管理",
                        'features1_content_text' => "施工図書や工程表をもとに、現場の進捗管理を行います。協力会社や関連部署との調整も重要なタスクです。"
                    ),
                    array(
                        'features1_content_title' => "品質管理",
                        'features1_content_text' => "建設物の品質管理にも力を入れ、検査・検収までの一連の流れを管理します。施工図書の作成や現場監督の指導により、高品質な建設物の完成を目指します。"
                    ),
                )
            ),
        ),
        array(
            'features1_text' => array(
                'type' => 'value',
                'value' => "当社の施工管理・現場監督は、建設プロジェクトの成功に向けて、多くの責任を負っています。現場での品質管理、工程管理、安全管理を徹底し、クライアントの信頼を確立しています。"
            ),
            'features1_content' => array(
                'type' => 'value',
                'value' => array(
                    array(
                        'features1_content_title' => "施工図書の作成",
                        'features1_content_text' => "施工図書は、建築物の設計者が作成した図面をもとに作成されます。現場で必要な図面や資料を集め、正確な施工図書を作成することが重要です。"
                    ),
                    array(
                        'features1_content_title' => "現場監督の指導",
                        'features1_content_text' => "現場監督は、作業員や協力会社とのコミュニケーションを密に取り、現場作業の指揮をとります。安全確保や工程管理、品質管理など、施工全体を見渡しながら的確な指導を行います。"
                    ),
                    array(
                        'features1_content_title' => "工程管理",
                        'features1_content_text' => "建設工事の進捗管理は、完成予定日を守るために欠かせません。工程表に従って、各作業の進捗を確認し、必要に応じて調整を行います。"
                    ),
                )
            ),
        ),
    );
}
elseif(@$_POST['select_jobtype'] == '土木技術者'){
    $array_generate_toppage_recruit_features1s = array(
        array(
            'features1_text' => array(
                'type' => 'value',
                'value' => "当社の土木技術者は、橋梁や道路などのインフラ整備に携わっています。工事計画や施工図書の作成、現場監督など、多岐にわたる業務を担当し、地域の発展に貢献しています。"
            ),
            'features1_content' => array(
                'type' => 'value',
                'value' => array(
                    array(
                        'features1_content_title' => "工事計画の立案",
                        'features1_content_text' => "地域のニーズや予算、法令に基づき、工事計画を立案します。現地調査や調査報告書の作成、施工図書の作成なども行います。"
                    ),
                    array(
                        'features1_content_title' => "施工管理",
                        'features1_content_text' => "現場監督や作業員とのコミュニケーションを密に取り、工程管理、品質管理、安全管理などを徹底します。資材調達や協力会社との調整など、土木工事全般にわたる業務です。"
                    ),
                    array(
                        'features1_content_title' => "施工図書の作成",
                        'features1_content_text' => "建設物の図面をもとに、正確な施工図書を作成します。3D-CADを使った図面作成や、自動車CADを使った現地調査などにも取り組んでいます。"
                    ),
                )
            ),
        ),
        array(
            'features1_text' => array(
                'type' => 'value',
                'value' => "当社の土木技術者は、交通・環境・エネルギーなど、社会インフラを支える重要な役割を担っています。現場での調査や測量、施工図書の作成、現場監督など、幅広い業務に取り組んでいます。"
            ),
            'features1_content' => array(
                'type' => 'value',
                'value' => array(
                    array(
                        'features1_content_title' => "現地調査",
                        'features1_content_text' => "工事が行われる現場の地形や環境、周辺の施設などを調査します。必要に応じて、地盤調査や地質調査も行います。"
                    ),
                    array(
                        'features1_content_title' => "測量",
                        'features1_content_text' => "施工図書を作成するために、現地で必要な測量を行います。GPS測量やレーザー測量など、最新の測量技術を取り入れています。"
                    ),
                    array(
                        'features1_content_title' => "現場監督",
                        'features1_content_text' => "施工図書に従って、建設現場の進捗管理や品質管理、安全管理を行います。協力会社との調整も重要なタスクです。"
                    ),
                )
            ),
        ),
    );
}
elseif(@$_POST['select_jobtype'] == '電気工事士'){
    $array_generate_toppage_recruit_features1s = array(
        array(
            'features1_text' => array(
                'type' => 'value',
                'value' => "電気工事士は、電気設備の取り付けや修理、点検、保守などを担当します。家庭用からビル・工場などの大規模な電気設備まで幅広い分野で活躍し、社会の発展に貢献しています。"
            ),
            'features1_content' => array(
                'type' => 'value',
                'value' => array(
                    array(
                        'features1_content_title' => "配線の取り付け",
                        'features1_content_text' => "建物内や工場の配線を取り付けます。電気回路を理解し、様々な配線方法を用いて、正確かつ安全な取り付けを行います。"
                    ),
                    array(
                        'features1_content_title' => "保守・点検",
                        'features1_content_text' => "建物や工場などの電気設備を定期的に点検し、不具合があれば修理や交換を行います。また、設備の劣化や老朽化によるリニューアル工事なども担当します。"
                    ),
                    array(
                        'features1_content_title' => "プログラム設計",
                        'features1_content_text' => "制御盤などに使用されるプログラムの設計やプログラマブルロジックコントローラ（PLC）のプログラミングなども行います。最新技術の習得にも取り組みます。"
                    ),
                )
            ),
        ),
        array(
            'features1_text' => array(
                'type' => 'value',
                'value' => "電気工事士は、電気設備の施工、点検、保守などを行います。家庭用から産業用まで、あらゆる種類の電気設備に携わります。常に最新技術を追い求め、社会インフラの安定的な供給に貢献しています。"
            ),
            'features1_content' => array(
                'type' => 'value',
                'value' => array(
                    array(
                        'features1_content_title' => "設備の施工",
                        'features1_content_text' => "工場やビル、公共施設などに必要な電気設備の取り付け・施工を行います。図面を読み解き、正確な配線や配電盤の設置を行います。"
                    ),
                    array(
                        'features1_content_title' => "保守・点検",
                        'features1_content_text' => "設備の故障や劣化を予防するため、定期的な点検や保守作業を行います。また、修理や交換作業も担当します。最新の設備に対応するためにも、常に最新技術を習得しています。"
                    ),
                    array(
                        'features1_content_title' => "配電盤の制御プログラム作成",
                        'features1_content_text' => "大規模な電気設備の制御盤に使われるプログラムを設計・作成します。PLCを使用した制御や、電気設備の制御盤内に組み込まれる人間工学に基づいた操作パネルの設計・作成も担当します。"
                    ),
                )
            ),
        ),
    );
}
elseif(@$_POST['select_jobtype'] == '内装工事'){
    $array_generate_toppage_recruit_features1s = array(
        array(
            'features1_text' => array(
                'type' => 'value',
                'value' => "内装工事には、住宅や店舗などの内装に関する工事が含まれます。床・壁・天井の塗装、クロス張り、照明器具の設置など、様々な工程があります。お客様のご要望に合わせたデザインや色彩の提案も重要な仕事のひとつです。"
            ),
            'features1_content' => array(
                'type' => 'value',
                'value' => array(
                    array(
                        'features1_content_title' => "床の施工",
                        'features1_content_text' => "フローリングやカーペット、タイルなど、お客様の要望に合わせた床材を施工します。床材の種類や色合い、施工方法などを選定し、美しく仕上げます。"
                    ),
                    array(
                        'features1_content_title' => "壁・天井の塗装",
                        'features1_content_text' => "壁や天井にクロスを張る前に、下地処理や塗装を行います。クロスの張り方によっては、表面処理が必要となる場合もあります。素材の特性や、施工環境に合わせて、塗料や塗装方法を選定します。"
                    ),
                    array(
                        'features1_content_title' => "照明器具の設置",
                        'features1_content_text' => "お客様の要望に合わせた照明器具を設置します。天井埋め込み型やスポットライト、ペンダントライトなど、多種多様な種類の照明器具に対応できます。照明の配置や光の強さなども重要なポイントです。"
                    ),
                )
            ),
        ),
        array(
            'features1_text' => array(
                'type' => 'value',
                'value' => "内装工事には、住宅や店舗の内装に関する工事が含まれます。壁や天井の塗装、フローリングやカーペットの施工、照明器具の設置などが主な仕事です。お客様の要望に合わせたデザインや色彩の提案も重要な仕事のひとつです。"
            ),
            'features1_content' => array(
                'type' => 'value',
                'value' => array(
                    array(
                        'features1_content_title' => "デザイン提案",
                        'features1_content_text' => "お客様のイメージに合わせた内装デザインを提案します。色彩や素材の選定、壁や天井の模様、照明器具の配置など、お客様の要望に沿った内装デザインを実現します。"
                    ),
                    array(
                        'features1_content_title' => "フローリング施工",
                        'features1_content_text' => "フローリングの施工は、床面積やお客様の希望に応じて、材質や色彩、施工方法を選定します。しっかりと下地を整え、フローリング材を美しく施工します。"
                    ),
                    array(
                        'features1_content_title' => "天井・壁のクロス張り",
                        'features1_content_text' => "天井や壁のクロス張りは、下地処理から始まります。壁や天井の形状に合わせて、クロスのカットや縫合を行い、美しく仕上げます。"
                    ),
                )
            ),
        ),
    );
}
elseif(@$_POST['select_jobtype'] == '建築塗装工事'){
    $array_generate_toppage_recruit_features1s = array(
        array(
            'features1_text' => array(
                'type' => 'value',
                'value' => "建築塗装工事には、建物外壁や屋根の塗装が主な仕事です。塗装によって、建物の外観を美しく保つだけでなく、防水性や耐久性も向上させます。また、建物内部の塗装も行うことがあります。"
            ),
            'features1_content' => array(
                'type' => 'value',
                'value' => array(
                    array(
                        'features1_content_title' => "外壁塗装",
                        'features1_content_text' => "建物外壁の劣化や色あせを防ぐため、塗装を行います。下地処理をしっかり行い、高品質な塗料を使い、美しく仕上げます。"
                    ),
                    array(
                        'features1_content_title' => "屋根塗装",
                        'features1_content_text' => "建物の屋根にも塗装が必要です。塗装によって、劣化や色あせを防ぎ、防水性や耐久性も向上させます。"
                    ),
                    array(
                        'features1_content_title' => "内装塗装",
                        'features1_content_text' => "建物内部の塗装も行います。色彩や塗料の選定には、お客様のご要望や用途を考慮して、丁寧に対応します。"
                    ),
                )
            ),
        ),
        array(
            'features1_text' => array(
                'type' => 'value',
                'value' => "建築塗装工事は、建物の外壁や屋根の塗装を行います。塗装によって、建物の美観を保ち、防水性や耐久性も向上させます。また、内装の塗装も行うことがあります。"
            ),
            'features1_content' => array(
                'type' => 'value',
                'value' => array(
                    array(
                        'features1_content_title' => "外壁塗装",
                        'features1_content_text' => "外壁の劣化や色あせを防ぐため、塗装を行います。下地処理を丁寧に行い、高品質な塗料を使用することで、美しい仕上がりを実現します。"
                    ),
                    array(
                        'features1_content_title' => "屋根塗装",
                        'features1_content_text' => "屋根にも塗装が必要です。塗装によって、屋根の劣化や色あせを防ぎ、防水性や耐久性を向上させます。"
                    ),
                    array(
                        'features1_content_title' => "内装塗装",
                        'features1_content_text' => "内装の塗装も行います。色彩や塗料の選定には、お客様のご要望や用途を考慮し、丁寧に対応します。"
                    ),
                )
            ),
        ),
    );
}
elseif(@$_POST['select_jobtype'] == '左官工事'){
    $array_generate_toppage_recruit_features1s = array(
        array(
            'features1_text' => array(
                'type' => 'value',
                'value' => "左官工事は、建物の内外装の仕上げや装飾を行います。主に、漆喰や石膏ボードの壁や天井に塗り、タイルやレンガなどで装飾することがあります。また、外壁の防水・断熱材としても使用されます。"
            ),
            'features1_content' => array(
                'type' => 'value',
                'value' => array(
                    array(
                        'features1_content_title' => "漆喰仕上げ",
                        'features1_content_text' => "漆喰を使用した仕上げ工事を行います。漆喰は、湿度調整効果があり、室内の快適性を高めることができます。また、耐火性もあります。"
                    ),
                    array(
                        'features1_content_title' => "タイル貼り",
                        'features1_content_text' => "タイルを使用した装飾工事を行います。タイルは、高い耐久性と防水性を持っており、美しいデザイン性も兼ね備えています。"
                    ),
                    array(
                        'features1_content_title' => "防水・断熱工事",
                        'features1_content_text' => "左官工事は、外壁の防水・断熱材としても使用されます。施工によって、建物の外壁を長期間にわたって保護し、住環境の改善にもつながります。"
                    ),
                )
            ),
        ),
        array(
            'features1_text' => array(
                'type' => 'value',
                'value' => "左官工事は、建物の内外装における仕上げ工事の一種で、漆喰やモルタルなどを使用して壁や天井の表面を整える作業を行います。また、タイル張りやレンガ積みなどの装飾工事も含まれます。"
            ),
            'features1_content' => array(
                'type' => 'value',
                'value' => array(
                    array(
                        'features1_content_title' => "漆喰工事",
                        'features1_content_text' => "漆喰は、湿気を調整する効果があり、暖かみのある仕上がりになることから、室内の壁や天井に使用されます。職人の技術が必要なため、手仕事で施工されることが多いです。"
                    ),
                    array(
                        'features1_content_title' => "タイル工事",
                        'features1_content_text' => "タイル工事は、タイルを壁や床に張り付けることで、美しく耐久性の高い仕上がりを実現することができます。タイルには様々な種類があり、デザイン性に優れていることが特徴です。"
                    ),
                    array(
                        'features1_content_title' => "レンガ積み工事",
                        'features1_content_text' => "レンガ積み工事は、建物の外観に味わい深さを加えることができる工法のひとつです。レンガには様々な色や形状があり、施工することで個性的な外観を実現することができます。"
                    ),
                )
            ),
        ),
    );
}
elseif(@$_POST['select_jobtype'] == '足場職人'){
    $array_generate_toppage_recruit_features1s = array(
        array(
            'features1_text' => array('type' => 'value','value' => "足場職人は、建設現場において、高所での作業に関する支援業務を担当します。足場の組み立て、解体、修繕等の仕事に加え、現場での危険予知や安全管理にも責任を持ちます。"),
            'features1_content' => array('type' => 'value','value' => array(
                array(
                    'features1_content_title' => "足場の組み立て",
                    'features1_content_text' => "建物の形状に応じた足場の組み立てを行い、安定した状態を維持します。",
                ),
                array(
                    'features1_content_title' => "足場の解体",
                    'features1_content_text' => "工事が終わった後は、足場を解体し、撤去します。",
                ),
                array(
                    'features1_content_title' => "現場での安全管理",
                    'features1_content_text' => "危険予知や安全管理を行い、事故の予防に努めます。",
                ),
            )),
        ),
        array(
            'features1_text' => array(
                'type' => 'value',
                'value' => "足場職人として、建築物の安全な作業環境を提供します。足場を組む作業から解体する作業まで、幅広い業務に携わります。"
            ),
            'features1_content' => array(
                'type' => 'value',
                'value' => array(
                    array(
                        'features1_content_title' => "足場の設置・解体作業",
                        'features1_content_text' => "建築物に必要な足場を設置する作業や、建築物が完成した後に足場を解体する作業を行います。",
                    ),
                    array(
                        'features1_content_title' => "安全管理",
                        'features1_content_text' => "現場の安全管理を行い、事故の防止に努めます。安全靴・ヘルメットの着用や、足場の構造や強度などをチェックします。",
                    ),
                    array(
                        'features1_content_title' => "現場の準備作業",
                        'features1_content_text' => "足場を組む前に、現場の土地を整えたり、足場を組む場所に対しての準備作業を行います。足場に必要な材料を搬入したり、足場の構造を決定します。",
                    ),
                )
            ),
        ),
    );
}
elseif(@$_POST['select_jobtype'] == '型枠大工'){
    $array_generate_toppage_recruit_features1s = array(
        array(
            'features1_text' => array('type' => 'value','value' => "型枠大工には、建物の基礎となる木材の枠組みをつくる仕事があります。建物の安定性を保つために、正確で丈夫な仕事が求められます。"),
            'features1_content' => array('type' => 'value','value' => array(
                array(
                    'features1_content_title' => "型枠設置",
                    'features1_content_text' => "建物の基礎となる型枠の設置を行います。地盤の状態や設計図面に基づき、正確な位置に型枠を組み立てます。",
                ),
                array(
                    'features1_content_title' => "コンクリート打設",
                    'features1_content_text' => "型枠によって作られた空洞にコンクリートを流し込み、固めます。コンクリートの量や流し込み方、固め方などによって、建物の耐久性が決まります。",
                ),
                array(
                    'features1_content_title' => "解体作業",
                    'features1_content_text' => "建物の解体作業において、型枠大工は建物の構造を正確に理解し、解体作業の計画や方法を立てます。また、解体後には、建物から出た廃材の処理も行います。",
                ),
            )),
        ),
        array(
            'features1_text' => array('type' => 'value','value' => "型枠大工は、建物の骨組みを作る大切な仕事です。正確な測定や組み立て技術が必要であり、建物の耐久性や安全性に大きな影響を与えます。"),
            'features1_content' => array('type' => 'value','value' => array(
                array(
                    'features1_content_title' => "型枠設計",
                    'features1_content_text' => "建物の基礎となる型枠の設計を行います。図面や仕様書に基づき、建物のサイズ、形状、強度などを考慮し、適切な素材を選定して設計を行います。",
                ),
                array(
                    'features1_content_title' => "型枠製作",
                    'features1_content_text' => "型枠の製作には、木材や金属などの素材を使用します。正確な測定や切削技術が必要であり、安定性や強度を確保するために、職人技が求められます。",
                ),
                array(
                    'features1_content_title' => "型枠解体",
                    'features1_content_text' => "建物が完成した後には、型枠を解体する作業が必要です。建物の形状や構造を正確に理解し、型枠を解体する計画や方法を立てます。また、解体後には、廃材の処理も行います。",
                ),
            )),
        ),
    );
}
elseif(@$_POST['select_jobtype'] == '鉄筋工'){
    $array_generate_toppage_recruit_features1s = array(
        array(
            'features1_text' => array('type' => 'value','value' => "鉄筋工は、建物の鉄骨構造物を作成する仕事です。建物の耐久性や安全性を担保するため、正確な測定や緻密な計算が求められます。"),
            'features1_content' => array('type' => 'value','value' => array(
                array(
                    'features1_content_title' => "鉄筋組立",
                    'features1_content_text' => "建物の鉄骨構造物の設計図面をもとに、鉄筋をカットし、曲げ、組み立てます。鉄筋の間隔や組み合わせ、結束方法などによって、建物の耐震性や強度が決まります。",
                ),
                array(
                    'features1_content_title' => "コンクリート流し込み",
                    'features1_content_text' => "鉄筋が組み立てられた空洞に、コンクリートを流し込みます。正確な量や流し込み方、固め方によって、建物の強度や耐久性が決まります。",
                ),
                array(
                    'features1_content_title' => "鉄筋解体",
                    'features1_content_text' => "建物の解体作業において、鉄筋工は鉄骨構造物の解体を行います。建物の形状や構造を正確に理解し、解体作業の計画や方法を立てます。また、解体後には、鉄筋のリサイクルや廃材の処理も行います。",
                ),
            )),
        ),
        array(
            'features1_text' => array('type' => 'value','value' => "鉄筋工は、建物の鉄骨構造物を製作する重要な役割を担います。正確な測定や組み立て技術が求められ、建物の強度や耐久性に大きく関わります。"),
            'features1_content' => array('type' => 'value','value' => array(
                array(
                    'features1_content_title' => "鉄筋製作",
                    'features1_content_text' => "建物の鉄骨構造物に使用される鉄筋を、製作します。測定や切削技術が必要であり、鉄筋の強度や形状に合わせて、曲げたり結束したりします。",
                ),
                array(
                    'features1_content_title' => "鉄骨組立",
                    'features1_content_text' => "建物の鉄骨構造物を設計図面に基づき、鉄筋と結合部材を使用して組み立てます。正確な測定や結束技術が求められ、鉄骨の間隔や結合方法によって、建物の強度や耐震性が決まります。",
                ),
                array(
                    'features1_content_title' => "鉄筋解体",
                    'features1_content_text' => "建物の解体作業において、鉄筋工は鉄骨構造物の解体を行います。建物の形状や構造を正確に理解し、解体作業の計画や方法を立てます。また、解体後には、鉄筋のリサイクルや廃材の処理も行います。",
                ),
            )),
        ),
    );
}
elseif(@$_POST['select_jobtype'] == '配管工・溶接工'){
    $array_generate_toppage_recruit_features1s = array(
        array(
            'features1_text' => array('type' => 'value','value' => "配管工・溶接工は、建物の配管や機械の製作、修理などを行う重要な仕事です。正確な測定や技術が求められ、建物や機械の安全性や耐久性に大きく関わります。"),
            'features1_content' => array('type' => 'value','value' => array(
                array(
                    'features1_content_title' => "配管工事",
                    'features1_content_text' => "建物内外の配管工事を行います。図面や仕様書に基づき、水道、ガス、空調、排水などの配管を取り付け、接続します。正確な測定や配管技術が求められ、施工後には漏水や詰まりのないように確認作業を行います。",
                ),
                array(
                    'features1_content_title' => "溶接作業",
                    'features1_content_text' => "鉄骨や金属部品の製作や修理など、溶接技術を使用する作業を行います。正確な測定や切削技術が必要であり、素材の種類や厚みに応じた溶接方法を選択して行います。",
                ),
                array(
                    'features1_content_title' => "機械修理",
                    'features1_content_text' => "建物内に設置された機械の修理や保守を行います。機械の動作チェックや部品の交換、メンテナンスなどを行い、故障やトラブルを予防します。また、機械の改良や改善の提案も行います。",
                ),
            )),
        ),
        array(
            'features1_text' => array('type' => 'value','value' => "配管工・溶接工は、建物や設備の安全性や機能性に関わる重要な役割を担います。正確な測定や技術が求められ、安全性や品質に配慮して作業を行います。"),
            'features1_content' => array('type' => 'value','value' => array(
                array(
                    'features1_content_title' => "配管設備施工",
                    'features1_content_text' => "建物内外の配管設備の施工を行います。水道、ガス、空調、排水など、各種の配管設備を施工し、適切な接続を行います。また、施工後には漏水や水漏れの確認を行います。",
                ),
                array(
                    'features1_content_title' => "溶接・加工",
                    'features1_content_text' => "鉄骨や金属部品の製作や修理に使用する溶接技術を使用し、部品を加工・組立・修理します。正確な測定や切削技術が必要であり、様々な素材の種類や厚みに合わせた溶接技術が求められます。",
                ),
                array(
                    'features1_content_title' => "機器メンテナンス",
                    'features1_content_text' => "工場や設備に設置された機械の保守点検や修理を行います。正確な測定や動作チェックが必要であり、故障やトラブルを予防するためのメンテナンスや改修提案も行います。",
                ),
            )),
        ),
    );
}
elseif(@$_POST['select_jobtype'] == '介護士・ケアマネージャー'){
    $array_generate_toppage_recruit_features1s = array(
        array(
            'features1_text' => array('type' => 'value','value' => "介護士・ケアマネージャーは、高齢者や身体障害者など、さまざまな方に対してケアや支援を提供する仕事です。日常生活のサポート、医療処置や薬の管理、健康管理など、多岐にわたる業務を担当します。"),
            'features1_content' => array('type' => 'value','value' => array(
                array(
                    'features1_content_title' => "入浴介助",
                    'features1_content_text' => "入浴介助を行います。高齢者や身体障害者の方々の身体を洗い、入浴をサポートすることで、清潔な環境を提供します。",
                ),
                array(
                    'features1_content_title' => "口腔ケア",
                    'features1_content_text' => "口腔ケアを行います。食事や会話を円滑にするため、歯磨きやうがいなどのケアを提供します。",
                ),
                array(
                    'features1_content_title' => "介護計画作成",
                    'features1_content_text' => "介護計画の策定や評価を行います。入居者の健康状態や環境に合わせて、適切なケアプランを作成し、その適正性を確認します。",
                ),
            )),
        ),
        array(
            'features1_text' => array('type' => 'value','value' => "介護士・ケアマネージャーは、高齢者や身体障害者など、様々な方に対して医療や生活面でのサポートを提供する仕事です。"),
            'features1_content' => array('type' => 'value','value' => array(
                array(
                    'features1_content_title' => "食事介助",
                    'features1_content_text' => "食事介助を行います。高齢者や身体障害者の方々の食事をサポートすることで、栄養バランスを保ち、健康な体づくりを支援します。",
                ),
                array(
                    'features1_content_title' => "診療補助",
                    'features1_content_text' => "医療従事者と連携し、診療補助を行います。薬の管理や医療機器の操作、病状の観察などを担当し、入居者の健康維持に貢献します。",
                ),
                array(
                    'features1_content_title' => "生活支援",
                    'features1_content_text' => "入居者の日常生活をサポートします。掃除や洗濯、お風呂のサポートなど、入居者が快適な生活を送れるように支援します。",
                ),
            )),
        ),
    );
}
elseif(@$_POST['select_jobtype'] == '看護師・准看護師'){
    $array_generate_toppage_recruit_features1s = array(
        array(
            'features1_text' => array('type' => 'value','value' => "看護師・准看護師は、病院やクリニック、介護施設などで、患者さんの健康状態の観察や看護処置を行う仕事です。"),
            'features1_content' => array('type' => 'value','value' => array(
                array(
                    'features1_content_title' => "患者の健康観察",
                    'features1_content_text' => "患者の体調や病状を観察し、適切な処置を行います。血圧や体温、脈拍などのバイタルサインの測定や、症状の確認を行い、病状の変化にすばやく対応します。",
                ),
                array(
                    'features1_content_title' => "医師の指示に基づく処置",
                    'features1_content_text' => "医師の指示に基づき、薬の投与や点滴の設置、手術の準備などを行います。医師との連携が重要であり、正確で迅速な処置を行うことが求められます。",
                ),
                array(
                    'features1_content_title' => "患者や家族へのサポート",
                    'features1_content_text' => "患者や家族の方々に、病気や治療についての説明やサポートを行います。心のケアや安心感を与えることで、患者の治療に貢献します。",
                ),
            )),
        ),
        array(
            'features1_text' => array('type' => 'value','value' => "看護師・准看護師は、医療現場において、患者さんの健康をサポートする重要な仕事です。"),
            'features1_content' => array('type' => 'value','value' => array(
                array(
                    'features1_content_title' => "診療補助",
                    'features1_content_text' => "医師や看護師の指示に基づき、患者の受付やカルテの作成、医療機器の準備など、診療に必要な補助業務を担当します。",
                ),
                array(
                    'features1_content_title' => "看護ケア",
                    'features1_content_text' => "患者の身体的な状態や症状を観察し、看護計画に基づいた処置やケアを提供します。薬剤の投与や点滴の管理なども行います。",
                ),
                array(
                    'features1_content_title' => "情報伝達",
                    'features1_content_text' => "患者の状態や治療の進捗状況を、医師や他の職種と共有し、適切な医療サービスを提供します。また、患者や家族とのコミュニケーションも重要な業務です。",
                ),
            )),
        ),
    );
}
elseif(@$_POST['select_jobtype'] == '運転手・ドライバー'){
    $array_generate_toppage_recruit_features1s = array(
        array(
            'features1_text' => array('type' => 'value','value' => "運転手・ドライバーは、輸送業界において、安全かつ迅速に荷物や人を目的地まで運ぶ重要な役割を担います。"),
            'features1_content' => array('type' => 'value','value' => array(
                array(
                    'features1_content_title' => "車両管理",
                    'features1_content_text' => "車両のメンテナンスや修理、燃料補給、洗車などを行い、常に安全な状態を保ちます。",
                ),
                array(
                    'features1_content_title' => "ルート選定",
                    'features1_content_text' => "効率的かつ迅速に目的地に到達するためのルートを選定し、渋滞や工事などの状況に応じて運転を調整します。",
                ),
                array(
                    'features1_content_title' => "荷物の取り扱い",
                    'features1_content_text' => "荷物の積み込みや降ろし、梱包や荷解きなど、荷物の取り扱いにも細心の注意を払います。顧客の要望や配送先の特性に応じた配慮も必要です。",
                ),
            )),
        ),
        array(
            'features1_text' => array('type' => 'value','value' => "運転手・ドライバーの業務は、物流や移動をスムーズに進めることです。安全運転やスケジュール管理、顧客対応など、さまざまなスキルが求められます。"),
            'features1_content' => array('type' => 'value','value' => array(
                array(
                    'features1_content_title' => "運転技術",
                    'features1_content_text' => "様々な条件下での運転に必要な技術を習得し、安全かつスムーズな運転を行います。天候や道路状況などに応じて、運転スタイルを調整することも求められます。",
                ),
                array(
                    'features1_content_title' => "顧客サービス",
                    'features1_content_text' => "荷物の配送先やスケジュール変更など、顧客とのコミュニケーションをスムーズに行い、サービスの質を高めます。また、トラブルや問題が発生した場合には、即座に対応し、解決する力も求められます。",
                ),
                array(
                    'features1_content_title' => "車両管理",
                    'features1_content_text' => "車両の整備や点検、清掃などを適切に行い、安全な運転を実現します。また、燃費改善や装備の改良など、業務の改善に貢献することも重要です。",
                ),
            )),
        ),
    );
}
elseif(@$_POST['select_jobtype'] == '飲食店店長'){
    $array_generate_toppage_recruit_features1s = array(
        array(
            'features1_text' => array(
                'type' => 'value',
                'value' => "飲食店店長は、スタッフの教育や業務の管理、顧客対応など多岐にわたる業務が求められます。"),
            'features1_content' => array(
                'type' => 'value',
                'value' => array(
                    array(
                        'features1_content_title' => "スタッフの教育",
                        'features1_content_text' => "スタッフの採用、教育、シフト管理などの業務を担当します。スタッフの育成には、研修やワークショップを企画し、定期的なフィードバックを行います。",
                    ),
                    array(
                        'features1_content_title' => "業務の管理",
                        'features1_content_text' => "売上管理、在庫管理、発注管理、予算管理など、店舗の業務全般を管理します。スタッフとのコミュニケーションを密にし、お客様にとって最高のサービスを提供します。",
                    ),
                    array(
                        'features1_content_title' => "顧客対応",
                        'features1_content_text' => "お客様へのサービス提供や問い合わせ対応を行います。不満やクレームに対応することもありますが、一方でリピート率を上げるために積極的にコミュニケーションを取り、お客様に満足してもらえるよう努めます。",
                    ),
                ),
            ),
        ),
        array(
            'features1_text' => array('type' => 'value','value' => "飲食店店長は、売上管理、スタッフ教育、メニュー開発など多岐に渡る業務が求められます。"),
            'features1_content' => array('type' => 'value','value' => array(
                array(
                    'features1_content_title' => "売上管理",
                    'features1_content_text' => "売上目標の設定や、予算と実績の管理を行います。また、需要に合わせた予約管理や在庫管理も重要な業務です。",
                ),
                array(
                    'features1_content_title' => "スタッフ教育",
                    'features1_content_text' => "新人スタッフの教育から、キャリアアップのための研修まで幅広く担当します。スタッフのモチベーションアップのための工夫も必要です。",
                ),
                array(
                    'features1_content_title' => "メニュー開発",
                    'features1_content_text' => "お客様に喜ばれるメニューの企画、開発、実施を行います。季節ごとのメニューの提供や、健康的なメニューの開発など、創意工夫が求められます。",
                ),
            )),
        ),
    );
}
elseif(@$_POST['select_jobtype'] == 'ホールスタッフ・キッチンスタッフ'){
    $array_generate_toppage_recruit_features1s = array(
        array(
            'features1_text' => array('type' => 'value','value' => "当店では、ホールスタッフとキッチンスタッフが協力して、お客様に美味しい料理と心地よい空間を提供しています。ホールスタッフは、お客様とのコミュニケーションを大切にし、サービスを提供します。一方、キッチンスタッフは、お客様に提供する料理を調理し、美味しさと安全性を追求します。"),
            'features1_content' => array('type' => 'value','value' => array(
                array(
                    'features1_content_title' => "ホールスタッフ",
                    'features1_content_text' => "お客様の席への案内やオーダーの受付、料理の提供、空いたお皿やグラスの片付け、レジなど、様々な業務を行います。お客様とのコミュニケーションを大切にし、笑顔と心地よい空間づくりに努めます。",
                ),
                array(
                    'features1_content_title' => "キッチンスタッフ",
                    'features1_content_text' => "食材の仕入れや下準備、調理、盛り付け、洗い物など、キッチンでの業務を行います。美味しい料理を提供するために、安全性や衛生面にも気を配ります。ホールスタッフとの連携も重要で、スムーズなオーダーの処理やサービス提供に努めます。",
                ),
                array(
                    'features1_content_title' => "その他の業務",
                    'features1_content_text' => "ホールスタッフ・キッチンスタッフともに、レストランの清掃や備品管理、アルバイトスタッフの指導など、その他の業務も担当します。店舗の運営全般に関わることで、チームワークを大切にした業務になります。",
                ),
            )),
        ),
        array(
            'features1_text' => array('type' => 'value','value' => "ホールスタッフ・キッチンスタッフの業務は、お客様に快適な食事空間を提供するための様々な作業が含まれます。"),
            'features1_content' => array('type' => 'value','value' => array(
                array(
                    'features1_content_title' => "接客・オーダー取り",
                    'features1_content_text' => "お客様に対する接客やオーダーの取り方はお店の印象にも大きく影響します。笑顔での対応や細かい気配りが必要です。",
                ),
                array(
                    'features1_content_title' => "料理の調理・盛り付け",
                    'features1_content_text' => "キッチンスタッフは、注文を受けた料理の調理や盛り付けを担当します。食材の下処理や調理方法にもこだわりが求められます。",
                ),
                array(
                    'features1_content_title' => "店内の清掃・整理整頓",
                    'features1_content_text' => "ホールスタッフは、お客様が利用した後のテーブルの片付けや床の清掃、備品の補充など、店内の清掃や整理整頓を担当します。",
                ),
            )),
        ),
    );
}
elseif(@$_POST['select_jobtype'] == '美容師・理容師'){
    $array_generate_toppage_recruit_features1s = array(
        array(
            'features1_text' => array('type' => 'value','value' => "美容師・理容師は、お客様のニーズに合わせて髪型やヘアスタイルを提案し、施術を行います。また、お客様の髪質や頭皮の状態を考慮しながら、カットやカラー、パーマ、トリートメントなどの技術を駆使して、お客様の髪を美しく保ちます。"),
            'features1_content' => array('type' => 'value','value' => array(
                array(
                    'features1_content_title' => "カット技術",
                    'features1_content_text' => "お客様の髪質やクセを見極め、適切なカット技術を駆使して、お客様にとって最適なヘアスタイルを提案します。",
                ),
                array(
                    'features1_content_title' => "パーマ・カラー技術",
                    'features1_content_text' => "お客様の髪質やクセ、肌の色などを考慮しながら、パーマやカラーの技術を駆使して、お客様にとって最適なヘアスタイルを提案します。",
                ),
                array(
                    'features1_content_title' => "トリートメント技術",
                    'features1_content_text' => "お客様の髪の状態を見極め、適切なトリートメント技術を駆使して、お客様の髪を美しく保ちます。",
                ),
            )),
        ),
        array(
            'features1_text' => array('type' => 'value','value' => "美容師・理容師は、お客様のヘアスタイルを提案し、施術を行います。また、接客や予約管理、店舗運営なども行います。"),
            'features1_content' => array('type' => 'value','value' => array(
                array(
                    'features1_content_title' => "ヘアスタイル提案",
                    'features1_content_text' => "お客様に合ったヘアスタイルの提案や、トレンドに合わせたアドバイスを行います。お客様が求めるスタイルを理解し、技術とセンスを駆使して実現します。",
                ),
                array(
                    'features1_content_title' => "施術",
                    'features1_content_text' => "シャンプー、カット、パーマ、カラーなどの施術を行います。正確な技術と、お客様に安心して過ごしていただける接客が求められます。",
                ),
                array(
                    'features1_content_title' => "店舗運営",
                    'features1_content_text' => "予約管理やスタッフのシフト調整、在庫管理などの店舗運営業務を担当します。お客様に快適な空間を提供し、スタッフの働きやすい職場づくりも求められます。",
                ),
            )),
        ),
    );
}
elseif(@$_POST['select_jobtype'] == '空調・衛生設備技術者'){
    $array_generate_toppage_recruit_features1s = array(
        array(
            'features1_text' => array('type' => 'value','value' => "空調・衛生設備技術者は、建物内の冷暖房や換気、給排水などの設備管理を行います。"),
            'features1_content' => array('type' => 'value','value' => array(
                array(
                    'features1_content_title' => "空調設備管理",
                    'features1_content_text' => "冷暖房機や空気調和システムの定期点検・保守、故障時の修理作業を行います。",
                ),
                array(
                    'features1_content_title' => "衛生設備管理",
                    'features1_content_text' => "給水設備や排水設備、トイレやシャワールームなどの衛生設備の管理を行います。",
                ),
                array(
                    'features1_content_title' => "設備改修・更新",
                    'features1_content_text' => "老朽化した設備の改修や、より効率的で省エネな設備への更新を行います。",
                ),
            )),
        ),
        array(
            'features1_text' => array('type' => 'value','value' => "空調・衛生設備技術者は、建物の設備や機器の保守・修理を行います。空調設備や配管、電気設備など多岐に渡る分野で技術力を持ち、常に最新技術を研究・取り入れています。"),
            'features1_content' => array('type' => 'value','value' => array(
                array(
                    'features1_content_title' => "設備保守",
                    'features1_content_text' => "空調・衛生設備などの保守を行います。点検・調整、故障時の修理や部品交換などが主な業務となります。",
                ),
                array(
                    'features1_content_title' => "新設工事",
                    'features1_content_text' => "新しい建物や施設に設備を取り付ける工事を行います。設計・施工からメンテナンスまで一貫して担当することもあります。",
                ),
                array(
                    'features1_content_title' => "省エネ提案",
                    'features1_content_text' => "設備の運転効率を向上させ、エネルギー消費量を削減する提案を行います。最新の省エネ技術や機器を熟知し、お客様のニーズに合わせた提案を行います。",
                ),
            )),
        ),
    );
}
elseif(@$_POST['select_jobtype'] == 'Web系システムエンジニア'){
    $array_generate_toppage_recruit_features1s = array(
        array(
            'features1_text' => array('type' => 'value','value' => "Web系システムエンジニアは、Webアプリケーション開発やWebサイト制作など、Web系システムの設計・開発・保守などを行うエンジニアのことです。"),
            'features1_content' => array('type' => 'value','value' => array(
                array(
                    'features1_content_title' => "Webアプリケーション開発",
                    'features1_content_text' => "Webアプリケーションの設計・開発・保守を行います。プログラミング言語やフレームワークを使用し、機能開発やバグ修正を行います。",
                ),
                array(
                    'features1_content_title' => "Webサイト制作",
                    'features1_content_text' => "Webデザイナーと協力して、Webサイトの設計・制作を行います。HTML/CSS/JavaScriptを使用し、デザインからコーディングまで一貫して行います。",
                ),
                array(
                    'features1_content_title' => "システム保守・運用",
                    'features1_content_text' => "システムの運用・保守を行い、障害対応やパフォーマンスチューニングなどを行います。また、セキュリティ対策やバックアップなども担当します。",
                ),
            )),
        ),
        array(
            'features1_text' => array('type' => 'value','value' => "Web系システムエンジニアは、Webシステムの企画・開発・運用・保守を担当します。"),
            'features1_content' => array('type' => 'value','value' => array(
                array(
                    'features1_content_title' => "Webアプリケーションの開発",
                    'features1_content_text' => "新規開発や既存アプリケーションの改修を担当します。プログラミング言語やフレームワークに詳しく、常に最新技術を追い求めています。",
                ),
                array(
                    'features1_content_title' => "システムの運用・保守",
                    'features1_content_text' => "既存システムの不具合修正や改善を担当します。運用状況をモニタリングし、必要な対応を行います。",
                ),
                array(
                    'features1_content_title' => "顧客とのコミュニケーション",
                    'features1_content_text' => "顧客からの要望や問い合わせに対応し、要件定義や提案などのコミュニケーションを行います。",
                ),
            )),
        ),
    );
}
elseif(@$_POST['select_jobtype'] == '製造・生産技術者'){
    $array_generate_toppage_recruit_features1s = array(
        array(
            'features1_text' => array('type' => 'value','value' => "製造・生産技術者として、工場の生産ラインの改善や生産性向上に取り組んでいます。"),
            'features1_content' => array('type' => 'value','value' => array(
                array(
                    'features1_content_title' => "品質管理",
                    'features1_content_text' => "製品の品質管理に力を入れ、改善策を提案し品質向上に貢献しています。",
                ),
                array(
                    'features1_content_title' => "工程改善",
                    'features1_content_text' => "生産ラインの工程を見直し、改善提案を行い作業の効率化を実現しました。",
                ),
                array(
                    'features1_content_title' => "新規工場立ち上げ",
                    'features1_content_text' => "海外拠点において、新しい工場の立ち上げに関わり、設備の調達から生産開始までサポートしました。",
                ),
            )),
        ),
        array(
            'features1_text' => array('type' => 'value','value' => "製造・生産技術者は、生産ライン全体の生産性を向上させるために、様々な業務を行います。"),
            'features1_content' => array('type' => 'value','value' => array(
                array(
                    'features1_content_title' => "生産計画の策定",
                    'features1_content_text' => "生産計画を作成し、生産ラインの効率的な運用を支援します。"
                ),
                array(
                    'features1_content_title' => "生産技術の開発",
                    'features1_content_text' => "製造プロセスの改善や自動化など、新しい技術を導入し生産性の向上に取り組みます。"
                ),
                array(
                    'features1_content_title' => "品質検査の実施",
                    'features1_content_text' => "製品の品質を検査し、不良品の削減に取り組みます。"
                ),
            )),
        ),
    );
}
elseif(@$_POST['select_jobtype'] == '接客・サービス'){
    $array_generate_toppage_recruit_features1s = array(
        array(
            'features1_text' => array('type' => 'value','value' => "接客・サービス業では、お客様に対して笑顔や丁寧な接客でサービスを提供します。そのために、商品やサービスについての知識やコミュニケーション能力が求められます。"),
            'features1_content' => array('type' => 'value','value' => array(
                array(
                    'features1_content_title' => "商品知識の習得",
                    'features1_content_text' => "商品の特徴や使い方を覚え、お客様に適切なアドバイスを行います。"
                ),
                array(
                    'features1_content_title' => "お客様対応のトレーニング",
                    'features1_content_text' => "お客様に対して、丁寧で適切な対応ができるようトレーニングを行います。"
                ),
                array(
                    'features1_content_title' => "サービスの向上",
                    'features1_content_text' => "お客様からのフィードバックをもとに、サービスの質を向上させます。"
                ),
            )),
        ),
        array(
            'features1_text' => array('type' => 'value','value' => "接客・サービス業では、お客様のニーズを理解し、丁寧なサービスを提供することが求められます。そのために、コミュニケーション能力や問題解決力が必要です。"),
            'features1_content' => array('type' => 'value','value' => array(
                array(
                    'features1_content_title' => "お客様とのコミュニケーション",
                    'features1_content_text' => "お客様の要望や不満を聞き、適切な対応を行います。"
                ),
                array(
                    'features1_content_title' => "トラブル対応",
                    'features1_content_text' => "商品の不具合やお客様のクレームに対応し、解決策を提案します。"
                ),
                array(
                    'features1_content_title' => "サービスの改善",
                    'features1_content_text' => "お客様からの声をもとに、サービスの向上に取り組みます。"
                ),
            )),
        ),
    );
}
else{
    $array_generate_toppage_recruit_features1s = array(
        array(
            'features1_text' => array('type' => 'value','value' => @$_POST['company_name-short']."の業務は、新入社員をはじめとする社員の研修から始まり、マニュアルの習得、業務の管理などが求められます。"),
            'features1_content' => array('type' => 'value','value' => array(
                array(
                    'features1_content_title' => "研修",
                    'features1_content_text' => "新入社員やキャリアアップのための研修を行います。商品知識や技術習得、ビジネスマナーやコミュニケーション能力の向上など、目的に応じた研修を行います。",
                ),
                array(
                    'features1_content_title' => "マニュアルにそった作業",
                    'features1_content_text' => "マニュアルにそった作業を行います。細かなマニュアルと十分な研修期間がありますので、どなたでも覚えていただける内容になっています。",
                ),
                array(
                    'features1_content_title' => "業務管理",
                    'features1_content_text' => "経験が上がれば、業務管理の内容の策定、スタッフの配置調整など、多岐にわたる業務を担当します。",
                ),
            )),
        ),
    );
}


$array_generate_toppage_recruit_features1_num = null;
$array_generate_toppage_recruit_features1_num = array_rand($array_generate_toppage_recruit_features1s);
if(is_array(@$array_generate_toppage_recruit_features1s[$array_generate_toppage_recruit_features1_num])){
    foreach ($array_generate_toppage_recruit_features1s[$array_generate_toppage_recruit_features1_num] as $this_content_key => $this_content_value) {
        $array_setup_toppage_recruit['insert_values'][$this_content_key] = $this_content_value;
    }
}