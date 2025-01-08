jQuery(document).ready(function($) {
    /* load more */
    size_li_b = $(".itemhomefade").length;
    y=6;

    if (size_li_b <= y) {
        $('.loadseemore').hide();
    }
    $('.itemhomefade:lt('+y+')').show();
    $('.loadseemore').click(function () {
        y= (y+4 <= size_li_b) ? y+4 : size_li_b;
        $('.itemhomefade:lt('+y+')').show();
        
        if (size_li_b <= y) {
            $('.loadseemore').hide();
        }
    });

    size_li_b2 = $(".itemhomefade2").length;
    y2=6;

    if (size_li_b2 <= y2) {
            $('.loadseemore2').hide();
        }
    $('.itemhomefade2:lt('+y2+')').show();
    $('.loadseemore2').click(function () {
        y2= (y2+4 <= size_li_b2) ? y2+4 : size_li_b2;
        $('.itemhomefade2:lt('+y2+')').show();

        if (size_li_b2 <= y2) {
            $('.loadseemore2').hide();
        }
    });

    size_li_b3 = $(".itemhomefade3").length;
    y3=6;

    if (size_li_b3 <= y3) {
        $('.loadseemore3').hide();
    }
    $('.itemhomefade3:lt('+y3+')').show();
    $('.loadseemore3').click(function () {
        y3= (y3+4 <= size_li_b3) ? y3+4 : size_li_b3;
        $('.itemhomefade3:lt('+y3+')').show();

        if (size_li_b3 <= y3) {
            $('.loadseemore3').hide();
        }
    });

});
