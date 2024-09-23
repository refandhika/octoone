<?php namespace Definite\Activities;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Definite\Activities\Components\Categories' => 'activityCategories',
            'Definite\Activities\Components\Activities' => 'activityList',
            'Definite\Activities\Components\FilterGallery' => 'filtergallery',
        ];
    }

    public function registerSettings()
    {
    }
}
