// Global Accordion
( function( $ ) {
	'use strict';

	$( document ).ready( function( e ) {

		var windowWidth = $( window ).width();

		if ( windowWidth > 1024 ) {
			if ( typeof $( '.accordion' ).accordion( 'instance' ) !== 'undefined' ) $( '.accordion' ).accordion( 'destroy' );
		} else {
			$( '.accordion' ).accordion( {
				collapsible: true,
				heightStyle: "content"
			} );

			// For Slide Artikel
			if ( typeof $('.slide-artikel').slick('getSlick') === 'object' ) {
				$('.slide-artikel').slick('unslick');
			}
		}

		$('#parentVerticalTab').easyResponsiveTabs({
            type: 'vertical', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#nested-tabInfo2');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });

    } );
    
} )( jQuery );

jQuery(document).ready(function($) {
	/* accordion */
    $(".accordion h3").click(function () {
        $(this).next(".pane").slideToggle("fast").siblings(".pane:visible").slideUp("fast");
        $(this).toggleClass("current");
        $(this).siblings("h3").removeClass("current");
    });
});

(function($) {
    $('.accordion > li:eq(0) span').addClass('active').next().slideDown();

    $('.accordion span').click(function(j) {
        var dropDown = $(this).closest('li').find('figure');

        $(this).closest('.accordion').find('figure').not(dropDown).slideUp();

        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
        } else {
            $(this).closest('.accordion').find('span.active').removeClass('active');
            $(this).addClass('active');
        }

        dropDown.stop(false, true).slideToggle();

        j.preventDefault();
    });
})(jQuery);