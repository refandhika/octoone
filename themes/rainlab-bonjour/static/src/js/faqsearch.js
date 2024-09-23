( function( $ ) {
	'use strict';

	$( document ).ready( function( e ) {

		var $input = $( '#faq-search' );
		var $items = $( '.item-accordion' );

		var doSearch = function( e ) {
			var val = $( this ).val().toUpperCase();
			if ( val ) {
				$items.each( function( i, row ) {
					if ( $( row ).children( this ).text().toUpperCase().indexOf( val ) > -1 ) $( row ).show();
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

		var $input_pers = $( '#pers-search' );
		var $input_news = $( '#news-search' );
		var $items_pers = $( '.wrp-itemnews' );

		var doSearchPers = function( e ) {
			var val = $( this ).val().toUpperCase();
			if ( val ) {
				$items_pers.each( function( i, row ) {
					if ( $( row ).children().children( 'h4' ).text().toUpperCase().indexOf( val ) > -1 ) $( row ).show();
					else $( row ).hide();
				} );

				$( '.stylepaging' ).hide();
			} else {
				$items_pers.each( function( i, row ) {
					if ( i < 6 ) $( row ).show();
					else $( row ).hide();
				} );
				$( '.stylepaging' ).show();
			}
		};

		if ( $input_pers.length ) {
			$input_pers.on( 'keyup', doSearchPers );
		}

		if ( $input_news.length ) {
			$input_news.on( 'keyup', doSearchPers );
		}
		
	} );

} )( jQuery );