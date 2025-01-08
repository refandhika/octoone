jQuery(document).ready(function($) {

    var $win = $(window);
    $('.mh').matchHeight();

    // For section image
    $(window).on('resize', function() {
      var old = null;
      $('.section_card .card_product .card__head').each(function(i, row) {
        $('.section_card .card_product .card__head').css('height', 'auto');
        if (old < $(row).height()) old = $(row).height();
      });
      // Set Height
      $('.section_card .card_product .card__head').height(old);

      // Find the image on card
      var $images = $('.section_card .card_featured .card__image').not('.section_card .card_product .card__image');
      // Get window width
      var windowWidth = $(this).width();

      if ($images.length) {

          // Only on medium screen
          if (windowWidth > 768) {

              $images.each(function(i, row) {
                  var $row = $(row);
                  $row.css('background-image', 'url(\'' + $row.children('img').attr('src') + '\')');

              });

              $.adaptiveBackground.run();

          } else {
              $images.each(function(row) {
                  var $row = $(row);
                  $row.css('background-image', 'none');
              });
          }
      }

      // For Activites
      var $activities = $('.activities__thumbnail-item');
      if ($activities.length) {
          if (windowWidth > 768) {
              $('.activities__thumbnail-item').height($('.activities__thumbnail-item').width());
              $('.activities__thumbnail-item_alt').height($('.activities__thumbnail-item_alt').width());
          } else {
              $('.activities__thumbnail-item').css('height', 'auto');
              $('.activities__thumbnail-item_alt').css('height', 'auto');
              $('.mh-activities').matchHeight();
          }
      }
    } ).resize();

    // For dropdown toggle
    var $typeDropdown = $('.container-menutab .container-one ul .toggle');
    if ($typeDropdown.length) {
        $typeDropdown.on('click', function(e) {
            e.preventDefault();

            $(this).siblings().slideToggle('fast');
            $(this).children('a').toggleClass('opened');
        });
    }
});
