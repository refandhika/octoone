<?php

namespace Leverate\Sitemap\Http\Controllers;

use \Backend\Classes\Controller;
use \Response;
use Definite\Products\Models\Category;
use Definite\Products\Models\Product;

class ProductController extends Controller
{
	public function __invoke()
  {		
  	$categories    		  = Category::where('parent_id',NULL)->orderBy('created_at','DESC')->get();
  	$parents_category     = Category::where('parent_id','!=',NULL)->orderBy('created_at','DESC')->get();
  	$products      		  = Product::where('parent_id',NULL)->where('published',1)->orderBy('created_at','DESC')->get();
    $parents       		  = Product::where('parent_id','!=',NULL)->where('published',1)->orderBy('created_at','DESC')->get();

    return Response::view('leverate.sitemap::products',['categories'=>$categories,'parents_category'=>$parents_category,'products'=>$products,'parents'=>$parents])
     ->header('Content-Type', 'text/xml');
     
  }
}
