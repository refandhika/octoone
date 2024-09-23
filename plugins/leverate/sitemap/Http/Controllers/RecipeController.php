<?php

namespace Leverate\Sitemap\Http\Controllers;

use \Backend\Classes\Controller;
use \Response;
use Definite\Activities\Models\Category;
use Definite\Activities\Models\Activity;
use Flynsarmy\Menu\Models\Menuitem;

class RecipeController extends Controller
{
	public function __invoke()
  {	
        //$categories = Category::where('parent_id',NULL)->orderBy('created_at','DESC')->get();	
  	$recipes = Activity::where('published',1)->orderBy('created_at','DESC')->get();

    return Response::view('leverate.sitemap::recipes',['recipes'=> $recipes])
     ->header('Content-Type', 'text/xml');
     
  }
}

