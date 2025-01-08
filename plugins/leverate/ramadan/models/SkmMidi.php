<?php namespace Leverate\Ramadan\Models;

use Model;

/**
 * Model
 */
class SkmMidi extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /**
     * @var array Validation rules
     */

    public $timestamps = false;

    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'leverate_ramadan_skm_midi';
   
}
