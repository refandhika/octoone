<?php namespace Leverate\Ramadan\Models;

use Model;

/**
 * Model
 */
class Market extends Model
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
    public $table = 'leverate_ramadan_market';
   
}
