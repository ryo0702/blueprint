<?php
if(!empty($_POST['submit']) && !empty($_POST['setup-type'])){
  include(get_template_directory().'/configs/adminpage/setup/'.@$_POST['setup-type'].'.php');

  $new_page = array(
      'post_title'    => $insert_page_title,
      'post_name' => $insert_page_name,
      'post_status'   => 'publish',
      'post_author'   => 1,
      'post_type'     => 'page',
      'page_template' => 'template-freelayout.php'
  );
  $page_id = wp_insert_post($new_page);
  if ($page_id != 0) {
      update_post_meta($page_id,'config-freelayout',$insert_freelayout);
  }

  echo '<div class="wrap">';
  echo '<h1>ページセットアップが完了しました。</h1>';
  echo '<p><a href="'.get_the_permalink($page_id).'">表示</a> / <a href="'.site_url('/wp-admin/post.php?post='.$page_id.'&action=edit').'">編集</a></p>';
  echo '<p>※セットアップして頂いたページには画像サンプルが入っていますが、編集した段階でサンプルは消えます。再度設定をしてください。</p>';
}
else{
?>
<div class="wrap">
<h1>ページセットアップ</h1>
<form method="post" action="" novalidate="novalidate">
<table class="form-table" role="presentation">
<tbody>
  <tr>
    <th scope="row"><label for="setup-type">セットアップ内容を選択してください</label></th>
    <td>
    <select name="setup-type" id="setup-type">
      <option value="toppage-basic">トップページ(ベーシック)</option>
      <option value="contact-basic">お問い合わせ(ベーシック)</option>
    </td>
  </tr>
</tbody>
</table>
<p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="ページセットアップ"></p>
</form>
</div>
<?php
}