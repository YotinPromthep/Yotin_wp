
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

jQuery("a[href='#top']").click(function() {
    jQuery("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
});


jQuery(".hov").hover(function(){
    if ( jQuery(".show-nav").css("display") === "none" ) {

        jQuery(".show-nav").css("display", "block");
    }
     else if ( jQuery(".show-nav").css("display") === "block" ){
         
        jQuery(".show-nav").css("display", "none");
    } 
});



$('.show-nav > li').each(function(i,v){

    $(this).attr('data-parent',i);
})

var color = {0:'#F00', 1:'#0F0',2:'#00F',3:'#FF0'}

jQuery(".show-nav li").hover(function() {

    var id_parent = $(this).attr('data-parent');
    $('.show-nav li').css('background','#fff');
    $(this).css('background',color[id_parent]);
});



// jQuery(".toggle-botton").click(function() {  
    
    

//     jQuery(".text-long").toggle(800);
//     $(this).text($(this).text() == 'Less More' ? 'more....' : 'Less More');

//     if ( jQuery(".text-long").css("display") === "none" ) {
        
//         console.log("block");
//         jQuery(".text-short").css("display", "block");

//     } else if ( jQuery(".text-long").css("display") === "block" ){

//         console.log("none");
//         jQuery(".text-short").css("display", "none");

//     }   
    
   
// });

var showChar = 599;
var ellipsestext = "...";
var moretext = "Show more";
var lesstext = "Show less";


jQuery('.more').each(function() {
    var content = $(this).html();

    if(content.length > showChar) {

        var c = content.substr(0, showChar);
        var h = content.substr(showChar, content.length - showChar);

        var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

        $(this).html(html);
    }

});

jQuery(".morelink").click(function(){


    if($(this).hasClass("less")) {

        $(this).removeClass("less");
        $(this).html(moretext);

    } else {

        $(this).addClass("less");
        $(this).html(lesstext);

    }
    
    $(this).parent().prev().toggle();
    $(this).prev().toggle(500);
    
    return false;
});

