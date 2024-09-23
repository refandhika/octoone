<?php

namespace Leverate\Careers\Components;

use Cms\Classes\ComponentBase;
use Leverate\Careers\Models\Article as CareerArticle;
use DB;

Class Article extends ComponentBase 
{

    public $articles, $article_page, $page_slug,$more_articles,$total;

    public function componentDetails()
    {
        return [
            'name' => 'Article',
            'description' => 'ListArticle',
        ];
    }

    /**
     * get var article
     */
    
    public function onGetVar()
    {
        $first_element = post('first_element');
        $limit_item    = post('limit');
        $base_url      = url('/karir/artikel/');
        $img_resource  = url('/storage/app/media/');

        if(!$limit_item){

          $limit_item  = 0;
          $flag_button = 0;
          $skip_items  = 0;    
        }else{
          $flag_button = 1;
          $skip_items  = $limit_item;
        }
        $amount_items  = 3 + $limit_item;
        $total_items   = count(CareerArticle::all());
        $article       = CareerArticle::where('is_enabled', 1)
                        ->where('title','!=', $first_element)
                        ->orderBy('created_at','DESC')
                        ->skip($skip_items)
                        ->take(3)
                        ->get();
        
        return response()->json(array(

            'items'        => $article,
            'load'         => $flag_button,
            'amount_items' => $amount_items, 
            'total_items'  => $total_items,
            'base_url'     => $base_url,
            'img_resource' => $img_resource,
        ));
    }

    public function onRun()
    {
        $this->articles      = $this->loadSubMenu();
        $this->page_slug     = $this->param('slug');
        $this->article_page  = $this->getRelated();
        $this->more_articles = $this->getMoreArticles();
        $this->total         = $this->count();
        
    }

    public function loadSubMenu()
    {
        return CareerArticle::where('is_enabled', 1)->orderBy('created_at','DESC')->get();
    }

    public function getRelated()
    {
        return CareerArticle::where('is_enabled',1)->where('slug','!=', $this->param('slug'))->orderBy(DB::raw('RAND()'))->take(3)->get();
    }

     public function getMoreArticles()
    {
         return CareerArticle::where('is_enabled', 1)->orderBy('created_at','DESC')->skip(1)->take(4)->get();
    }
    public function count(){
        $items = CareerArticle::all();
        
        if($items)
        return count($items);
    }
  
}


