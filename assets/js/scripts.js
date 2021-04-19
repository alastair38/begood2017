jQuery(document).foundation();
/*
These functions make sure WordPress
and Foundation play nice together.
*/

jQuery(document).ready(function() {

    // Remove empty P tags created by WP inside of Accordion and Orbit
    jQuery('.accordion p:empty, .orbit p:empty').remove();

	 // Makes sure last grid item floats left
	jQuery('.archive-grid .columns').last().addClass( 'end' );

	// Adds Flex Video to YouTube and Vimeo Embeds
	jQuery('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').wrap("<div class='flex-video'/>");

	jQuery.cookieBar();


	//Check to see if the window is top if not then display button
	jQuery(window).scroll(function(){
		if (jQuery(this).scrollTop() > 300) {
			jQuery('.scrollToTop').fadeIn();
		} else {
			jQuery('.scrollToTop').fadeOut();
		}
	});



  jQuery(window).scroll(function() {
        var scroll = jQuery(window).scrollTop();

       if (scroll >= 400) {
           jQuery(".header").addClass('translateY');
       } else {
       jQuery(".header").removeClass('translateY');


        }
	});

	//Click event to scroll to top
	jQuery('.scrollToTop').click(function(){
		jQuery('html, body').animate({scrollTop : 0},800);
		return false;
	});

  var accords = document.querySelectorAll('.is-accordion-submenu'), i;


for (i = 0; i < accords.length; ++i) {
accords[i].setAttribute("role", "none");
}

var mainMenu = document.getElementById('menu-main-1');

mainMenu.removeAttribute("aria-multiselectable");

});
