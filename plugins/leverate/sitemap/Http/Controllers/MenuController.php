<?php

namespace Leverate\Sitemap\Http\Controllers;

use \Backend\Classes\Controller;
use \Response;
use Flynsarmy\Menu\Models\Menuitem;

class MenuController extends Controller
{
	public function __invoke()
  {		
  	$data   = Menuitem::where(['menu_id'=>1,'enabled'=>1,'parent_id'=>0,'nest_depth'=>0])->orderBy('created_at','DESC')->get();

  	$menus  = 	array_map(function ($prod) {

                if($prod['url'] == '')
                {
                  $menu['url']  = url('/'.strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $prod['label']), '-')));

                }else{
                  $menu['url']  = $prod['url'];
                }
  					
            $menu['created_at'] = $prod['created_at'];
				    
            return $menu;

				}, $data->toArray());
  
    return Response::view('leverate.sitemap::menus',['menus'=> $menus])
     ->header('Content-Type', 'text/xml');
     
  }
}
