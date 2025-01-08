<?php

use Definite\Pressrelease\Models\PressRelease;
use Illuminate\Http\Request;

/*
 Routes for milkpedia
 */

Route::get('/api/pressrelease', function (Request $request) {
    $value = $request->input('keyword');
    $data = PressRelease::with('categories')->whereRaw('title LIKE "%'.$value.'%"')
    ->orderBy('id', 'DESC')->orderBy('id')->take(5)->get();

    return response()->json($data);
});

Route::get('/pressrelease/loadmore', function (Request $request) {
    $value = $request->input('keyword');
    $data = PressRelease::with('categories')->whereRaw('title LIKE "%'.$value.'%"')
    ->orderBy('id', 'DESC')->orderBy('id')->paginate(5);

    return response()->json($data);
});

Route::get('/all/pressrelease', function (Request $request) {
    $value = $request->input('keyword');
    $data = PressRelease::with('categories')->whereRaw('title LIKE "%'.$value.'%"')
    ->orderBy('id', 'DESC')->orderBy('id')->take(1)->get();

    return response()->json($data);
});
