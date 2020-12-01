
jQuery("#main-search").click(function() {
    if ( jQuery("#show-search").css("display") === "none" ) {

        jQuery("#show-search").css("display", "block");

    } else if ( jQuery("#show-search").css("display") === "block" ){

        jQuery("#show-search").css("display", "none");

    }    
}); 

jQuery("#drop a").click(function() {
    var t = jQuery(this).attr('id'); 
    jQuery('#drop-show').text(t);                      
});

jQuery(document).ready(function() {
    jQuery('.menu__icon').click(function(){
        jQuery('body').toggleClass('menu_shown');
    });
  });

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}
  
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.body.style.backgroundColor = "white";
}

jQuery(".text-head .hidd1").click(function() {
    if ( jQuery(".hid1").css("display") === "none" ) {

        jQuery(".hid1").css("display", "block");

    } else if ( jQuery(".hid1").css("display") === "block" ){

        jQuery(".hid1").css("display", "none");

    }    
});
jQuery(".text-head .hidd2").click(function() {
    if ( jQuery(".hid2").css("display") === "none" ) {

        jQuery(".hid2").css("display", "block");

    } else if ( jQuery(".hid2").css("display") === "block" ){

        jQuery(".hid2").css("display", "none");

    }    
});