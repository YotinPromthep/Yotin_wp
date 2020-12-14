
// Input search

// <<---------------------------------------------------------------------->>
// <<---------------------------------------------------------------------->>

jQuery("#main-search").click(function() {

    if ( jQuery("#show-search").css("display") === "none" ) {
        
        jQuery("#show-search").css("display", "block");
        jQuery(".over-layer").css("opacity", "1");
        jQuery(".over-layer").css("z-index", "9999");
        jQuery(".over-layer").css("visibility", "visible");
        jQuery(".cloce-search i").css("display", "block");
        jQuery(".but-search").css("display", "block");

    } 

}); 

jQuery(".cloce-search i").click(function() {

    if ( jQuery("#show-search").css("display") === "block" ){

        jQuery("#show-search").css("display", "none");
        jQuery(".over-layer").css("opacity", "0");
        jQuery(".over-layer").css("z-index", "-1");
        jQuery(".over-layer").css("visibility", "hidden");
        jQuery(".cloce-search i").css("display", "none");
        jQuery(".but-search").css("display", "none");

    }   

}); 

jQuery(".over-layer").click(function() {

    if ( jQuery("#show-search").css("display") === "block" ){

        jQuery("#show-search").css("display", "none");
        jQuery(".over-layer").css("opacity", "0");
        jQuery(".over-layer").css("z-index", "-1");
        jQuery(".over-layer").css("visibility", "hidden");
        jQuery(".cloce-search i").css("display", "none");
        jQuery(".but-search").css("display", "none");

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

        jQuery('body').toggleClass('menu_shown',800);

    });

  });

function openNav() {

    document.getElementById("mySidenav").style.width = "250px";
    jQuery("#mySidenav a").css("font-size", "20px");
    jQuery("#mySidenav .closebtn").css("font-size", "36px");

    jQuery("#over-lay").css("opacity", "1");
    jQuery("#over-lay").css("z-index", "9999");
    jQuery("#over-lay").css("visibility", "visible");


}
  
function closeNav() {

    document.getElementById("mySidenav").style.width = "0";
    jQuery("#mySidenav a").css("font-size", "0");

    jQuery("#over-lay").css("opacity", "0");
    jQuery("#over-lay").css("z-index", "-1");
    jQuery("#over-lay").css("visibility", "hidden");

}

jQuery("#over-lay").click(function() {


        document.getElementById("mySidenav").style.width = "0";
        jQuery("#mySidenav a").css("font-size", "0");
    
        jQuery("#over-lay").css("opacity", "0");
        jQuery("#over-lay").css("z-index", "-1");
        jQuery("#over-lay").css("visibility", "hidden");


}); 




// footer Responsive

// <<---------------------------------------------------------------------->>
// <<---------------------------------------------------------------------->>

jQuery(".text-head .hidd1").click(function() {

    jQuery( ".hid1" ).toggle("show");
    jQuery(".hidd1").toggleClass('flip');

});

jQuery(".text-head .hidd2").click(function() {

    jQuery( ".hid2" ).slideToggle(500);
    jQuery(".hidd2").toggleClass('flip');

});

jQuery(".text-head .hidd3").click(function() {
    
    jQuery( ".hid3" ).slideToggle(500);
    jQuery(".hidd3").toggleClass('flip');

});




// To the top

// <<---------------------------------------------------------------------->>
// <<---------------------------------------------------------------------->>


jQuery(window).scroll(function(){

    if ($(this).scrollTop() > 500){

        $('.to-top').fadeIn();

    } 
    else{

        $('.to-top').fadeOut();

    }
});

jQuery('.to-top').click(function(){

    $("html, body").animate({scrollTop : 0},700);
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
    
    $(this).parent().prev().slideToggle(500);
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



// top menu fixed

// <<---------------------------------------------------------------------->>
// <<---------------------------------------------------------------------->>


jQuery(window).scroll(function(){

    if ($(this).scrollTop() > 200){

        jQuery(".ham").css("position", "fixed");
        jQuery(".ham").css("background", "white");
        jQuery(".ham").css("top", "0");
    } 
    else{

        jQuery(".ham").css("position", "relative");

    }
});


    