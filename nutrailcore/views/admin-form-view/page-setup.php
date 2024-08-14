<p>このセットアップ機能ページではサイトを簡単にセットアップすることが可能です。ただし、機能の中には既存の設定やページが上書きされてしまう可能性もあるため、慎重に作業を行って下さい。<br />
また、ここに設定された情報は「セットアップ情報」として一時的に保存されます。</p>
<form method="post" action="" novalidate="novalidate" enctype="multipart/form-data">
<table class="form-table" role="presentation">
<?php
$array_setup_options = null;
$array_setup_options = get_option('setup_options');
foreach($array_setupforms as $form_key => $form_value) {
    $form_value2 = null;
    $form_value2 = $form_value;
    if(!empty($array_setup_options) && is_array($array_setup_options) && !empty(@$array_setup_options[$form_value['name']])){
        $form_value2['valuetype'] = 'insert';
        $form_value2['value'] = @$array_setup_options[@$form_value['name']];
    }
    echo wpax_adminform_input($form_value2);
}
?>
</table>
<p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="セットアップ"></p>
</form>