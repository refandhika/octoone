<?php namespace Leverate\Sitemap\Models;

use Model;

/**
 * Model
 */
class Page extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /**
     * @var array Validation rules
     */
    public $rules = [
         'slug' => 'required|unique:leverate_sitemap_,slug',
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'leverate_sitemap_';
}
