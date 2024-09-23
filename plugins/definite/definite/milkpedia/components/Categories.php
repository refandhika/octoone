<?php

namespace Definite\Milkpedia\Components;

use Cms\Classes\ComponentBase;
use Definite\Milkpedia\Models\Category;

class Categories extends ComponentBase
{
    public $record;

    public function onRun()
    {
        $this->record = $this->page['record'] = $this->loadRecord();
    }

    public function componentDetails()
    {
        return [
            'name' => 'Categories',
            'description' => 'Categories of Milkpedia',
        ];
    }

    public function getChild($slug)
    {
        return Category::whereHas('parent', function ($q) use ($slug) {
            $q->where('slug', '=', $slug);
        })->get();
    }

    protected function loadRecord()
    {
        if (!strlen($this->identifierValue)) {
            return;
        }

        $modelClassName = $this->property('modelClass');
        if (!strlen($modelClassName) || !class_exists($modelClassName)) {
            throw new SystemException('Invalid model class name');
        }

        $model = new $modelClassName();

        return $model->where($this->modelKeyColumn, '=', $this->identifierValue)->first();
    }
}
