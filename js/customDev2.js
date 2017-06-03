jQuery( document ).ready(function() {
	if (jQuery(window).width() < 1024) {
 		  jQuery(".top-bar-search").insertAfter('.title-area');
//		  jQuery(".nav-primary").appendTo('.site-header');
//		  jQuery(".dashicons-menu").appends("</div></div><div></div>");
//		  jQuery( "button.menu-toggle" ).clone().insertAfter( "form.bop-nav-search" );
			
			var device_height = $(window).height() - 50;
			console.log("height:", device_height);
			jQuery(".nav-primary").css("height", device_height + "px");
			jQuery(".nav-primary").css("overflow-y", "auto");

	}
	else {

	}
	/*console.log(jQuery(".nav-primary").html());
	//jQuery("#mobile-genesis-nav-primary").empty();
	//alert('menu');
	//dashicons-menu
	//jQuery("#genesis-nav-primary").appendTo('.site-header');
	//jQuery("#bop-nav-search").appendTo('.wrap');

	//bop-nav-search*/
//	jQuery("form.bop-nav-search").insertAfter('.title-area');
});

jQuery(window).resize(function(){


      		if (jQuery(window).width() < 1024) {
 		  //jQuery(".top-bar-search").insertAfter('.title-area');
//		  jQuery(".nav-primary").appendTo('.site-header');
//		  jQuery(".dashicons-menu").appends("</div></div><div></div>");
//		  jQuery( "button.menu-toggle" ).clone().insertAfter( "form.bop-nav-search" );


	}
	else {
			var search = document.getElementsByClassName("top-bar-search");

			 //jQuery('.right.search').append(search);
	}



});
