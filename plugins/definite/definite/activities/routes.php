<?php

use Definite\Activities\Models\Activity;
use Definite\Activities\Models\Category;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
/*
 Routes for milkpedia
 */

Route::get('/api/activity', function(Request $request)
{
	$value = $request->input('keyword');
	$data = Activity::with('categories')->whereRaw('description LIKE "%'.$value.'%"')
	->orWhereRaw('title LIKE "%'.$value.'%"')
	->orderBy('id', 'DESC')->orderBy('id')->take(5)->get();

	return response()->json($data);
});


Route::get('/activity/loadmore', function (Request $request)
{	
	$value = $request->input('keyword');
	$data = Activity::with('categories')->whereRaw('description LIKE "%'.$value.'%"')
	->orWhereRaw('title LIKE "%'.$value.'%"')
	->orderBy('id', 'DESC')->orderBy('id')->paginate(5);
	return response()->json($data);
});


Route::get('/all/activity', function (Request $request)
{	
	$value = $request->input('keyword');
	$data = Activity::with('categories')->whereRaw('description LIKE "%'.$value.'%"')
	->orWhereRaw('title LIKE "%'.$value.'%"')
	->orderBy('id', 'DESC')->orderBy('id')->take(1)->get();

	return response()->json($data);
});