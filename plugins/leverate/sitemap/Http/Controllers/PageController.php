<?php

namespace Leverate\Sitemap\Http\Controllers;

use \Backend\Classes\Controller;
use \Response;
use Leverate\Sitemap\Models\Page;

class PageController extends Controller
{
	public function __invoke()
  {		
  	$pages    = Page::orderBy('created_at','DESC')->get();
  	
    return Response::view('leverate.sitemap::pages',['pages'=>$pages])
     ->header('Content-Type', 'text/xml');
     
  }
}
