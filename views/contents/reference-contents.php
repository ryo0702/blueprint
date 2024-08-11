<div class="heroimage">
  <div class="content">
    <div class="content-group">
      <h1>リファレンス コンテンツ</h1>
    </div>
  </div>
</div>

<main class="contents contents-reference">

  <section class="section-reference" id="section-container">
    <div class="container">
      <div class="title-group">
        <h2 class="title">ヒーローイメージ</h2>
        <div class="title-eng">REFERENCE HEROIMAGE</div>
      </div>
      <?php $code = null;
$code = '<div class="heroimage hero-h50vh hero-split">
  <div class="content">
    <div class="content-group logo">
      <h1><img src="'.get_template_directory_uri().'/themecreate/images/sample/sample-logo-hero-white.png" alt=""></h1>
    </div>
  </div>
  <div class="overlay overlay-black"></div>
  <div class="bgi" style="background-image:url(\''.get_template_directory_uri().'/themecreate/images/sample/sample-japanese-business03.jpg\');"></div>
</div>';
?>
      <div class="sample card card-bgc-none">
        <div class="sample-title">ベーシックタイプ</div>
        <?php echo $code; ?>
      </div>
      <div class="code mt-m">
        <pre><code><?php
echo htmlspecialchars($code);
        ?></code></pre>
      </div>

      <?php $code = null;
$code = '<div class="heroimage hero-h60vh hero-split">
  <div class="content">
    <div class="content-group logo">
      <h1><img src="'.get_template_directory_uri().'/themecreate/images/sample/sample-logo-hero-white.png" alt=""></h1>
    </div>
  </div>
  <div class="overlay overlay-black"></div>
  <div class="bgi">
    <div class="split-left" style="background-image:url(\''.get_template_directory_uri().'/themecreate/images/sample/sample-japanese-business03.jpg\');"></div>
    <div class="split-right" style="background-image:url(\''.get_template_directory_uri().'/themecreate/images/sample/sample-japanese-business02.png\');"></div>
  </div>
</div>';
?>
      <div class="sample card card-bgc-none mt-l">
        <div class="sample-title">セパレートタイプ：2つの画像を同時に表示することができます。</div>
        <?php echo $code; ?>
      </div>
      <div class="code mt-m">
        <pre><code><?php
echo htmlspecialchars($code);
        ?></code></pre>
      </div>
    </div>
  </section>

  <section class="section-reference" id="section-container">
    <div class="container">
      <div class="title-group">
        <h2 class="title">テキスト & イメージ</h2>
        <div class="title-eng">REFERENCE CONTENTS TEXT & IMAGE</div>
      </div>
      <?php $code = null;
$code = '<section>
    <div class="container position-relative">
      <div class="text-xxl text-bg-title fc-tertiary">enjoy working</div>
      <div class="row row-3-4column gutter-l">
        <div class="col">
          <h2 class="text-xl">こんな時代だから、<br />仕事を楽しもう</h2>
          <p class="mt-l text-m-plus">会社に行こう。<br />
          それも楽しい気持ちで会社に行こう。<br />
          仕事も楽しめばいい。<br />
          押し付けっぽいですか？<br />
          でも、1日8時間、年間2080時間。<br />
          人生の約7分の1が仕事。<br />
          楽しむ方が得だよ。</p>
          <div class="mt-l">
            <a href="" class="button button-ghost button-radius button-material-symbols-right">求人へのご応募<span class="material-symbols-outlined">chevron_right</span></a>
          </div>
        </div>
        <div class="col">
          <div class="thumbnail thumbnail-silver">
            <img src="'.get_template_directory_uri().'/themecreate/images/sample/sample-japanese-business01.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>';
?>
      <div class="sample card card-bgc-none">
        <div class="sample-title">文字と画像で印象に残るセクションを演出することができます。</div>
        <?php echo $code; ?>
      </div>
      <div class="code mt-m">
        <pre><code><?php
echo htmlspecialchars($code);
        ?></code></pre>
      </div>
      <div class="text-s mt-s">.row-3-4columnを変更してレイアウトを変えることも可能です。</div>
    </div>
  </section>

</main>