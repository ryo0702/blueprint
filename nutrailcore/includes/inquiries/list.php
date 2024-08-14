<?php
$showpage = 20;
$maxpage  = 1;
$allpost  = null;
$status   = !empty($_GET['status']) ? wp_unslash($_GET['status']) : '';
if (empty($_GET['paged']) || !is_numeric(@$_GET['paged']) || @$_GET['paged'] == 0) {
    $paged = 1;
} else {
    $paged = wp_unslash($_GET['paged']);
}
?>
<div class="wrap">

    <form action="<?php echo admin_url('admin.php'); ?>" method="get">
        <input type="hidden" name="page" value="admin_inquery">

        <h1 class="wp-heading-inline">お問い合わせ</h1>
        <hr class="wp-header-end">

        <button type="submit" name="delete" value="1" class="button button-secondary wpa-warning-primary"
                style="float: left;margin-top: 6px;margin-right: 10px;">
            選択した項目を削除する
        </button>

        <ul class="subsubsub" style="margin-bottom: 10px">
            <li class="all">
                <a href="<?php echo admin_url('admin.php?page=admin_inquery') ?>" class="<?php echo $status == '' ? 'current' : '' ?>">
                    全て
                </a> |
            </li>
            <li class="untreated">
                <a href="<?php echo admin_url('admin.php?page=admin_inquery&status=untreated') ?>"
                   class="<?php echo $status == 'untreated' ? 'current' : '' ?>">未処理</a> |
            </li>
            <li class="treated">
                <a href="<?php echo admin_url('admin.php?page=admin_inquery&status=treated') ?>"
                   class="<?php echo $status == 'treated' ? 'current' : '' ?>">処理済</a>
            </li>
        </ul>

        <div class="table">
            <table class="wp-list-table widefat fixed striped table-view-list pages">
                <thead>
                <tr>
                    <th id="cb" class="manage-column column-cb check-column"
                        style="padding: 4px 0 0 3px;vertical-align: middle;">
                        <label class="screen-reader-text" for="cb-select-all-1">全て選択する</label>
                        <input id="cb-select-all-1" type="checkbox">
                    </th>
                    <th scope="col" id="id" class="manage-column column-id" width="50">ID</th>
                    <th scope="col" id="title" class="manage-column column-title">タイトル</th>
                    <th scope="col" id="status" class="manage-column column-status" width="100">状況</th>
                    <th scope="col" id="form-id" class="manage-column column-formid" width="100">フォーム名 - フォームID</th>
                    <th scope="col" id="action" class="manage-column column-form" width="180">編集</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $args = array(
                    'post_type'      => 'inquiries',
                    'posts_per_page' => $showpage,
                );
                if(@$status == 'treated'){
                    $args['meta_query'] = array(
                        array(
                            'key'   => 'status',
                            'value' => 'treated',
                        )
                    );
                }
                elseif(@$status == 'untreated'){
                    $args['meta_query'] = array(
                        'relation' => 'OR',
                        array(
                            'key'   => 'status',
                            'value' => 'untreated',
                        ),
                        array(
                            'key'   => 'status',
                            'compare' => 'NOT EXISTS'
                        )
                    );
                }
                if ($paged > 1) {
                    $args['paged'] = $paged;
                }
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) {
                    $maxpage = $the_query->max_num_pages;
                    $allpost = $the_query->found_posts;

                    while ($the_query->have_posts()) {
                        $the_query->the_post();
                        $title         = null;
                        $thisid        = $thispostarray = $insert_status = null;
                        $thisid        = get_the_ID();
                        $thispostarray = get_post_meta($thisid, 'content', true);
                        $thisstatus    = get_post_meta($thisid, 'status', true);

                        if ($thisstatus == 'untreated' or empty($thisstatus)) {
                            $insert_status = '未処理';
                        } else {
                            $insert_status = '対応済';
                        }
                        if (!empty($thispostarray['formname'])) {
                            $title .= $thispostarray['formname'];
                        }
                        if (!empty($thispostarray['formid'])) {
                            $title .= '-'.$thispostarray['formid'];
                        }

                        echo '<tr>
						<th scope="row" class="check-column"><label class="screen-reader-text" for="cb-select-'.$thisid.'"></label><input id="cb-select-'.$thisid.'" type="checkbox" name="post[]" value="'.$thisid.'"></th>
						<td>'.$thisid.'</td>
						<td>'.get_the_title($thisid).'</td>
						<td>'.esc_html(@$insert_status).'</td>
						<td>'.esc_html($title).'</td>
						<td><a href="'.admin_url('admin.php?page=admin_inquery&type=view&id='.$thisid).'">表示</a> | <a href="'.admin_url('admin.php?page=admin_inquery&type=statuschange&id='.$thisid).'">状況変更</a> | <a href="'.admin_url('admin.php?page=admin_inquery&type=delete&id='.$thisid).'">削除</a></td>
					</tr>';
                    }
                    wp_reset_postdata();
                }
                ?>
                </tbody>
            </table>
        </div>

        <?php
        if ($maxpage > 1) {
            echo '<div class="tablenav bottom"><div class="tablenav-pages">';
            echo '<span class="pagination-links">';
            // Prev arrow
            if ($paged > 1) {
                $prev = null;
                $prev = $paged - 1;
                echo '<a class="tablenav-pages-navspan button" href="'.admin_url('admin.php?page=admin_inquery&type=list').'"><span aria-hidden="true">«</span></a> ';
                echo '<a class="tablenav-pages-navspan button" href="'.admin_url('admin.php?page=admin_inquery&type=list&paged='.$prev).'"><span aria-hidden="true">‹</span></a> ';
            } else {
                echo '<span class="tablenav-pages-navspan button disabled" aria-hidden="true">«</span> ';
                echo '<span class="tablenav-pages-navspan button disabled" aria-hidden="true">‹</span> ';
            }

            echo '<span class="screen-reader-text">現在のページ</span> ';
            echo '<span id="table-paging" class="paging-input"><span class="tablenav-paging-text">'.$paged.' / <span class="total-pages">'.$maxpage.'</span></span></span> ';

            // Next arrow
            if ($paged == $maxpage) {
                echo '<span class="next-page button disabled" aria-hidden="true">›</span> ';
                echo '<span class="next-navspan button disabled" aria-hidden="true">»</span> ';
            } else {
                $next = null;
                $next = $paged + 1;

                echo '<a class="next-page button" href="'.admin_url('admin.php?page=admin_inquery&type=list&paged='.$next).'"><span aria-hidden="true">›</span></a> ';
                echo '<a class="next-page button" href="'.admin_url('admin.php?page=admin_inquery&type=list&paged='.$maxpage).'"><span aria-hidden="true">»</span></a> ';
            }

            echo '</span>';
            echo '</div><br class="clear"></div>';
        }
        ?>
    </form>
</div>
