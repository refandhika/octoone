$(document).ready(function() {

	/* menu mobile slide */
    $(".nav-mobile").click(function(){
        $(".mainmenu").slideToggle();
    });

    /* search header */
    $("body").click(function(){
        $(".search-header").show();
    });

    /* load more */
    size_li_b = $(".itemhomefade").size();
    y=6;
    $('.itemhomefade:lt('+y+')').show();
    $('.loadseemore').click(function () {
        y= (y+4 <= size_li_b) ? y+4 : size_li_b;
        $('.itemhomefade:lt('+y+')').show();
    });

    size_li_b2 = $(".itemhomefade2").size();
    y2=6;
    $('.itemhomefade2:lt('+y2+')').show();
    $('.loadseemore2').click(function () {
        y2= (y2+4 <= size_li_b2) ? y2+4 : size_li_b2;
        $('.itemhomefade2:lt('+y2+')').show();
    });

    /* accordion */
    $(".accordion h3").click(function () {
        $(this).next(".pane").slideToggle("slow").siblings(".pane:visible").slideUp("slow");
        $(this).toggleClass("current");
        $(this).siblings("h3").removeClass("current");
    });

    /* carousel product detail */
     $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: true,
        centerMode: false,
        focusOnSelect: true
    });

    /* slide artikel */
    $('.slide-artikel').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: false,
        speed: 300,
        arrows: true
    });

    /* slide artikel */
    $('.slide-homesmall').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        speed: 300,
        arrows: true
    });

    /* scroll to section */
    $(".to-section").click(function() {
        $('html, body').animate({
            scrollTop: $(".slide-homesmall").offset().top
        }, 800);
    });


    /* tab content */
	$('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	})



    /* inline search */
    $('.live-search-list .itemlist-search').each(function(){
        $(this).attr('data-search-term', $(this).text().toLowerCase());
    });
    $('.live-search-box').on('keyup', function(){
        var searchTerm = $(this).val().toLowerCase();
        $('.live-search-list .itemlist-search').each(function(){
            if ($(this).filter('[data-search-term *= ' + searchTerm + ']').length > 0 || searchTerm.length < 1) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });

    /* search header */
    $(".searchbtn").click(function(){
        $(".searchform").fadeIn();

				// Focusing
				$('.searchform > input[type="search"]').focus();

				// Animation
				$('.searchform > input[type="search"]').addClass( 'opened' );
				$('.searchform > .closesearch').addClass( 'opened' );

				// Escape Pressed
				$( document ).on( 'keypress', function( e ) {
					if ( e.keyCode == 27 ) $(".closesearch").click();
				} );
    });
    $(".closesearch").click(function(){
        $(".searchform").fadeOut();

				// Animation
				$('.searchform > .closesearch').removeClass( 'opened' );
				$('.searchform > input[type="search"]').removeClass( 'opened' );
    });

    // Match Height
		var $win = $(window);
    $('.mh').matchHeight();

		// For Activites
		$('.activities__thumbnail-item').height($('.activities__thumbnail-item').width());
		$('.activities__thumbnail-item_alt').height($('.activities__thumbnail-item_alt').width());

		// For section image
		$( window ).on( 'resize', function() {
			// Find the image on card
			var $images = $( '.section_card .card__image' );

			if ( $images.length ) {
				// Get window width
				var windowWidth = $( this ).width();

				// Only on medium screen
				if ( windowWidth > 768 ) {
					$images.each( function( i, row ) {
						var $row = $( row );
						$row.css( 'background-image', 'url(\'' + $row.children( 'img' ).attr( 'src' ) + '\')');
					} );

				} else {
					$images.each( function( row ) {
						var $row = $( row );
						$row.css( 'background-image', 'none');
					} );
				}
			}
		} ).resize();;

		// For dropdown toggle
		var $typeDropdown = $( '.container-menutab .container-one ul .toggle' );
		if ( $typeDropdown.length ) {
			$typeDropdown.on( 'click', function( e ) {
				e.preventDefault();

				$( this ).siblings().slideToggle( 'fast' );
				$( this ).children( 'a' ).toggleClass( 'opened' );
			} );
		}

});

( function( $ ) {
	'use strict';

	$( document ).ready( function( e ) {

		var $input = $( '#faq-search' );
		var $items = $( '.item-accordion' );

		var doSearch = function( e ) {
			var val = $( this ).val().toUpperCase();
			if ( val ) {
				$items.each( function( i, row ) {
					if ( $( row ).children( 'h3' ).text().toUpperCase().indexOf( val ) > -1 ) $( row ).show();
					else $( row ).hide();
				} );

				$( '.loadseemore' ).hide();
			} else {
				$items.each( function( i, row ) {
					if ( i < 6 ) $( row ).show();
					else $( row ).hide();
				} );
				$( '.loadseemore' ).show();
			}
		};

		if ( $input.length ) {
			$input.on( 'keyup', doSearch );
		}

	} );

} )( jQuery );

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

	} );

} )( jQuery );
