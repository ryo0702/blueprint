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

    <h1 class="wp-heading-inline"><?php echo esc_html__('Hearing system', 'nutrail'); ?></h1>
    <hr class="wp-header-end">

    <button type="submit" name="delete" value="1" class="button button-secondary wpa-warning-primary"
            style="float: left;margin-top: 6px;margin-right: 10px;">
        Delete selected
    </button>

    <ul class="subsubsub" style="margin-bottom: 10px">
        <li class="all">
            <a href="<?php echo admin_url('admin.php?page=admin_hearingsystem') ?>"
               class="<?php echo $status == '' ? 'current' : '' ?>">
                <?php echo esc_html__('All', 'nutrail'); ?>
            </a> |
        </li>
        <li class="untreated">
            <a href="<?php echo admin_url('admin.php?page=admin_hearingsystem&status=untreated') ?>"
               class="<?php echo $status == 'untreated' ? 'current' : '' ?>">
                <?php echo esc_html__('Untreated', 'nutrail'); ?>
            </a> |
        </li>
        <li class="treated">
            <a href="<?php echo admin_url('admin.php?page=admin_hearingsystem&status=treated') ?>"
               class="<?php echo $status == 'treated' ? 'current' : '' ?>">
                <?php echo esc_html__('Treated', 'nutrail'); ?>
            </a>
        </li>
    </ul>

    <div class="table">
        <table class="wp-list-table widefat fixed striped table-view-list pages">
            <thead>
            <tr>
                <th id="cb" class="manage-column column-cb check-column"
                    style="padding: 4px 0 0 3px;vertical-align: middle;">
                    <label class="screen-reader-text" for="cb-select-all-1">Select All</label>
                    <input id="cb-select-all-1" type="checkbox">
                </th>
                <th scope="col" id="id" class="manage-column column-id">
                    <?php echo esc_html__('ID', 'nutrail'); ?>
                </th>
                <th scope="col" id="title" class="manage-column column-title">
                    <?php echo esc_html__('Title', 'nutrail'); ?>
                </th>
                <th scope="col" id="status" class="manage-column column-status" width="100">
                    <?php echo esc_html__('Status', 'nutrail'); ?>
                </th>
                <th scope="col" id="form-id" class="manage-column column-formid" width="100">
                    <?php echo esc_html__('Form ID', 'nutrail'); ?>
                </th>
                <th scope="col" id="action" class="manage-column column-form" width="180">
                    <?php echo esc_html__('Edit', 'nutrail'); ?>
                </th>
            </tr>
            </thead>
            <tbody>
            <?php
            $args = array(
                'post_type'      => 'hearingsystem',
                'posts_per_page' => $showpage,
            );
            if (!empty($status)) {
                $args['meta_query'] = array(
                    array(
                        'key'   => 'status',
                        'value' => $status,
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

                    if ($thisstatus == 'untreated') {
                        $insert_status = esc_html__('untreated', 'nutrail');
                    } else {
                        $insert_status = esc_html__('treated', 'nutrail');
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
						<td>'.esc_html(@$thisstatus).'</td>
						<td>'.esc_html($title).'</td>
						<td><a href="'.admin_url('admin.php?page=admin_hearingsystem&type=view&id='.$thisid).'">'.esc_html__('View', 'nutrail').'</a> | <a href="'.admin_url('admin.php?page=admin_hearingsystem&type=statuschange&id='.$thisid).'">'.esc_html__('Status change', 'nutrail').'</a> | <a href="'.admin_url('admin.php?page=admin_hearingsystem&type=delete&id='.$thisid).'">'.esc_html__('Delete', 'nutrail').'</a></td>
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
            echo '<a class="tablenav-pages-navspan button" href="'.admin_url('admin.php?page=admin_hearingsystem&type=list').'"><span aria-hidden="true">«</span></a> ';
            echo '<a class="tablenav-pages-navspan button" href="'.admin_url('admin.php?page=admin_hearingsystem&type=list&paged='.$prev).'"><span aria-hidden="true">‹</span></a> ';
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

            echo '<a class="next-page button" href="'.admin_url('admin.php?page=admin_hearingsystem&type=list&paged='.$next).'"><span aria-hidden="true">›</span></a> ';
            echo '<a class="next-page button" href="'.admin_url('admin.php?page=admin_hearingsystem&type=list&paged='.$maxpage).'"><span aria-hidden="true">»</span></a> ';
        }

        echo '</span>';
        echo '</div><br class="clear"></div>';
    }
    ?>

</div>
