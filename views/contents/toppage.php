<div class="heroimage">
  <div class="content">
    <div class="content-group">
      <h1>WPテーマ作成</h1>
    </div>
  </div>
</div>

<main class="contents">
    <div class="container-s">
        <form action="#" method="post" class="card">
            <?php
            wp_nonce_field('submit', 'create-theme');
            ?>
            <div class="form-group">
                <label for="theme-name">テーマ名(英数)<span class="required">必須</span></label>
                <input type="text" class="w50per" id="theme-name" name="theme-name" pattern="[A-Za-z0-9]+" required>
                <p class="description">テーマディレクトリ等に利用する名前となります</p>
            </div>
            <div class="form-group">
                <label for="theme-name-title">テーマ名<span class="required">必須</span></label>
                <input type="text" class="w50per" id="theme-name-title" name="theme-name-title" required>
                <p class="description">実際にテーマ名として表示される名前となります</p>
            </div>
            <div class="form-group">
                <label for="theme-name-title">テーマ開発者<span class="required">必須</span></label>
                <input type="text" class="w50per" id="theme-name-title" name="theme-name-title" required>
                <p class="description">テーマの開発者名として記載されます</p>
            </div>

            <div class="form-group">
                <label>テーマ種類</label>
                <ul>
                    <li><input type="radio" id="corporate" name="type" value="corporate" checked required><label for="corporate">コーポレート</label></li>
                    <li><input type="radio" id="landingpage" name="type" value="landingpage"><label for="landingpage">ランディングページ</label></li>
                </ul>
            </div>

            <div class="form-group">
                <label>機能</label>
                <ul>
                    <li><input type="checkbox" id="feature1" name="feature" value="feature1"><label for="feature1">機能1</label></li>
                    <li><input type="checkbox" id="feature2" name="feature" value="feature2"><label for="feature2">機能2</label></li>
                </ul>
            </div>

            <div class="form-group agreement">
              <div><input type="checkbox" id="agreement" name="agreement" value="agreement" required></div>
              <p>当サイトの<a href="">利用規約</a>に従う場合チェックしてください。</p>
            </div>

            <div class="form-group">
                <input class="button" type="submit" value="テーマダウンロード">
            </div>
        </form>
    </div>
</main>