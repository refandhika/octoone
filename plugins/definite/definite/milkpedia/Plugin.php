<?php

namespace Definite\Milkpedia;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Definite\Milkpedia\Components\Categories' => 'milkpediaCategories',
            'Definite\Milkpedia\Components\Milkpedia' => 'milkpediaList',
        ];
    }

    public function registerSettings()
    {
    }
}
