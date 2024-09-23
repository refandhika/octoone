<?php

namespace Definite\Products;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Definite\Products\Components\Categories' => 'productCategories',
            'Definite\Products\Components\Products' => 'productList',
        ];
    }

    public function registerSettings()
    {
    }
}
