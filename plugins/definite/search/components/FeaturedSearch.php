<?php
/**
 * @copyright (C) 2018, PT. DEFINITE MAJI ARSANA
 * @author Nurimansyah Rifwan <iman@definite.co.id>
 */
namespace Definite\Search\Components;

// Models
use Definite\News\Models\News;

class FeaturedSearch extends \Cms\Classes\ComponentBase
{
    // Details
    public function componentDetails()
    {
        return [
            'name' => 'Featured Search',
            'description' => 'Komponen utama pada plugin "Featured Search"'
        ];
    }

    // Inject JS
    public function onRun()
    {
        $this->addJS('/plugins/definite/search/assets/vue.js');
        $this->addJS('/plugins/definite/search/assets/vue-resource.js');
        $this->addJS('/plugins/definite/search/assets/script.js');
        $this->addCss('/plugins/definite/search/assets/style.css');
    }

    // Properties
    public function defineProperties()
    {
        return [
            'type' => [
                'title' => 'Search Type',
                'description' => 'The type from user input',
                'type' => 'string'
            ]
        ];
    }

    // Get Type
    public function getType()
    {
        return $this->property('type');
    }

    // Get Query (XSS Sanitize)
    public function getQuery()
    {
        $q = input('q');
        $q = str_replace("'", '%27', $q);
        $q = str_replace(";", '%3B', $q);
        $q = str_replace("(", '%28', $q);
        $q = str_replace(")", '%29', $q);
        $q = str_replace("{", '%7B', $q);
        $q = str_replace("}", '%7D', $q);
        $q = str_replace("/", '%2F', $q);
        $q = str_replace("<", '%3C', $q);
        $q = str_replace(">", '%3E', $q);
        return $q;
    }
}