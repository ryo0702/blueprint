jQuery( document ).ready(function() {
    var close_fixed_panel = localStorage.getItem('close-fixed-panel');
    if(close_fixed_panel == 'on'){
        jQuery('.fixed-panel').hide();
    }
    else{
        jQuery('.close').on('click', function(){
            jQuery(this).parent('.fixed-panel').hide();
            if(jQuery(this).parent('.fixed-panel').hasClass('fixed-panel-view')){
            }
            else{
                localStorage.setItem('close-fixed-panel',"on");
            }
        });
    }
});