<div class="navbar">
    <div class="nav-buttons">
    </div>
    <h1 class="logo"><a href="<?php echo site_url('/'); ?>">
        <?php
        if($global_config['logo']['url']){
            echo '<img src="'.$global_config['logo']['url'].'" alt="'.get_bloginfo('name').'" />';
        }else{
            echo get_bloginfo('name');
        }
        ?>
    </a></h1>
    <div class="nav-buttons">
        <a href="#" class="humburger">
            <hr><hr><hr>
        </a>
    </div>
</div>

<div class="drawermenu">
  <div class="close">
    <div class="lines">
      <hr>
      <hr>
    </div>
    <div class="text">閉じる</div>
  </div>
  <div class="menu-label">サイトメニュー</div>
  <ul>
    <li><a href="<?php echo site_url('/'); ?>">トップページ</a></li>
  </ul>
  <div class="menu-label">リファレンス</div>
  <ul>
    <li><a href="<?php echo site_url('/?reference=reference-index'); ?>">インデックス</a></li>
    <li><a href="<?php echo site_url('/?reference=reference-element'); ?>">要素</a></li>
    <li><a href="<?php echo site_url('/?reference=reference-contents'); ?>">コンテンツ</a></li>
    <li><a href="<?php echo site_url('/?reference=reference-toppage'); ?>">トップページサンプル</a></li>
  </ul>
  <div class="menu-label">デバッグ</div>
  <ul>
    <li><a href="#" id="lsdelete">LS削除</a></li>
  </ul>
</div>