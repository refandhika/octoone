<?php

namespace Definite\Milkpedia\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use \Response;
use \Request;
use Definite\Milkpedia\Models\Category;

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
