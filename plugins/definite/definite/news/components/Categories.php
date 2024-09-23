<?php

namespace Definite\News\Components;

use Cms\Classes\ComponentBase;
use Definite\News\Models\Category;

class Categories extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Categories',
            'description' => 'Categories of News',
        ];
    }

    public function getChild($slug)
    {
        return Category::whereHas('parent', function ($q) use ($slug) {
            $q->where('slug', '=', $slug);
        })->get();
    }
}
