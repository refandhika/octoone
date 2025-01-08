$( document ).ready(function() {
       $('#date').datepicker({
                format: "mm/dd/yyyy",
                todayHighlight: true,
                autoclose: true,
        });
});


$('.collapse').on('hidden.bs.collapse', function () {
  // read the data-default value
  var defaultDiv = $($(this).data("parent")).data("default");
  // show the default panel
  $('.collapse').eq(defaultDiv-1).collapse('show');
})
