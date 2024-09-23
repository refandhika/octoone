<?php
Route::group([
	'namespace'	 	=> 'kalfian\campaign\Http\Controllers',
	'middleware'	=> 'web'
], function () {
	Route::group([
		'prefix' => 'form',
		'middleware' => 'RainLab\User\Classes\AuthMiddleware'
	], function () {
		// route for form quiz and upload
		Route::post('indomaret', 'FormController@indomaret');
		Route::post('alfamart', 'FormController@alfamart');
	});

	Route::group([
		'prefix' => 'campaign'
	], function () {
		// route for export leads indomaret
		Route::get('export/indomaret', 'ExportController@indomaret');
		Route::get('export/alfamart', 'ExportController@alfamart');
	});
});