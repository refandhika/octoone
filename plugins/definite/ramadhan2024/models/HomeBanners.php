<?php namespace Definite\Ramadhan2024\Models;

use Model;

/**
 * Model
 */
class HomeBanners extends Model
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
    public $table = 'definite_ramadhan2024_banner';
}
