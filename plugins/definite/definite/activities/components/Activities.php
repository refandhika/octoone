<?php
namespace Definite\Activities\Components;

use Cms\Classes\ComponentBase;

class Activities extends ComponentBase
{

    public $records;

    public function componentDetails()
    {
        return [
            'name'        => 'Activities',
            'description' => 'Frisian Flag Activities',
        ];
    }

    public function onRun()
    {
        $this->records = $this->page['records'] = Activity::all();
    }

    public function getByCategories(array $categoriesSlug)
    {
        // $categoriesSlug = $categoriesSlug;
        return $this->records = Activity::whereHas('categories', function ($q) use ($categoriesSlug)
        {
            $q->whereIn('slug', $categoriesSlug);
        })->get();
    }

}
