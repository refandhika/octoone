<?php

namespace Leverate\Sitemap\Http\Controllers;

use \Backend\Classes\Controller;
use \Response;
use Leverate\Careers\Models\Article;
use Leverate\Careers\Models\Event;
use Flynsarmy\Menu\Models\Menuitem;

class CareerController extends Controller
{
	public function __invoke()
  {		
  	$articles    = Article::where('is_enabled',1)->orderBy('created_at','DESC')->get();
  	$events      = Event::where('is_enabled',1)->orderBy('created_at','DESC')->get();
  	$sub_menus   = Menuitem::where(['menu_id'=>1,'enabled'=>1,'parent_id'=>8])->orderBy('created_at','DESC')->get();

    return Response::view('leverate.sitemap::careers',['articles'=>$articles, 'events' => $events, 'submenus'=>$sub_menus])
     ->header('Content-Type', 'text/xml');
     
  }
}
