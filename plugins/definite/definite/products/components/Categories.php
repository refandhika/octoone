<?php

namespace Definite\Products\Components;

use Cms\Classes\ComponentBase;
use Definite\Products\Models\Category;

class Categories extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Categories',
            'description' => 'Categories of Products',
        ];
    }

    public function getChild($slug)
    {
        return Category::whereHas('parent', function ($q) use ($slug) {
            $q->where('slug', '=', $slug);
        })->get();
    }

    public function featured()
    {
        return Category::isFeatured()->get();
    }
}
