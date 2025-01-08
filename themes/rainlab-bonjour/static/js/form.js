jQuery(document).ready(function($) {

  var form = $('#form-contact');

  // validation
  form.validate({
      rules: {
        email:{
          required	: true,
          email:true
        }
      }
  });

  // create your custom rule
  $.validator.addMethod("email", function(value, element) {
  		return this.optional( element ) || ( /^[a-z0-9]+([-._][a-z0-9]+)*@([a-z0-9]+(-[a-z0-9]+)*\.)+[a-z]{2,4}$/.test( value ) && /^(?=.{1,64}@.{4,64}$)(?=.{6,100}$).*/.test( value ) );
  }, 'Format alamat email salah');



  jQuery.extend(jQuery.validator.messages, {
      required: "Kolom harus terisi"
  });

  form.submit(function() {
    $(this).validate();

    if($(this).valid()){
      // window.location.href="https://stackoverflow.com";
      $.fancybox.open('Terima kasih, pesan Anda telah kami terima dan akan<br> segera dijawab oleh Tim Frisian Flag Indonesia',{
       
        afterClose: function() {
         window.location.reload();
       }
    });
      return true;

    }

    return false;
  });

});
