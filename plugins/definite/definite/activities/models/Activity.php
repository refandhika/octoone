<?php namespace Definite\Activities\Models;

use Definite\Base\Models\Post;

/**
 * Model
 */
class Activity extends Post
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
    public $table = 'definite_activities_activity';

    protected $jsonable = ['info'];

    /* Relations */
    public $belongsToMany = [
        'categories' => [
            'Definite\Activities\Models\Category',
            'table' => 'definite_activities_categories_activities',
        ]
    ];
}
