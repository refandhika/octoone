<?php

use Definite\Aboutus\Models\AboutUs;
use Definite\Aboutus\Models\Award;
use Definite\Aboutus\Models\FrisianFlag;
use Definite\Aboutus\Models\History;
use Illuminate\Http\Request;

/*
 Routes for milkpedia
 */

Route::get('/api/aboutUs', function (Request $request) {
    $value = $request->input('keyword');
    $data = AboutUs::whereRaw('description LIKE "%'.$value.'%"')
  ->orWhereRaw('title LIKE "%'.$value.'%"')
  ->orderBy('id', 'DESC')->orderBy('id')->take(1)->get();

    return response()->json($data);
});

Route::get('/api/award', function (Request $request) {
    $value = $request->input('keyword');
    $data = Award::whereRaw('description LIKE "%'.$value.'%"')
  ->orWhereRaw('title LIKE "%'.$value.'%"')
  ->orderBy('id', 'DESC')->orderBy('id')->take(1)->get();

    return response()->json($data);
});

Route::get('/api/frisian-flag', function (Request $request) {
    $value = $request->input('keyword');
    $data = FrisianFlag::WhereRaw('title LIKE "%'.$value.'%"')
  ->orderBy('id', 'DESC')->orderBy('id')->take(1)->get();

    return response()->json($data);
});

Route::get('/api/history', function (Request $request) {
    $value = $request->input('keyword');
    $data = History::whereRaw('description LIKE "%'.$value.'%"')
  ->orWhereRaw('title LIKE "%'.$value.'%"')
  ->orderBy('id', 'DESC')->orderBy('id')->take(1)->get();

    return response()->json($data);
});

// end

Route::get('/all/aboutUs', function (Request $request) {
    $value = $request->input('keyword');
    $data = AboutUs::whereRaw('description LIKE "%'.$value.'%"')
  ->orWhereRaw('title LIKE "%'.$value.'%"')
  ->orderBy('id', 'DESC')->orderBy('id')->take(1)->get();

    return response()->json($data);
});

Route::get('/all/award', function (Request $request) {
    $value = $request->input('keyword');
    $data = Award::whereRaw('description LIKE "%'.$value.'%"')
  ->orWhereRaw('title LIKE "%'.$value.'%"')
  ->orderBy('id', 'DESC')->orderBy('id')->take(1)->get();

    return response()->json($data);
});
Route::get('/all/frisian-flag', function (Request $request) {
    $value = $request->input('keyword');
    $data = FrisianFlag::WhereRaw('title LIKE "%'.$value.'%"')
  ->orderBy('id', 'DESC')->orderBy('id')->take(1)->get();

    return response()->json($data);
});
Route::get('/all/history', function (Request $request) {
    $value = $request->input('keyword');
    $data = History::whereRaw('description LIKE "%'.$value.'%"')
  ->orWhereRaw('title LIKE "%'.$value.'%"')
  ->orderBy('id', 'DESC')->orderBy('id')->take(1)->get();

    return response()->json($data);
});
