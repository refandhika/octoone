console.log("CJS 1.0");
function setCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}
function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}
/*
function closepopupbanner(){
	$("#popup-banner-sekotak").hide();
	setCookie('closepopupbanner','1',);
}

var checkURL=["produk/susu-siap-minum/minuman-susu-cokelat-kemasan-botol/chocolate","produk/susu-siap-minum/minuman-susu-cokelat-kemasan-botol/chocolate-hazelnut","produk/susu-siap-minum/minuman-susu-cokelat-kemasan-botol","milkpedia/nutrisi-dan-kesehatan/minuman-untuk-kamu-yang-sedang-di-jalan","milkpedia/nutrisi-dan-kesehatan/minuman-asik-yang-wajib-kamu-coba","produk/susu-siap-minum/purefarm","produk/purefarm/purefarm-flavour-milk-ketan-hitam","produk/purefarm/purefarm-flavour-chocolate","produk/purefarm/purefarm-flavour-milk-coconut-delight","produk/purefarm/purefarm-flavour-milk-strawberry","produk/susu-siap-minum/purefarm/purefarm-low-fat","produk/susu-siap-minum/purefarm/purefarm-full-cream","produk/purefarm/frisian-flag-purefarm-kacang-hijau","milkpedia/nutrisi-dan-kesehatan/kenali-lebih-jauh-tentang-manfaat-susu-kacang-hijau","produk/purefarm/frisian-flag-purefarm-sweet-delight","produk/susu-siap-minum","milkpedia/manfaat-minum-susu","milkpedia/nutrisi-dan-kesehatan/kenali-susu-low-fat-dan-susu-non-fat","milkpedia/manfaat-minum-susu/runners-ini-caranya-mempertahankan-stamina-saat-berlari","milkpedia/nutrisi-dan-kesehatan/3-cara-agar-badan-tidak-cepat-lelah-setelah-olahraga","milkpedia/kapan-dan-bagaimana-cara-minum-susu/memilih-waktu-yang-tepat-untuk-minum-susu-pertumbuhan-tinggi-badan","milkpedia/kapan-dan-bagaimana-cara-minum-susu/alasan-berat-badan-tak-kunjung-turun-meski-sudah-diet","milkpedia/nutrisi-dan-kesehatan/3-menu-sarapan-sehat-dari-susu-rendah-lemak","perusahaan-kami/berita/frisian-flag-indonesia-ajak-pengunjung-car-free-day-menikmati-kelezatan-purefarm-swiss-chocolate","produk/purefarm","produk/purefarm/frisian-flag-purefarm-kacang-hijau","produk/purefarm/frisian-flag-purefarm-sweet-delight","produk/purefarm/hyperurl.co/SEMUAUHTNONDISNEY","produk/purefarm/purefarm-flavour-chocolate","produk/purefarm/purefarm-flavour-milk","produk/purefarm/purefarm-flavour-milk-coconut-delight","produk/purefarm/purefarm-flavour-milk-ketan-hitam","produk/purefarm/purefarm-flavour-milk-strawberry","produk/purefarm/purefarm-full-cream","produk/purefarm/purefarm-low-fat","produk/purefarm/purefarm-low-fat-coklat","produk/purefarm/purefarm-low-fat-french-vanilla","produk/purefarm/purefarm-low-fat-strawberry","produk/purefarm/purefarm-sweet-delight","produk/susu-siap-minum/purefarm","produk/susu-siap-minum/purefarm/purefarm-flavour-milk","produk/susu-siap-minum/purefarm/purefarm-flavour-milk-coconut-delight","produk/susu-siap-minum/purefarm/purefarm-full-cream","produk/susu-siap-minum/purefarm/purefarm-low-fat","produk/susu-siap-minum/purefarm-flavour-chocolate","produk/susu-siap-minum/purefarm-flavour-milk","produk/susu-siap-minum/purefarm-flavour-milk-coconut-delight","produk/susu-siap-minum/purefarm-flavour-milk-ketan-hitam","produk/susu-siap-minum/purefarm-full-cream","produk/susu-siap-minum/purefarm-low-fat","produk/susu-siap-minum/purefarm-low-fat-coklat","produk/susu-siap-minum/purefarm-low-fat-strawberry","Produk/Susu-Siap-Minum/Purefarm/Purefarm-Flavour-Milk","produk/minuman-siap-minum/purefarm-low-fat-strawberry","produk/purefarm","produk/purefarm/frisian-flag-purefarm-kacang-hijau","produk/purefarm/frisian-flag-purefarm-sweet-delight","produk/purefarm/hyperurl.co/SEMUAUHTNONDISNEY","produk/purefarm/purefarm-flavour-milk","produk/purefarm/purefarm-flavour-milk-strawberry","produk/purefarm/purefarm-full-cream","produk/purefarm/purefarm-low-fat-strawberry","produk/susu-siap-minum/purefarm","produk/susu-siap-minum/purefarm/purefarm-flavour-milk","produk/susu-siap-minum/purefarm/purefarm-full-cream","produk/susu-siap-minum/purefarm/purefarm-low-fat","produk/susu-siap-minum/purefarm-flavour-milk","produk/susu-siap-minum/purefarm-flavour-milk-coconut-delight","produk/susu-siap-minum/purefarm-full-cream","produk/susu-siap-minum/purefarm-low-fat","produk/susu-siap-minum/purefarm-low-fat-french-vanilla","produk/purefarm/purefarm-flavour-milk","produk/purefarm/purefarm-full-cream","produk/susu-siap-minum/purefarm","produk/susu-siap-minum/purefarm/purefarm-flavour-milk","produk/susu-siap-minum/purefarm/purefarm-full-cream","produk/susu-siap-minum/purefarm/purefarm-low-fat","perusahaan-kami/berita/frisian-flag-indonesia-ajak-pengunjung-car-free-day-menikmati-kelezatan-purefarm-swiss-chocolate","produk/purefarm","produk/purefarm/frisian-flag-purefarm-sweet-delight","produk/purefarm/hyperurl.co/SEMUAUHTNONDISNEY","produk/purefarm/purefarm-full-cream","produk/purefarm/purefarm-low-fat","produk/purefarm/purefarm-low-fat-coklat","produk/purefarm/purefarm-low-fat-french-vanilla","produk/susu-siap-minum/purefarm","produk/susu-siap-minum/purefarm/purefarm-flavour-milk","produk/susu-siap-minum/purefarm/purefarm-flavour-milk-coconut-delight","produk/susu-siap-minum/purefarm/purefarm-full-cream","produk/susu-siap-minum/purefarm/purefarm-low-fat","produk/susu-siap-minum/purefarm-flavour-chocolate","produk/susu-siap-minum/purefarm-flavour-milk","produk/susu-siap-minum/purefarm-low-fat-coklat","produk/susu-siap-minum/purefarm-low-fat-french-vanilla","produk/purefarm/purefarm-flavour-chocolate","produk/purefarm/purefarm-full-cream","produk/purefarm/purefarm-low-fat","produk/purefarm/purefarm-low-fat-coklat","produk/purefarm/purefarm-low-fat-french-vanilla","produk/susu-siap-minum/purefarm","produk/susu-siap-minum/purefarm/purefarm-flavour-milk","produk/susu-siap-minum/purefarm/purefarm-flavour-milk-coconut-delight","produk/susu-siap-minum/purefarm/purefarm-full-cream","produk/susu-siap-minum/purefarm/purefarm-low-fat","perusahaan-kami/berita/frisian-flag-indonesia-ajak-pengunjung-car-free-day-menikmati-kelezatan-purefarm-swiss-chocolate","produk/purefarm","produk/purefarm/frisian-flag-purefarm-kacang-hijau","produk/purefarm/frisian-flag-purefarm-sweet-delight","produk/purefarm/purefarm-flavour-chocolate","produk/purefarm/purefarm-flavour-milk","produk/purefarm/purefarm-flavour-milk-coconut-delight","produk/purefarm/purefarm-flavour-milk-ketan-hitam","produk/purefarm/purefarm-flavour-milk-strawberry","produk/purefarm/purefarm-full-cream","produk/purefarm/purefarm-low-fat","produk/purefarm/purefarm-low-fat-coklat","produk/purefarm/purefarm-low-fat-french-vanilla","produk/purefarm/purefarm-low-fat-strawberry","produk/purefarm/purefarm-sweet-delight","produk/susu-siap-minum/purefarm","produk/susu-siap-minum/purefarm/purefarm","produk/susu-siap-minum/purefarm/purefarm-flavour-milk","produk/susu-siap-minum/purefarm/purefarm-flavour-milk-coconut-delight","produk/susu-siap-minum/purefarm/purefarm-full-cream","produk/susu-siap-minum/purefarm/purefarm-low-fat","produk/susu-siap-minum/purefarm-flavour-chocolate","produk/susu-siap-minum/purefarm-flavour-milk-coconut-delight","produk/susu-siap-minum/purefarm-flavour-milk-ketan-hitam","produk/susu-siap-minum/purefarm-full-cream","produk/susu-siap-minum/purefarm-low-fat"];*/
function getpopuplogin(){
    if($("#login").length < 1){
        $.request('onInit', {
            update: { 'site/login': '.popup--login-panel', 'site/register': '.popup--register-panel' },
            complete: function() {
                console.log("append popup");
                setTimeout(function(){
                    $.fancybox.open($('#login'));
                },100);
                setTimeout(function(){
                $('#click-register').on('click', function(){			

			$.fancybox.close();
			$.fancybox.open({
				src  : '#register'				
			});

		});

		$('#click-login').on('click', function(){			

			$.fancybox.close();
			$.fancybox.open({
				src  : '#login'				
			});

		});

		$('#click-forgot').on('click', function(){			

			$.fancybox.close();
			$.fancybox.open({
				src  : '#forgot'				
			});

		});

		// Register
		var $registerForm = $('#register');
		if ($registerForm.length)
		{
			var $province = $registerForm.find('[name="prof"]');
			var $cities = $registerForm.find('[name="kota"] option');
			
			// On Change
			$province.on('change', function(e) {
				// Get ID
				var val = $(this).val();

				// Get selected option
				var opt = $(this).children().filter(function(index, row) {
					return $(row).val() == val;
				});
				if (opt.length)
				{
					var optID = $(opt[0]).data('id');

					// Map Cities
					$cities.map(function(index, row) {
						// Object
						var $row = $(row);

						// Hide First
						$row.hide();

						// Show if the val same with data id
						var id = $row.data('id');
						if (id == optID) $(row).show();

						return row;
					});
				}

			});
		}


		// Register Indomaret
	    var $registerFormIndomaret = $('#register-indomaret');
	    if ($registerFormIndomaret.length)
	    {
	      var $provinceIndomaret = $registerFormIndomaret.find('#province2');
	      var $citiesIndomaret = $registerFormIndomaret.find('#cities2 option');
	      
	      // On Change
	      $provinceIndomaret.on('change', function(e) {
	        // Get ID
	        var valIndomaret = $(this).val();

	        // Get selected option
	        var optIndomaret = $(this).children().filter(function(index, rowIndomaret) {
	          return $(rowIndomaret).val() == valIndomaret;
	        });
	        if (optIndomaret.length)
	        {
	          var optIDIndomaret = $(optIndomaret[0]).data('id');

	          // Map Cities
	          $citiesIndomaret.map(function(index, rowIndomaret) {
	            // Object
	            var $rowIndomaret = $(rowIndomaret);

	            // Hide First
	            $rowIndomaret.hide();

	            // Show if the val same with data id
	            var idIndomaret = $rowIndomaret.data('id');
	            if (idIndomaret == optIDIndomaret) $(rowIndomaret).show();

	            return rowIndomaret;
	          });
	        }

	      });
	    }    
	    
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
                },300);
            }

        });
        
        
        
    }else{
        $.fancybox.open($('#login'));
    }
    
                
}
$(document).ready(function(){
    
    

		
/*var height = $(window).height();
var width = $(window).width();
if(width > 767){
setTimeout(function(){
$("#main-slide").css("width",width+"px");
$("#main-section").css("width",width+"px");
$(".header").css({"width":width+"px","margin":"auto","right":"0"});
$(".footerblue").css({"width":width+"px","margin":"auto"});
$(".footer").css({"background-color":"#0F4D9A"});

$(".main-slide__bg").css("height",height+"px");
},150);
}*/
/*
	var checkstatus = 0;
	for (var i = 0; i < checkURL.length; i++) {
		if(window.location.href.indexOf(checkURL[i]) > -1) {
			checkstatus = 1;
		}
	}
	
	if(checkstatus == 1 && !getCookie('closepopupbanner') && !getCookie('sekotak_login')){
		$('head').append('<link rel="stylesheet" type="text/css" href="https://www.frisianflag.com/themes/rainlab-bonjour/assets/css/custom.css">');
		$("body").append("<div class='popup-banner-sekotak' id='popup-banner-sekotak'><a href='https://www.frisianflag.com/aktivitas-kami/sekotaktiaphari/app?utm_source=FF-INTL&utm_medium=Banner&utm_campaign=Sekotak-Tiap-Hari&utm_term=Popup-Desktop&utm_content=TRF-1PD'><div class='popup-img'><button onclick='closepopupbanner();return false;'> <i class='fa fa-close'></i> </button><img src='https://www.frisianflag.com/storage/app/media/sekotak-tiap-hari/Pop-Up-Banner-desktop.png'></a></div></div>");
		setTimeout(function(){
			$("#popup-banner-sekotak").fadeIn();
		},1000);
	}
if(checkstatus == 1 ){
setTimeout(function(){
			$(".default-content").append("<div id='notification-product' style='padding-bottom:3%'><div class='container-two'><a href='https://www.frisianflag.com/aktivitas-kami/sekotaktiaphari/app?tdiv=beliyuk&utm_source=FF-INTL&utm_medium=Banner&utm_campaign=Sekotak-Tiap-Hari&utm_term=Product-Banner&utm_content=SALE-1PD'><img style='width:100%' src='https://www.frisianflag.com/storage/app/media/sekotak-tiap-hari/Product-Banner-2.jpg'></a></div></div>");		},1000);
}
	*/

});
