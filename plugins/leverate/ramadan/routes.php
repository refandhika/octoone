<?php
/**
 * @author Mochdika
 * Campaign Ramadan 2019
 */

Route::group(['prefix' => 'aktivitas-kami/ramadan-istimewa/', 'namespace' => 'leverate\ramadan\Http\Controllers','middleware'=> 'web'], function() {
	Route::get('redeem-amp', ['as'=>'redeem-amp', 'uses'=>'RamadanAMPController@storeRedeem']);
    Route::post('redeem', ['as'=>'redeem', 'uses'=>'RamadanController@storeRedeem']);
    Route::get('export/{start}/{end}/{product}/{market}', 'ExportController@exportData'); 
	 Route::get('b2507468f95156358fa490fd543ad2f0', 'ExportController@exportDataUser'); 
  
});



