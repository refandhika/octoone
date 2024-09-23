<?php

namespace Definite\Milkpedia\Components;

use Cms\Classes\ComponentBase;
use Definite\Milkpedia\Models\Milkpedia as MilkpediaModel;
use Definite\Milkpedia\Models\Category as Category;

class Milkpedia extends ComponentBase
{
    public $records, $total; //

    public function componentDetails()
    {
        return [
            'name' => 'Milkpedia',
            'description' => 'Frisian Flag Milkpedia',
        ];
    }

    public function onRun()
    {
        $this->records = $this->page['records'] = MilkpediaModel::orderBy('created_at', 'DESC')->get();
        $this->total   = $this->count();
    }

    public function getByCategories(array $categoriesSlug)
    {
        // $categoriesSlug = $categoriesSlug;
        return $this->records = MilkpediaModel::whereHas('categories', function ($q) use ($categoriesSlug) {
            $q->whereIn('slug', $categoriesSlug);
        })->get();
    }

    public function nutrisi()
    {
        return $this->records = Category::find(1)->posts()->orderBy('created_at', 'DESC')->get();
    }

    public function susu()
    {
        return $this->records = Category::find(2)->posts()->orderBy('created_at', 'DESC')->get();
    }

    public function cara_minum_susu()
    {
        return $this->records = Category::find(3)->posts()->orderBy('created_at', 'DESC')->get();
    }
    
    public function count(){
        $items = Category::where('slug', $this->param('slug'))->first();
        if($items)
        return count($items->getTotal());
    }
}
