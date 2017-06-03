
jQuery( document ).ready(function() {

  
  // Handler for .ready() called.

  $ = jQuery;
$(".fa-times").hide();
$(".search-form").hide();
//if (jQuery(window).width() > 100) {

  jQuery( ".fa-search" ).on( "click", function() {
    //jQuery(".search-form input[type=search]").focus();
   if(!jQuery( ".fa-search" ).hasClass( "show-menu" )){
    jQuery( ".fa-search" ).addClass( "show-menu" );
    $(".fa-times").show();
    jQuery( ".search-form" ).show();
    //jQuery( ".menu-item" ).addClass( "hide-menu-items" );
    jQuery( ".menu-item" ).hide();
    jQuery( ".fa-search" ).hide();
    if(!jQuery('.fa-times').length ){
      // jQuery( '' ).appendTo( ".top-bar-search" );
    }
    jQuery( ".top-bar-search" ).addClass( "top-bar-menu" );
    jQuery( ".top-bar-search" ).removeClass( "hide-search" );
    jQuery( "top-bar-search" ).addClass( "triangle-up" );
    jQuery( ".fa-search" ).addClass( "cross" );
    jQuery( ".fa-search" ).focus();
jQuery(".search-form input[type=search]").focus();




     }

       if (jQuery(window).width() < 600){
      jQuery(".site-title").addClass("hidden");
      jQuery(".title-area").addClass("hide-title-area");
      jQuery("header.site-header .widget-area").addClass("hide-title-area");

 }
  });
 /* jQuery( "input.search-field" ).focusout(function() {
  hide_search_nav();
  });*/
 jQuery( ".fa-times" ).click(function() {
        hide_search_nav();
$(".fa-times").hide();

    $( ".top-bar-search" ).removeClass( "top-bar-menu" );

       if (jQuery(window).width() < 600){
      $(".site-title").removeClass("hidden");
      $(".title-area").removeClass("hide-title-area");
      $("header.site-header .widget-area").removeClass("hide-title-area");

 }
  });

 jQuery(".search-form input[type=search]").on("blur", function(event){
          hide_search_nav();
$(".fa-times").hide();

    $( ".top-bar-search" ).removeClass( "top-bar-menu" );

      if (jQuery(window).width() < 600){
      $(".site-title").removeClass("hidden");
      $(".title-area").removeClass("hide-title-area");
      $("header.site-header .widget-area").removeClass("hide-title-area");

 }


    });

//}

function hide_search_nav(){
    jQuery( ".menu-item" ).show();
    if (jQuery(window).width() > 1023) {
      jQuery( "#menu-item-655" ).css("display", "none");

    }
    jQuery( ".fa-search" ).show();
    jQuery( ".search-form" ).hide();
    jQuery( ".fa-search" ).removeClass( "show-menu" );
    jQuery( "top-bar-search" ).removeClass( "triangle-up" );
    jQuery( "#menu-main-menu" ).removeClass( "top-bar-menu" );
    jQuery( "#menu-main-menu" ).addClass( "hide-search" );
    jQuery( '.fa-times' ).hide();
    jQuery( ".fa-search" ).removeClass( "cross" );

}

  jQuery("#menu-item-532 > a").attr("target", "_blank");



});

/*jQuery( ".bop-nav-search" ).on( "click", function() {
  alert('click');
});*//*
jQuery( ".bop-nav-search" ).click(function() {
  alert( "Handler for .click() called." );
});*/

jQuery(document).ready(function($) {

    // Get header code and change header components
    var headerCode = $("header").html();
    headerCode = '<header id="fixed-header" style="display:none;" class="site-header fixed">' + headerCode + '</header>';

    // Replace header content starts as hidden
    $("header").before(headerCode);
   
    // End Header Replacement
    if (jQuery(window).width() < 1024){
            var headerHeight = 0;

    }else{
          var headerHeight = 33;

    }

    console.log(headerHeight);

    $(window).on('scroll', function() { //OnScroll, invoke
    var scrollTop = $(window).scrollTop();
   var distance = $('body').offset().top;
   //var distance = $('header').offset().top+100;

   console.log('Site Header', distance);
   console.log('scrollTop', scrollTop);

  var difference = distance - scrollTop;
 console.log('Diferencia', Math.abs(difference));
    if(Math.abs(difference) > headerHeight) {
       //If the current scroll position is more than 100, add class
        //$( "header.site-header" ).addClass("fixed");
        $("#fixed-header").addClass("fixed");
        $("#fixed-header").css("display","block");
        $("header.site-header .wrap").css({"padding": "7px 0"});
    } else {
        //Else remove it
        $("#fixed-header").css("display","none");
        $( "header.site-header" ).removeClass("fixed");
          $("header.site-header .wrap").css({"padding": "20px 0"});
    }
});


    
});




