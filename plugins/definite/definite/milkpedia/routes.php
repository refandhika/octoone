<?php

use Definite\Milkpedia\Models\Category;
use Definite\Milkpedia\Models\Milkpedia;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

/*
 Routes for milkpedia
 */
Route::group(['namespace' => 'Definite\Milkpedia\Controllers', 'prefix' => 'api'], function() {
    Route::get('/milkpedia', 'Milkpedia@apiShowByCategory');
});