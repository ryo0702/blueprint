<div class="heroimage">
  <div class="content">
    <div class="content-group">
      <h1>リファレンス</h1>
    </div>
  </div>
</div>

<main class="contents contents-reference">
  <section class="index">
    <div class="container">
      <div class="card">
        <div class="title-group">
          <h2 class="title">リファレンス目次</h2>
          <div class="title-eng">REFERENCE INDEX</div>
        </div>
        <div>
          <ul class="list-index">
            <li><a href="#start-blueprint">BluePrintを開始する</a></li>
            <li><a href="#section-container">コンテナ</a></li>
            <li><a href="#section-column">カラム</a></li>
            <li><a href="">テキスト</a></li>
            <li><a href="#section-column">サムネイル</a></li>
            <li><a href="">セクション</a></li>
            <li><a href="">ナビゲーションバー</a></li>
            <li><a href="">フッター</a></li>
            <li><a href="#section-other-functions">その他の導入機能</a></li>
            <li><a href="<?php echo site_url('?reference=reference-toppage'); ?>">トップページサンプル <span class="material-symbols-outlined">link</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="section-reference" id="start-blueprint">
    <div class="container">
      <div class="title-group">
        <h2 class="title">BluePrintを開始する</h2>
        <div class="title-eng">START BLUEPRINT</div>
        <p class="description">簡単にWordPressのベーステーマをCSSやWordPressの機能が整った状態で書き出しができるBluePrintを使って、効率的にWordPressのテーマを作りましょう。</p>
      </div>
      <div>xxx</div>
    </div>
  </section>

  <section class="section-reference" id="section-container">
    <div class="container">
      <div class="title-group">
        <h2 class="title">コンテナ</h2>
        <div class="title-eng">REFERENCE CONTAINER</div>
        <p class="description">画面に表示する横幅の範囲を絞る「コンテナ」を設定します。</p>
      </div>
      <?php $code = null;
$code = '<div class="container"><div class="p-m bgc-danger">.container</div></div>
<div class="container-s"><div class="p-m bgc-danger">.container-s</div></div>
<div class="container-l"><div class="p-m bgc-danger">.container-l</div></div>';
?>
      <div class="sample card">
        <div class="sample-title">3カラム</div>
        <?php echo $code; ?>
      </div>
      <div class="code mt-m">
        <pre><code><?php
echo htmlspecialchars($code);
        ?></code></pre>
      </div>
      <div class="text-s mt-s">通常のコンテナ幅とは別に、SとLのコンテナ幅があります。</div>
    </div>
  </section>

  <section class="section-reference" id="section-column">
    <div class="container">
      <div class="title-group">
        <h2 class="title">カラム</h2>
        <div class="title-eng">REFERENCE COLUMN</div>
        <p class="description">カラムとは3分割、4分割などのレイアウトを行う際に使用します。</p>
      </div>
      <div class="sample card">
        <div class="sample-title">3カラム</div>
        <div class="row row-3column">
          <div class="col">カラム1</div>
          <div class="col">カラム2</div>
          <div class="col">カラム3</div>
        </div>
      </div>
      <div class="code mt-m">
        <pre><code><?php
$code = null;
$code = '<div class="row row-3column">
  <div class="col">カラム1</div>
  <div class="col">カラム2</div>
  <div class="col">カラム3</div>
</div>';
echo htmlspecialchars($code);
        ?></code></pre>
      </div>
      <div class="text-s mt-s">上記は3カラムの例です。</div>
    </div>
  </section>

  <section class="section-reference" id="section-thumbnail">
    <div class="container">
      <div class="title-group">
        <h2 class="title">サムネイル</h2>
        <div class="title-eng">REFERENCE THUMBNAIL</div>
        <p class="description">サムネイル画像を黄金比・白銀比などを保った状態で表示が可能です。</p>
      </div>
<?php 
$code = null;
$code = '<div class="row row-3column">
  <div class="col">
    <div class="thumbnail">
      <img src="'.get_template_directory_uri().'/themecreate/images/sample/sample-japanese-business01.png" alt="">
    </div>
  </div>
  <div class="col">
    <div class="thumbnail thumbnail-silver">
      <img src="'.get_template_directory_uri().'/themecreate/images/sample/sample-japanese-business01.png" alt="">
    </div>
  </div>
  <div class="col">
    <div class="thumbnail thumbnail-square">
      <img src="'.get_template_directory_uri().'/themecreate/images/sample/sample-japanese-business01.png" alt="">
    </div>
  </div>
</div>';
?>
      <div class="sample card">
        <div class="sample-title">左から黄金比・白銀比・正方形になっています。サムネイルの形を指定しないデフォルトの状態だと黄金比になります。</div>
        <?php echo $code; ?>
      </div>
      <div class="code mt-m">
        <pre><code><?php
echo htmlspecialchars($code);
        ?></code></pre>
      </div>
      <div class="text-s mt-s">サムネイルは横幅100%になるため、横幅のサイズは親要素で設定します。この場合、3カラムで設定を行っています。</div>

      <?php 
$code = null;
$code = '<div class="row row-3column">
  <div class="col">
    <div class="thumbnail thumbnail-radius">
      <img src="'.get_template_directory_uri().'/themecreate/images/sample/sample-japanese-business01.png" alt="">
    </div>
  </div>
  <div class="col">
    <div class="thumbnail thumbnail-frame">
      <img src="'.get_template_directory_uri().'/themecreate/images/sample/sample-japanese-business01.png" alt="">
    </div>
  </div>
  <div class="col">
    <div class="thumbnail">
      <div class="text">
        <div class="title">記事タイトルを入れることができます</div>
      </div>
      <div class="overlay"></div>
      <img src="'.get_template_directory_uri().'/themecreate/images/sample/sample-japanese-business01.png" alt="">
    </div>
  </div>
</div>';
?>
      <div class="sample card mt-m">
        <div class="sample-title">角丸にしたりフレームをつける、オーバーレイをして文字を入れるなどの装飾も可能です。</div>
        <?php echo $code; ?>
      </div>
      <div class="code mt-m">
        <pre><code><?php
echo htmlspecialchars($code);
        ?></code></pre>
      </div>
      <div class="text-s mt-s">サムネイルは横幅100%になるため、横幅のサイズは親要素で設定します。この場合、3カラムで設定を行っています。</div>
    </div>
  </section>

  <section class="section-reference" id="section-other-functions">
    <div class="container">
      <div class="title-group">
        <h2 class="title">その他の導入機能</h2>
        <div class="title-eng">OTHER FUNCTIONS</div>
        <p class="description">BluePrintはGoogleWebフォントの導入、GoogleMaterialSymbol & Iconの導入を行っています。</p>
      </div>
      <div>xxx</div>
    </div>
  </section>

</main>