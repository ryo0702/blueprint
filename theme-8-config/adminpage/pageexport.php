<?php
if(!empty($_POST['submit'])){
  $page_id = $_POST['page-id'];
  $arr_metabox = null;
  if(!empty(get_post_meta($page_id,'config-freelayout',true))){
    $arr_metabox = get_post_meta($page_id,'config-freelayout',true);
  }
  echo '<div class="wrap">';
  echo '<h1>ページエクスポート</h1>';
  echo '<div><pre><textarea style="width:100%;height:500px;">';
  var_export($arr_metabox);
  echo '</textarea></pre></div>';
}
else{
?>
<div class="wrap">
<h1>ページエクスポート</h1>

<form method="post" action="" novalidate="novalidate">

<table class="form-table" role="presentation">
<tbody>
  <tr>
  <th scope="row"><label for="page-id">エクスポートするページを選択</label></th>
  <td>
  <select name="page-id" id="page-id">
    <?php
    $pages = get_pages(); 
    foreach ( $pages as $page ) {
        $option = '<option value="' . $page->ID . '">';
        $option .= $page->post_title;
        $option .= '</option>';
        echo $option;
    }
    ?>
  </td>
  </tr>
</tbody>
</table>

<p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="ページエクスポート"></p>

</form>

</div>
<?php
}