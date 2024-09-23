<?php namespace Definite\Activities\Models;

use Model;

/**
 * Model
 */
class RecomendationMenu extends Model
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
    public $table = 'definite_activities_recomendation_menu';
	
    protected $jsonable = [
        'tier_1',
        'tier_2',
        'tier_3',
        'tier_4',
        'tier_5'
    ];
}
