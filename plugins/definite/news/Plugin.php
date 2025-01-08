<?php

namespace Definite\News;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
             'Definite\News\Components\Categories' => 'NewsCategories',
             'Definite\News\Components\News' => 'NewsList',
         ];
    }

    public function registerSettings()
    {
    }
}
