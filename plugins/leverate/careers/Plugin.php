<?php namespace Leverate\Careers;

use System\Classes\PluginBase;


class Plugin extends PluginBase
{
    public $desc;

    public function boot(){
        
        $this->desc = "ini dari global";
        setlocale (LC_TIME, 'id_ID');
    }

    public function registerComponents()
    {
        return [
            'Leverate\Careers\Components\Career'       => 'CareerMenu',
            'Leverate\Careers\Components\CareerCenter' => 'CareerCenter',
            'Leverate\Careers\Components\Event'        => 'CareerEvent',
            'Leverate\Careers\Components\Article'      => 'CareerArticle',
            'Leverate\Careers\Components\Category'     => 'CareerCategory',
        ];
    }
    
    public function registerSettings()
    {
        
    }
}
