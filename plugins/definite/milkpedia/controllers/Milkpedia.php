<?php

namespace Definite\Milkpedia\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use \Response;
use \Request;
use Definite\Milkpedia\Models\Category;
use Definite\Milkpedia\Models\Milkpedia as MilkpediaModel;
use Mail;
use Kalfian\Subscriber\Models\Subscriber;
use DB;
use Model;
use Crypt;

class Milkpedia extends Controller
{
    public $implement = ['Backend\Behaviors\ListController', 'Backend\Behaviors\FormController', 'Backend\Behaviors\ReorderController'];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    { 
        parent::__construct();
        BackendMenu::setContext('Definite.Milkpedia', 'milkpedia');
    }
   
   public function formAfterCreate($model)
    {    
        try {
             $category      = $model->categories->first();
             if($category)
             {
                 $main_url      = url('/');
                 $url           = url('milkpedia/'.$category->slug.'/'.$model->slug);
                 $data          = DB::table('kalfian_subscriber_')->get();
                 $artikel       = MilkpediaModel::orderBy(DB::raw('RAND()'))->take(3)->get();
                 $attributes    = [
                        'featured_image' => $model->featured_image,
                        'excerpt'        => $model->excerpt,
                        'url'            => $url,
                        'main_url'       => $main_url,
                        'title'          => $model->title,
                        'type'           => 'primary',
                        'milkpedias'     => $artikel
                 ];
                 //for testing to send an email

                 /*$attributes    = [
                        'featured_image' => $model->featured_image,
                        'email'          => 'youremail',
                        'excerpt'        => $model->excerpt,
                        'url'            => $url,
                        'main_url'       => $main_url,
                        'title'          => $model->title,
                        'type'           => 'primary',
                        'milkpedias'     => $artikel,
                        'data'           => Crypt::encrypt('yourid'),  
                 ];*/

                 if($model->email_newsletter == 1)
                    foreach ($data as $dt) {

                      $attributes = array_add($attributes,'email',$dt->email);
                      $attributes = array_add($attributes,'data',Crypt::encrypt($dt->id));

                        Mail::queue('definite.milkpedia::mail.active', $attributes, function ($message) use($dt) {      
                              $message->to($dt->email);
                              $message->subject('Milkpedia Newsletter');
                              $message->from('no-reply@frisianflag.com', $name = 'Milkpedia - Frisian Flag');
                        });
                        //remove email element 
                        unset($attributes['email'],$attributes['data']);
                    }

                    //for testing to send an email

                    /*Mail::queue('definite.milkpedia::mail.active', $attributes, function ($message) {      
                              $message->to('youremail');
                              $message->subject('Milkpedia Newsletter');
                              $message->from('no-reply@frisianflag.com', $name = 'Milkpedia - Frisian Flag');
                        });*/
             }
             
        } catch (Exception $e) {
            return;
        }
        
    }

     public function listOverrideColumnValue(Model $record, string $columnName, string $definition=NULL)
    {
           if($columnName == "email_newsletter")
           switch ($record->email_newsletter) {
                case '1':
                    return 'Ya';
                    break;
                
                default:
                     return 'Tidak';
                    break;
            } 
    }
    
    public function apiShowByCategory()
    {
        // Check the input
        if (!Request::input('slug')) return Response::json(['status' => 422, 'msg' => 'slug_not_found'], 422);

        // Get Category Slug
        $slug = Request::input('slug');

        // Get item by category
        $items = Category::where('slug', $slug)->first();
        $data = $items ? $items->getMilkpedia() : NULL;
        
        return Response::json(['success' => 200, 'data' => $data]);
    }
}
