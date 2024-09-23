$(function() {
	var mySwiper = new Swiper ('.swiper-container', {
	    // Optional parameters
	    loop: true,
	    autoplay: 5000,
	    speed: 1000,
	    effect: 'fade',
	    paginationClickable: true,
	    fade: {
		  crossFade: false
		},

	    // If we need pagination
	    pagination: '.swiper-pagination',

	    // Navigation arrows
	    nextButton: '.swiper-button-next',
	    prevButton: '.swiper-button-prev',

	});

	var voucherKemerdekaan = new Swiper('.voucher-kemerdekaan', {
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		}
	});


	// == PRODUCT DETAILS
     $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        autoplay: true,
  		autoplaySpeed: 3000
    });


    // == ARTICLE
    $('.slide-artikel').on('init', function(event, slick){
    	// run adaptive background js
	    $.adaptiveBackground.run();
	});

    $('.slide-artikel').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: false,
        speed: 300,
        arrows: true,
    });



    // == HOME SMALL CARD
    $('.slide-homesmall').on('init', function(event, slick){
    	// run adaptive background js
	    $.adaptiveBackground.run();
	});

    $('.slide-homesmall').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        speed: 300,
        arrows: true,
    });

     $('.gallery-activities').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        speed: 300,
        arrows: true,
        customPaging: function (slider, i) {
        //FYI just have a look at the object to find available information
        //press f12 to access the console in most browsers
        //you could also debug or look in the source
            console.log(slider);
            return  (i + 1) + '/' + slider.slideCount;
        }
    });

		$("[data-fancybox]").fancybox({
			baseTpl	:
			'<div class="fancybox-container" role="dialog" tabindex="-1">' +
				'<div class="fancybox-bg"></div>' +
				'<div class="fancybox-inner">' +
					'<div class="fancybox-infobar">' +
						'<button data-fancybox-prev title="{{PREV}}" class="fancybox-button fancybox-button--left"></button>' +
						'<div class="fancybox-infobar__body">' +
							'<span data-fancybox-index></span>&nbsp;/&nbsp;<span data-fancybox-count></span>' +
						'</div>' +
						'<button data-fancybox-next title="{{NEXT}}" class="fancybox-button fancybox-button--right"></button>' +
					'</div>' +
					'<div class="fancybox-toolbar">' +
						'{{BUTTONS}}' +
					'</div>' +
					'<div class="fancybox-navigation">' +
						'<button data-fancybox-prev title="{{PREV}}" class="fancybox-arrow fancybox-arrow--left" />' +
						'<button data-fancybox-next title="{{NEXT}}" class="fancybox-arrow fancybox-arrow--right" />' +
					'</div>' +
					'<div class="fancybox-stage">' +
						'<div class="fancybox-caption-wrap">' +
							'<div class="fancybox-caption"></div>' +
						'</div>' +
					'</div>' +
				'</div>' +
			'</div>',
		});

		$(document).ready(function(){

			$("a[data-fancybox='gallery']").on('click', function(){
				$('.fancybox-caption-wrap').appendTo('.fancybox-image-wrap');
			});
		});
});
