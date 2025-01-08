<?php
/**
 * @author Mochdika Leverate
 * Unsubscribe 2019
 */

Route::group(['namespace' => 'kalfian\subscriber\Controllers','middleware'=> 'web'], function() {
	Route::get('unsubscribe', ['as'=>'unsubscribe', 'uses'=>'UnsubscribeController']);
});



