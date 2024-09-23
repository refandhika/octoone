<?php
/**
 * @copyright (C) 2018, PT. DEFINITE MAJI ARSANA
 * @author Nurimansyah Rifwan <iman@definite.co.id>
 */

Route::group(['prefix' => 'api/v1/', 'namespace' => 'Definite\Search\Controllers'], function() {
    Route::get('/search', 'ApiController@getAll');
    Route::get('/idb', 'ApiController@getIDB');
    Route::get('/friso', 'ApiController@getFriso');
});

Route::group(['namespace' => 'Definite\Search\Controllers'], function() {
    Route::get('/search', 'FixController@notFound');
});