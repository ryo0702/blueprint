<div class="wrap">
    <h1 class="wp-heading-inline">処理されました</h1>
    <hr class="wp-header-end">
    <div class="submit">
        <a href="<?php echo admin_url('admin.php?page=admin_inquery&type=list'); ?>"
           class="button">戻る</a>
    </div>
</div>
<?php
$thisstatus = null;
$thisstatus = get_post_meta(@$_GET['id'], 'status', true);

if ($thisstatus == 'untreated' or empty($thisstatus)) {
    update_post_meta(@$_GET['id'], 'status', 'treated');
} else {
    update_post_meta(@$_GET['id'], 'status', 'untreated');
}
?>