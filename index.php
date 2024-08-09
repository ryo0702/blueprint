<?php 
include get_template_directory().'/views/parts/head.php';
include get_template_directory().'/views/parts/navbar.php';
?>

    <div class="heroimage"></div>

    <div class="container">
        <h2>フォームの例</h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="theme-name">テーマ名(英数)</label>
                <input type="text" id="theme-name" name="theme-name" pattern="[A-Za-z0-9]+" required>
            </div>

            <div class="form-group">
                <label>種類</label>
                <ul>
                    <li><input type="radio" id="type1" name="type" value="type1" checked required><label for="type1">タイプ1</label></li>
                    <li><input type="radio" id="type2" name="type" value="type2"><label for="type2">タイプ2</label></li>
                </ul>
            </div>

            <div class="form-group">
                <label>機能</label>
                <ul>
                    <li><input type="checkbox" id="feature1" name="feature" value="feature1"><label for="feature1">機能1</label></li>
                    <li><input type="checkbox" id="feature2" name="feature" value="feature2"><label for="feature2">機能2</label></li>
                </ul>
            </div>

            <div class="form-group">
                <input type="submit" value="送信">
            </div>
        </form>
    </div>

<?php 
include get_template_directory().'/views/parts/foot.php';
?>
