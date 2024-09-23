<?php

namespace Leverate\Sitemap\Http\Controllers;

use \Backend\Classes\Controller;
use \Response;
use Flynsarmy\Menu\Models\Menuitem;
use Definite\Gallery\Models\Post;
use Definite\News\Models\News;
use Definite\Pressrelease\models\PressRelease;
use DB;

class CompanyController extends Controller
{
	public function __invoke()
  {
    $sub_menus     = Menuitem::where('id','!=',22)->where(['menu_id'=>1,'enabled'=>1,'parent_id'=>283])->orderBy('created_at','DESC')->get();
    $galleries     = Post::orderBy('created_at','DESC')->get();

    $gallery_years = Post::select(DB::raw('YEAR(published_date) as published_date'),'created_at')
                  ->groupBy(DB::raw('YEAR(published_date)'))
                  ->orderBy('published_date', 'desc')
                  ->get();

    $news          = News::where('published_status','Yes')->orderBy('created_at','DESC')->get();

    $new_years     = News::select(DB::raw('YEAR(published_date) as published_date'),'created_at')
                  ->groupBy(DB::raw('YEAR(published_date)'))
                  ->orderBy('published_date', 'desc')
                  ->get();   

    $pers          = PressRelease::where('published_status','Yes')->orderBy('created_at','DESC')->get();

    $pers_years    = PressRelease::select(DB::raw('YEAR(published_date) as published_date'),'created_at')
		  ->whereNotNull('published_date')
                  ->groupBy(DB::raw('YEAR(published_date)'))
                  ->orderBy('published_date', 'desc')
                  ->get();  

    return Response::view('leverate.sitemap::companies',['submenus'=> $sub_menus,'galleries'=>$galleries,'gallery_years'=>$gallery_years,'news'=>$news,'new_years'=>$new_years,'pers'=>$pers,'pers_years'=>$pers_years])
     ->header('Content-Type', 'text/xml');
     
  }
}
