<?php

use Definite\Activities\Models\Activity;
use Definite\Activities\Models\Category;
use Definite\Activities\Models\Gallery;
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

Route::post('/api/aktivitas-kami/galeri', function ()
{	
	$year     = post('year');
    $category = post('category');

	$data = Gallery::where('id',2)->first();

	if($year && $category)
	{
		$data = collect($data['image_gallery'])->filter(function($q) use ($year,$category){

			if($q['year'] == $year && $q['activities'] == $category){
				return $q;
			};
		});

	}elseif($year && $category){
		$data = collect($data['image_gallery'])->filter(function($q) use ($year){

			if($q['year'] == $year ){
				return $q;
			};
		});

	}elseif(empty($year) && $category){

		$data = collect($data['image_gallery'])->filter(function($q) use ($category){

			if($q['activities'] == $category){
				return $q;
			};
		});

	}else{

		$data = collect($data['image_gallery']);

	}

	if(count($data) != 0)
	{
		foreach ($data as $key => $items) {

		$datas[]= $items;
		
		}
	}else{

		$datas = $data;
	}

	return response()->json(['items' => $datas,'total'=>count($datas)])->withHeaders([
		'Content-Type' => 'application/json',
		'Access-Control-Allow-Credentials' => 'true',
		'Access-Control-Allow-Origin' => 'https://www.frisianflag.com',
		'AMP-Access-Control-Allow-Source-Origin' => 'https://www.frisianflag.com',
		'Access-Control-Expose-Headers' => 'AMP-Access-Control-Allow-Source-Origin',

	]);

});