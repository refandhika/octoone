<?php namespace Definite\Activities\Models;

use Definite\Base\Models\Post;
use Definite\Activities\Models\Category;
use Definite\Activities\Models\Activity;
use request;  

/**
 * Model
 */
class Gallery extends Post
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    protected $jsonable = ['image_gallery'];

    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'definite_activities_gallery';

    public $belongsToMany = [
        'categories' => [
            'Definite\Activities\Models\Category',
            'table' => 'definite_activities_gallery',
        ],
    ];

    public function getSlugOptions(){

        return Category::pluck('title', 'slug');
    }
     public function getActivitiesOptions(){

        return Activity::pluck('title', 'title');
    }

    public function scopeIndex($query)
    {
       $slug =  Request::segment(2);
       return $query
            ->where('slug',$slug);
    }
}