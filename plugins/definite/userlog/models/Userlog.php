<?php namespace Definite\UserLog\Models;

use Model;

/**
 * Model
 */
class Userlog extends Model
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
    public $table = 'definite_userlog_history';
}
