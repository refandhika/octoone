<?php

namespace Leverate\Sitemap\Http\Controllers;

use \Backend\Classes\Controller;
use \Response;
use Definite\Milkpedia\Models\Milkpedia;
use Definite\Milkpedia\Models\Faq;
use Flynsarmy\Menu\Models\Menuitem;

class MilkpediaController extends Controller
{
	public function __invoke()
  {		
  	$milkpedias = Milkpedia::where('published',1)->orderBy('created_at','DESC')->get();
  	$faqs       = Faq::orderBy('created_at','DESC')->get();
  	$sub_menus  = Menuitem::where(['menu_id'=>1,'enabled'=>1,'parent_id'=>2])->orderBy('created_at','DESC')->get();

    return Response::view('leverate.sitemap::milkpedias',['submenus'=>$sub_menus,'milkpedias'=> $milkpedias,'faqs'=> $faqs])
     ->header('Content-Type', 'text/xml');
     
  }
}
