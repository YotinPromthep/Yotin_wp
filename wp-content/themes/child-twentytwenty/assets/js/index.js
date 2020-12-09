
// Input search

// <<---------------------------------------------------------------------->>
// <<---------------------------------------------------------------------->>

jQuery("#main-search").click(function() {

    if ( jQuery("#show-search").css("display") === "none" ) {
        
        jQuery("#show-search").css("display", "block");

    } else if ( jQuery("#show-search").css("display") === "block" ){

        jQuery("#show-search").css("display", "none");

    }   

}); 

// language

// <<---------------------------------------------------------------------->>
// <<---------------------------------------------------------------------->>

jQuery("#drop a").click(function() {

    var t = jQuery(this).attr('id'); 
    jQuery('#drop-show').text(t);

});

// Open / Cloce Nav

// <<---------------------------------------------------------------------->>
// <<---------------------------------------------------------------------->>

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

// footer Responsive

// <<---------------------------------------------------------------------->>
// <<---------------------------------------------------------------------->>

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

// To the top

// <<---------------------------------------------------------------------->>
// <<---------------------------------------------------------------------->>

jQuery("a[href='#top']").click(function() {
    jQuery("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
});

// hover nav

// <<---------------------------------------------------------------------->>
// <<---------------------------------------------------------------------->>

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

// Toggle

// <<---------------------------------------------------------------------->>
// <<---------------------------------------------------------------------->>

var showChar = 590;
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
    
    $(this).parent().prev().slideToggle();
    $(this).prev().slideToggle(500);
    
    return false;
});

// Aotomatic slider

// <<---------------------------------------------------------------------->>
// <<---------------------------------------------------------------------->>

// jQuery(document).ready(function ($) {
  
//     function do_slide(){
//         interval = setInterval(function(){
//           moveRight();
//         }, 6000);
//       }
//       do_slide();
      
      
//         var slideCount = $('.swiper-wrapper .swiper-slide').length;
//         var slideWidth = $('.swiper-wrapper .swiper-slide').width();
//         var slideHeight = $('.swiper-wrapper .swiper-slide').height();
//         var sliderUlWidth = slideCount * slideWidth;
        
      
//         $('.swiper-wrapper').css({ width: slideWidth, height: slideHeight });
        
//         $('.swiper-wrapper .swiper-slide').css({ width: sliderUlWidth, marginLeft: - slideWidth });
        
//         $('.swiper-wrapper .swiper-slide img:last-child').prependTo('.swiper-wrapper .swiper-slide');
    
//         function moveLeft() {
//             $('.swiper-wrapper .swiper-slide').animate({
//                 left: + slideWidth
//             }, 700, function () {
//                 $('.swiper-wrapper .swiper-slide img:last-child').prependTo('.swiper-wrapper .swiper-slide');
//                 $('.swiper-wrapper .swiper-slide').css('left', '');
//             });
//         };
    
//         function moveRight() {
//             $('.swiper-wrapper .swiper-slide').animate({
//                 left: - slideWidth
//             }, 700, function () {
//                 $('.swiper-wrapper .swiper-slide img:first-child').appendTo('.swiper-wrapper .swiper-slide');
//                 $('.swiper-wrapper .swiper-slide').css('left', '');
//             });
//         };       
// });    
    