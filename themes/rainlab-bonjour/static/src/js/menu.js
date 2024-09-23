$(function() {

  var mobileMenu    = $('.headermenu-xs'),
    body            = $('body'),
    parentMenu      = $('.submenu-xs'),
    childMenu       = $('.val-submenu-xs'),
    hasChildMenu    = $('.main-menu__list.has-child > a');

  // Burger Menu Action
    $(".wrp-navbar").click(function(){
      $(this).toggleClass('active');
      mobileMenu.toggleClass('is-open');
      body.toggleClass('menu-open');
    });


    // Parent Menu
    parentMenu.each(function() {
      var $this = $(this);
      $('.submenu-xs > a').attr('href', 'javascript:;');

      $this.click(function() {
        childMenu.removeClass('active');
        $this.find(childMenu).toggleClass('active');
      });
    });

    // Add chevron on has child menu
    hasChildMenu.each(function() {
        $(this).append(' <i class="fa fa-angle-down" aria-hidden="true"></i>');
        $(this).parent().find('.val-submenu li').attr('class', '');
    });

});
