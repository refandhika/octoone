$( document ).ready(function() {
       $('#date').datepicker({
                format: "mm/dd/yyyy",
                todayHighlight: true,
                autoclose: true,
        });

	$('.slider').slick({
          dots: false,
          arrows: true,
          infinite: true,
          prevArrow: $('.prev'),
          nextArrow: $('.next'),
          speed: 300,
          slidesToShow: 3,
          slidesToScroll: 3,
          responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          }]
        });
});


$('.collapse').on('hidden.bs.collapse', function () {
  // read the data-default value
  var defaultDiv = $($(this).data("parent")).data("default");
  // show the default panel
  $('.collapse').eq(defaultDiv-1).collapse('show');
})
