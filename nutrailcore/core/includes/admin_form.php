<?php
function wpax_adminform_input($array = null){
    $return = $value = null;

    if(@$array['valuetype'] == 'insert' && !empty(@$array['value'])){
        $value = @$array['value'];
    }
    elseif(@$array['valuetype'] == 'option' && !empty(@$array['name'])){
        $value = get_option(@$array['name']);
    }

    // Input
    if(!empty($array['type'])){
        if($array['type'] == 'text' || $array['type'] == 'email' || $array['type'] == 'url' || $array['type'] == 'date' || $array['type'] == 'password'){
            $return = '<input name="'.@$array['name'].'" type="text" id="'.@$array['name'].'" value="'.$value.'" class="regular-text"/>';
        }
        elseif($array['type'] == 'textarea'){
            $return = '<textarea rows="5" cols="50" name="'.@$array['name'].'" id="'.@$array['name'].'">'.$value.'</textarea>';
        }
        elseif($array['type'] == 'select'){
            if(!empty($array['option']) && is_array($array['option'])){
                $insert_options = null;
                foreach ($array['option'] as $opt_key => $opt_value) {
                    $insert_selected = null;
                    if(is_numeric($opt_key)){
                        if($opt_value == @$value){$insert_selected = ' selected';}
                        $insert_options .= '<option value="'.$opt_value.'"'.$insert_selected.'>'.$opt_value.'</option>';
                    }
                    else{
                        if($opt_key == @$value){$insert_selected = ' selected';}
                        $insert_options .= '<option value="'.$opt_key.'"'.$insert_selected.'>'.$opt_value.'</option>';
                    }
                }
            }
            $return = '<select name="'.@$array['name'].'" id="'.@$array['name'].'">
                <option value="">'.@$array['title'].'を選択</option>
                '.$insert_options.'
            </select>';
        }
        elseif($array['type'] == 'checkbox'){
            if(!empty($array['option']) && is_array($array['option'])){
                $insert_options = null;
                foreach ($array['option'] as $opt_key => $opt_value) {
                    $insert_checked = null;
                    if(is_numeric($opt_key)){
                        if($opt_value == @$value){$insert_checked = ' chekced';}
                        $insert_options .= '<div><label><input type="checkbox" id="'.@$array['name'].'" name="'.@$array['name'].'[]" value="'.$opt_value.'"'.$insert_checked.'> '.$opt_value.'</label></div>';
                    }
                    else{
                        if($opt_key == @$value){$insert_checked = ' chekced';}
                        $insert_options .= '<div><label><input type="checkbox" id="'.@$array['name'].'" name="'.@$array['name'].'[]" value="'.$opt_key.'"'.$insert_checked.'> '.$opt_value.'</label></div>';
                    }
                }
            }
            $return = '<div>
            '.$insert_options.'
            </div>';
        }
    }

    // Description
    $description = null;
    if(!empty($array['description'])){
        $description = '<p class="description">'.$array['description'].'</p>';
    }
    
    // Wrap
    if(!empty($array['title']) && $array['type'] == 'title'){
        $return = '<tr>
        <td scope="row" colspan="3" style="padding-left:0;margin-left:0;"><h3>'.@$array['title'].'</h3></td>
        </tr>';
    }
    elseif($array['type'] == 'hr'){
        $return = '<tr>
        <td scope="row" colspan="3" style="padding-left:0;margin-left:0;"><hr /></td>
        </tr>';
    }
    elseif(!empty($return)){
        $return = '<tr>
        <th scope="row"><label for="'.@$array['name'].'">'.@$array['title'].'</label></th>
        <td><div>'.$return.'</div>'.$description.'</td>
        </tr>';
    }

    return $return;
}