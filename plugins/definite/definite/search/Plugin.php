<?php
/**
 * @copyright (C) 2018, PT. DEFINITE MAJI ARSANA
 * @author Nurimansyah Rifwan <iman@definite.co.id>
 */
namespace Definite\Search;

class Plugin extends \System\Classes\PluginBase
{
    // Details
    public function pluginDetails()
    {
        return [
            'name'  => 'Featured Search Plugins',
            'description' => 'Plugin ini berfungsi sebagai plugin pencarian terbaru',
            'author' => 'Definite Development Team',
            'icon' => 'icon-leaf'
        ];
    }

    // Component Registration
    public function registerComponents()
    {
        return ['Definite\Search\Components\FeaturedSearch' => 'featuredSearch'];
    }
    
}