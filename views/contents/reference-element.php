<div class="heroimage">
  <div class="content">
    <div class="content-group">
      <h1>リファレンス 要素</h1>
    </div>
  </div>
</div>

<main class="contents contents-reference">

  <section class="section-reference" id="section-container">
    <div class="container">
      <div class="title-group">
        <h2 class="title">テーブル</h2>
        <div class="title-eng">REFERENCE TABLE</div>
      </div>
      <?php $code = null;
$code = '<table>
  <thead>
    <tr>
      <th>メニュー1</th><th>メニュー2</th><th>メニュー3</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>項目1</td><td>項目2</td><td>項目3</td>
    </tr>
    <tr>
      <td>項目1</td><td>項目2</td><td>項目3</td>
    </tr>
    <tr>
      <td>項目1</td><td>項目2</td><td>項目3</td>
    </tr>
  </tbody>
</table>';
?>
      <div class="sample card card-bgc-none">
        <div class="sample-title">プレーン</div>
        <?php echo $code; ?>
      </div>
      <div class="code mt-m">
        <pre><code><?php
echo htmlspecialchars($code);
        ?></code></pre>
      </div>

      <?php $code = null;
$code = '<div class="row row-2column">
  <div class="col">
    <table class="table-line">
      <thead>
        <tr>
          <th>メニュー1</th><th>メニュー2</th><th>メニュー3</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>項目1</td><td>項目2</td><td>項目3</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="col">
    <table class="table-xline">
      <thead>
        <tr>
          <th>メニュー1</th><th>メニュー2</th><th>メニュー3</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>項目1</td><td>項目2</td><td>項目3</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>';
?>
      <div class="sample card card-bgc-none mt-l">
        <div class="sample-title">その他のタイプ</div>
        <?php echo $code; ?>
      </div>
      <div class="code mt-m">
        <pre><code><?php
echo htmlspecialchars($code);
        ?></code></pre>
      </div>
    </div>
  </section>

</main>