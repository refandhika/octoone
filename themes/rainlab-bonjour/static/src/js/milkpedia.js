// Load More flow for "Our Milkpedia" sections.
( function( $ ) {
	'use strict';
    var hostName = window.location.protocol + '//' + window.location.hostname
	// console.log(hostName);
    // Check if function exist
	if ( typeof $.fn.ajaxOurmilkpedia === 'undefined' ) {
		$.fn.ajaxOurmilkpedia = function( opts ) {

			// Set default options
			var options = $.extend( {
				url: hostName + '/milkpedia/api/posts/',
				totalData: 0,
				perPage: 6
			}, opts );

			// Return
			return this.each( function() {

				// Get elements
				var $loader = $( this ).children( '#loader' );
				var $loadMore = $( this ).children( '.btn-loadmore' );
				var $tpl = $( '<div />');
				var page = 1;
				var totalPage = Math.ceil( options.totalData / options.perPage ) + 1;
				var data = {
                    'last_page': 2,
                    'current_page': 1
                };

				// Functions
				var loadMore = function( e ) {
					e.preventDefault();

					// Increase page
					page++;

					// Hide Loadmore
					// $loadMore.hide();

					// Show laoder
					$loader.fadeIn();

					// Call the "loadData" function
					loadData();


                };
                var loadData = function() {
                    $.get( options.url, { page: page }, null, 'json' )
                        .then( setData )
                        .then( renderHTML );
                };
                var setData = function( res ) {
                    data = res;

                    // Show loadmore first
                    $loadMore.show();

                    console.log(data);
					// Hide the loadmore if page is same as total page
                    if ( data.current_page === data.last_page ) $loadMore.hide();

					// Hide Loader
					$loader.hide();
				};

				var renderHTML = function() {
					// Loop the data
					$.each( data.data, function( i, row ) {

						if ( i < options.perPage ) {
							var $html = $tpl.clone();
							$html.addClass( 'col-sm-4 itemhomefade' ).append(
								$( '<div />' ).addClass( 'card card_featured' ).append(
									$( '<div />' ).addClass( 'card__thumbnail' ).append(
										$( '<div />' ).addClass( 'card__image' ).append(
											$( '<img />' ).attr( {
												src: hostName + "/storage/app/media/" + row.featured_image,
												alt: row.title
											} )
										)
									).append(
										$( '<div />' ).addClass( 'card__meta' )
											.append(
												$( '<header />' ).addClass( 'card__head' ).append(
													$( '<h3 />' ).append(
														$( '<a />' ).attr( 'href', window.location.href + "/"  + row.slug ).html( row.title )
													)
												)
											)
											.append(
												$( '<a />' ).attr( 'href', window.location.href + "/" + row.slug ).addClass( 'button hidden-xs' ).html( 'Read More' )
											)
									)
								)
							);
						}

						// Before loader, append it
						$loader.before( $html ).prev().fadeIn();

					} );

					// Re-Resize Window
					$( window ).resize();
				}

				// Hide loader and loadmore button first
				$loader.hide();
                // console.log(data)
				if ( data.current_page === data.last_page ) $loadMore.hide();

				// Loadmore click
				$loadMore.on( 'click', loadMore );

			} );

		};
	}

} )( jQuery );
