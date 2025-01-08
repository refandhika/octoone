<?php

use Definite\Products\Models\Product;
use Illuminate\Http\Request;

/*
 Routes for milkpedia
 */

Route::get('/api/product', function (Request $request) {
    $value = $request->input('keyword');
    $data = Product::with('categories')->whereRaw('content LIKE "%'.$value.'%"')
    ->orWhereRaw('title LIKE "%'.$value.'%"')
    ->orderBy('id', 'DESC')->orderBy('id')->take(5)->get();

    return response()->json($data);
});

Route::get('/product/loadmore', function (Request $request) {
    $value = $request->input('keyword');
    $data = Product::with('categories')->whereRaw('content LIKE "%'.$value.'%"')
    ->orWhereRaw('title LIKE "%'.$value.'%"')
    ->orderBy('id', 'DESC')->orderBy('id')->paginate(5);

    return response()->json($data);
});

Route::get('/all/product', function (Request $request) {
    $value = $request->input('keyword');
    $data = Product::with('categories')->whereRaw('content LIKE "%'.$value.'%"')
    ->orWhereRaw('title LIKE "%'.$value.'%"')
    ->orderBy('id', 'DESC')->orderBy('id')->take(1)->get();

    return response()->json($data);
});
