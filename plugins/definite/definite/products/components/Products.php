<?php

namespace Definite\Products\Components;

use Cms\Classes\ComponentBase;
use Definite\Products\Models\Product;

class Products extends ComponentBase
{
    public $record;

    public function componentDetails()
    {
        return [
            'name' => 'Products',
            'description' => 'Frisian Flag Products',
        ];
    }

    public function onRun()
    {
        $this->records = $this->page['records'] = Product::all();
    }

    public function getByCategories(array $categoriesSlug)
    {
        // $categoriesSlug = $categoriesSlug;
        return $this->records = Product::whereHas('categories', function ($q) use ($categoriesSlug) {
            $q->whereIn('slug', $categoriesSlug);
        })
            ->whereNull('parent_id')
            ->orderBy('order')
            ->get();
    }

    public function featured()
    {
    }
}
