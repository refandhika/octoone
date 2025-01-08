<?php
/**
 * @author Mochdika
 */

Route::group(['prefix' => 'api/', 'namespace' => 'leverate\careers\Controllers'], function() {
    Route::get('article','CareerController@getArticle'); 
});
