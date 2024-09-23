(function() {
  'use strict';

  $(document).ready(function() {

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
	});

}) (jQuery);