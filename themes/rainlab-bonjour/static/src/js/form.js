jQuery(document).ready(function($) {
  var $loadMore = $( '#buttonFrisian' ).hide();
  var $loadMoreProduk = $( '#buttonProduk' ).hide();
  var $loadMoreMilkPedia = $( '#buttonMilkpedia' ).hide();
  var $loadMoreActivity = $( '#buttonAcitvity' ).hide();
  var $loadMoreNews = $( '#buttonNews' ).hide();
  var $loadMorePers = $( '#buttonPers' ).hide();
  var $loadMoreAbout = $( '#buttonAbout' ).hide();

  var form = $('#form-contact');
  var formLogin = $('#login-form');
  var formRegister = $('#register-form');
  var formRegisterIndomaret = $('#register-form-indomaret');
  var formRegisterAlfamart = $('#register-form-alfamart');


  // validation
  form.validate({
      rules: {
        email:{
          required	: true,
          email:true
        }
      }
  });

  formLogin.validate({
      rules: {
        email:{
          required  : true,
          email:true
        }
      }
  });

  formRegister.validate({
    rules: {
      name: {
        nameFormat: true 
      },
      surename: {
        nameFormat: true 
      },
      email:{
        required: true,
        email: true
      },
      agreement: {
        required : true
      },
      password: "required",
      repassword: {
        equalTo: "#password"
      }
    }
  });

  formRegisterIndomaret.validate({
    rules: {
      name: {
        nameFormat: true 
      },
      surename: {
        nameFormat: true 
      },
      email:{
        required: true,
        email: true
      },
      agreement: {
        required : true
      },
      password: "required",
      repassword: {
        equalTo: "#password2"
      }
    }
  });

  formRegisterAlfamart.validate({
    rules: {
      name: {
        nameFormat: true 
      },
      surename: {
        nameFormat: true 
      },
      email:{
        required: true,
        email: true
      },
      agreement: {
        required : true
      },
      password: "required",
      repassword: {
        equalTo: "#password2"
      }
    }
  });

  $.validator.addMethod("nameFormat", function(value, element) {
    return this.optional(element) || /^[a-zA-Z\']{2,}$/.test(value);
  }, "Nama harus lebih dari 2 huruf dan tidak boleh berisi angka atau karakter spesial");

  // create your custom rule
  $.validator.addMethod("email", function(row, element) {
  		return this.optional( element ) || ( /^[a-z0-9]+([-._][a-z0-9]+)*@([a-z0-9]+(-[a-z0-9]+)*\.)+[a-z]{2,4}$/.test( row ) && /^(?=.{1,64}@.{4,64}$)(?=.{6,100}$).*/.test( row ) );
  }, 'Format alamat email salah');

  $('#phone, #phone2').mask('0000000000000');


  $('#jumlah').mask('#');

  $('#dob').fdatepicker({
		initialDate: '02-12-1989',
		format: 'mm-dd-yyyy',
		disableDblClickSelection: true,
		leftArrow:'<i class="fa fa-caret-left" aria-hidden="true"></i>',
		rightArrow:'<i class="fa fa-caret-right" aria-hidden="true"></i>'		
	});

  $('#dob2').fdatepicker({
    initialDate: '02-12-1989',
    format: 'mm-dd-yyyy',
    disableDblClickSelection: true,
    leftArrow:'<i class="fa fa-caret-left" aria-hidden="true"></i>',
    rightArrow:'<i class="fa fa-caret-right" aria-hidden="true"></i>'   
  });

  jQuery.extend(jQuery.validator.messages, {
      required: "Kolom harus terisi",
      equalTo: "Password tidak cocok.",
  });

  form.submit(function() {
    $(this).validate();

    if($(this).valid()){
      $.fancybox.open('Terima kasih, pesan Anda telah kami terima dan akan<br> segera dijawab oleh Tim Frisian Flag Indonesia');
      return true;
    }

    return false;
  });

  formLogin.submit(function() {
    $(this).validate();

    if($(this).valid()){
      window.location.replace("user-dashboard");
    }

    return false;
  });

  // $('body').on('submit', '#register-form', function(e){
  //   e.preventDefault();
  //   alert('asdasdasd');
  // });

  // formRegister.submit(function() {
  //   $(this).validate();

  //   if($(this).valid()){
  //     $.fancybox.close();
  //     $.fancybox.open({
		// 		src  : '#thank-you'				
		// 	});
  //   }

  //   return false;
  // });


  $('#filter-gallery').change(function(){
     $('#notfound').hide();
    var year = $(this).find(":selected").val();

    var gallery = $( '.itemhomefade2' );

    e = 0;

    gallery.each( function( i, row ) {

      if ( $( row ).children( 'a' ).attr('alt') == year ){
        $( row ).show();
        e = e+1;
      } else $( row ).hide();

    } );

    console.log(e);

    if (e==0) {
      $('#notfound').show();

    }


  });

  $('#filter-activities').change(function(){
     $('#notfound').hide();
    var activities = $(this).find(":selected").val();

    var gallery = $( '.itemhomefade2' );

    e = 0;

    gallery.each( function( i, row ) {

      if ( $( row ).children( 'a' ).attr('data') == activities ){
        $( row ).show();
        e = e+1;
      } else $( row ).hide();

    } );
    console.log(e);
    if (e==0) {
      $('#notfound').show();

    }
  });

});
