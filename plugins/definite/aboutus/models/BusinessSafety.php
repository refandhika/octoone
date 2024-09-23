<?php namespace Definite\Aboutus\Models;

use Model;

/**
 * Model
 */
class BusinessSafety extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sluggable;

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'definite_aboutus_business_safety';

    protected $slugs = ['slug' => 'name'];
}
