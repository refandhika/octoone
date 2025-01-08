// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 0;
var navbarHeight = $('.header').outerHeight();

$(window).scroll(function(event){
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 100);

function hasScrolled() {
    var st = $(this).scrollTop();

    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;

    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        $('.header').addClass('nav-up');
        $('.header').removeClass('fixed');
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            $('.header').removeClass('nav-up');
            $('.header').addClass('fixed');
        }

        if (st == 0){
            $('.header').css('margin-top', '-100%');
            $('.header').removeClass('fixed');
            setTimeout(function(){
                $('.header').css('margin-top', '0');
            }, 400)
        }
    }

    lastScrollTop = st;
}


// SEARCH BUTTON FUNCTION
$(".searchbtn").click(function() {
    $(".searchform").fadeIn();

    // Focusing
    $('.searchform > form > input[type="search"]').focus();

    // Animation
    $('.searchform > form > input[type="search"]').addClass('opened');
    $('.searchform > form > .closesearch').addClass('opened');

    // Escape Pressed
    $(document).on('keypress', function(e) {
        if (e.keyCode == 27) $(".closesearch").click();
    });
});

$(".closesearch").click(function() {
    $(".searchform").fadeOut();

    // Animation
    $('.searchform > .closesearch').removeClass('opened');
    $('.searchform > input[type="search"]').removeClass('opened');
});

/* search header */
$("body").click(function(){
    $(".search-header").show();
});

/* menu mobile slide */
$(".nav-mobile").click(function(){
    $(".mainmenu").slideToggle();
});

/* scroll to section */
$(".to-section").click(function() {
    $('html, body').animate({
        scrollTop: $(".slide-homesmall").offset().top
    }, 800);
});

$('.lang-picker').click(function (e) {
    $.ajax({
        method: 'POST',
        url: '/lang',
        data: {
            lang: $(this).data('lang')
        },
        xhrFields: {
            withCredentials: true,
        },
    }).done(function (response) {
        console.log(response);

        window.location.reload();
    });
});