<?php

namespace Definite\News\Components;

use Cms\Classes\ComponentBase;
use Definite\News\Models\News as NewsModel;

class News extends ComponentBase
{
    public $records;

    public function componentDetails()
    {
        return [
            'name' => 'News',
            'description' => 'Frisian Flag News',
        ];
    }

    public function onRun()
    {
        $this->records = $this->page['records'] = NewsModel::orderBy('published_date', 'DESC')
                ->take(1)
                ->get();
    }

    public function getByCategories(array $categoriesSlug)
    {
        // $categoriesSlug = $categoriesSlug;
        return $this->records = NewsModel::whereHas('categories', function ($q) use ($categoriesSlug) {
            $q->whereIn('slug', $categoriesSlug);
        })->get();
    }
}
