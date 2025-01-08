<?php namespace Definite\Activities\Models;

use Model;

/**
 * Model
 */
class MenuSahur extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'definite_activities_activity';
}
