<?php
$thisid        = null;
$thisid        = $_GET['id'];
$thispostarray = get_post_meta($thisid, 'content', true);
?>
<div class="wrap">
    <h1 class="wp-heading-inline"><?php echo get_the_title($thisid); ?></h1>
    <hr class="wp-header-end">

    <?php
    if (!empty($thispostarray['content']) && is_array(@$thispostarray['content'])) {
        echo '<table class="widefat striped">';
        foreach ($thispostarray['content'] as $key => $value) {
            echo '<tr>';
            echo '<th>'.@$value['label'].'</th><td>'.nl2br(@$value['value']).'</td>';
            echo '</tr>';
        }
        echo '<table>';
    }
    ?>

    <div class="submit">
        <a href="<?php echo admin_url('admin.php?page=admin_inquery&type=list'); ?>" class="button">
            戻る
        </a>
    </div>

</div>