<?php namespace Leverate\Careers\Models;

use Model;

/**
 * Model
 */
class Career extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'leverate_careers_career';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'title' => 'required'
    ];
    
    public $customMessages = [

        'title.required' => 'Field SubMenu tidak boleh kosong!'
    ];

    public $belongsTo = [
        'status' => ['Leverate\Careers\Models\Status', 'key' => 'is_enabled']
    ];

}
