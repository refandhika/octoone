<?php

namespace Leverate\Careers\Components;

use Cms\Classes\ComponentBase;
use Leverate\Careers\Models\Category as Categories;

Class Category extends ComponentBase 
{

    public $category;

    public function componentDetails()
    {
        return [
            'name' => 'Category',
            'description' => 'ListCategory',
        ];
    }

    public function onRun()
    {
        $this->category  = $this->loadSubMenu();
    }

    public function loadSubMenu()
    {
        return Categories::all();
    }

   
}


