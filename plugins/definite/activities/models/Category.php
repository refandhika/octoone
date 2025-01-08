<?php namespace Definite\Activities\Models;

use Definite\Base\Models\Post;
/**
 * Model
 */
class Category extends Post 
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

  
    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'definite_activities_category';

    /* Relations */
    public $belongsToMany = [
        'activities' => [
            'Definite\Activities\Models\Activity',
            'table' => 'definite_activities_categories_activities',
        ],
    ];

    public $hashMany = [
        'gallery' => [
            'Definite\Activities\Models\Gallery',
            'table' => 'definite_activities_gallery',
        ],
    ];


    
}
