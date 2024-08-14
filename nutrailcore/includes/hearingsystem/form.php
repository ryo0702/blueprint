<div class="wrap">
    <h1 class="wp-heading-inline"><?php echo $page_title; ?></h1>
    <hr class="wp-header-end">
    <?php
    echo '<form method="POST" action="" enctype="multipart/form-data">';
    echo '<table class="form-table" role="presentation">';
    foreach ($array_hearing as $inpts) {
        $input_return = $description = $input_other = null;
        if(@$inpts['type'] == 'text'){
            $input_return = '<input type="text" name="'.@$inpts['name'].'" id="'.@$inpts['name'].'" value="" class="regular-text"/>';
        }
        elseif(@$inpts['type'] == 'number'){
            $input_return = '<input type="number" name="'.@$inpts['name'].'" id="'.@$inpts['name'].'" value="" class="regular-text"/>';
        }
        elseif(@$inpts['type'] == 'select'){
            $options = null;
            if(@is_array(@$inpts['options'])){
                foreach (@$inpts['options'] as $opt_val) {
                    $options .= '<option value="'.$opt_val.'">'.$opt_val.'</option>';
                }
            }
            $input_return = '<select id="'.@$inpts['name'].'" name="'.@$inpts['name'].'">'.$options.'</select>';
        }
        elseif(@$inpts['type'] == 'check_single'){
            $input_return = '<label for="'.@$inpts['name'].'"><input name="'.@$inpts['name'].'" type="checkbox" id="'.@$inpts['name'].'" value="'.@$inpts['value'].'"/>'.@$inpts['label'].'</label>';
        }
        elseif(@$inpts['type'] == 'hr'){
            $input_other = '<hr />';
        }
        elseif(@$inpts['type'] == 'title'){
            $input_other = '<h3 style="margin:0;padding:0;padding-top:20px;">'.@$inpts['title'].'</h3>';
        }
        // Description
        if(!empty(@$inpts['description'])){
            $description = '<p class="description">'.$inpts['description'].'</p>';
        }
        // Wrap
        if(!empty($input_return)){
            echo '<tr><th scope="row"><label for="'.@$inpts['name'].'">'.@$inpts['title'].'</label></th>
            <td><div>'.$input_return.'</div>'.$description.'</td></tr>';
        }
        elseif(!empty($input_other)){
            echo '<tr><td colspan="3" style="margin:0;padding:0;"><div>'.$input_other.'</div>'.$description.'</td></label></tr>';
        }
    }
    echo '</table>';
    echo '<p class="submit">
        <input type="submit" name="'.$page_submit.'" id="'.$page_submit.'" class="button button-primary" value="'.$page_submit_label.'"/>
    </p>';
    echo '</form>';
    ?>
</div>