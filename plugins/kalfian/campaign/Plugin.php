<?php namespace Kalfian\Campaign;

use System\Classes\PluginBase;
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Foundation\AliasLoader;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function register()
    {
        $this->app->register(\Maatwebsite\Excel\ExcelServiceProvider::class);

        $alias = AliasLoader::getInstance();
        $alias->alias('Excel', \Maatwebsite\Excel\Facades\Excel::class);
        $alias->alias('Image', \Intervention\Image\ImageServiceProvider::class);
    }
}
