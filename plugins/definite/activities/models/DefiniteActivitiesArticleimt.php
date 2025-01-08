<?php namespace Definite\Activities\Models;

use Model;

/**
 * Model
 */
class DefiniteActivitiesArticleimt extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'definite_activities_articleimt';
	
    public $belongsTo = [
        'article' => [
            'Definite\Milkpedia\Models\Milkpedia',
            'table' => 'definite_milkpedia_post',
        ]
    ];
}
