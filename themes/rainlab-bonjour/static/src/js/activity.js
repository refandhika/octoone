(function() {
  'use strict';

  $(document).ready(function() {
    $(window).resize();

    var $ele = $('.card__activity');
    var mobileURL = [];
    var desktopURL = [];

    // Check element
    if ($ele.length) {
      $ele.each(function(i, row) {
        mobileURL[i] = 'url(\''+ $(row).data('mobile') +'\')';
        desktopURL[i] = $(row).css('background-image');
      });
    }

    // On Window resize
    $(window).on('resize', function() {
      if ($ele.length) {
        $ele.each(function(i, row) {
          // Mobile only
          if ($(window).width() <= 425) $(row).css('background-image', mobileURL[i]);
          else $(row).css('background-image', desktopURL[i]);
        });
      }
    });



    var $img = $('.activities__gallery-image img');
    var imgMobileURL = [];
    var imgDesktopURL = [];

    // Check element
    if ($img.length) {
      $img.each(function(i, row) {
        imgMobileURL[i] = $(row).data('mobile');
        imgDesktopURL[i] = $(row).attr('src');
      });
    }

    // On Window resize
    $(window).on('resize', function() {
      if ($img.length) {
        $img.each(function(i, row) {
          // Mobile only
          if ($(window).width() <= 425) $(row).attr('src', imgMobileURL[i]);
          else $(row).attr('src', imgDesktopURL[i]);
        });
      }
    });

  });
})();
