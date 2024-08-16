<div class="navbar">
    <div class="nav-buttons">
    </div>
    <h1 class="logo"><a href="<?php echo site_url('/'); ?>">
        <?php
        if(!empty($global_config['config-common']['logo']['url'])){
            echo '<img src="'.$global_config['config-common']['logo']['url'].'" alt="'.get_bloginfo('name').'" />';
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
  <?php
  wp_nav_menu(array(
    'theme_location' => 'navbar',
    'container' => false,
    'menu_class' => '',
    'fallback_cb' => '__return_false',
    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    'depth' => 1,
  ));
  ?>
  <?php
  if (is_user_logged_in()){
    echo '<div class="menu-label">管理メニュー</div>
    <ul>
        <li><a href="'.site_url('/wp-admin/').'" id="lsdelete">管理画面</a></li>
        <li><a href="#" id="lsdelete">LS削除</a></li>
    </ul>';
  }
  ?>
</div>