
jQuery("#main-search").click(function() {
    if ( jQuery("#show-search").css("display", "none") ) {

        jQuery("#show-search").css("display", "block");

    } else if ( jQuery("#show-search").css("display", "block") ){

        jQuery("#show-search").css("display", "none");

    }    
}); 

jQuery("#drop a").click(function() {
    var t = jQuery(this).attr('id'); 
    jQuery('#drop-show').text(t);                      
});
