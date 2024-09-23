<?php namespace Leverate\Ramadan\Models;

use Model;

/**
 * Model
 */
class User extends Model
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
    public $table = 'leverate_ramadan_users';
   
   public $belongsTo = [
        'category' => ['Leverate\Ramadan\Models\Category', 'key' => 'product_category_id'],
        'market'   => ['Leverate\Ramadan\Models\Market', 'key' => 'market_place_id']
       
    ];
}
