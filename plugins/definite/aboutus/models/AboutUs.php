<?php

namespace Definite\Aboutus\Models;

use Model;

/**
 * Model.
 */
class AboutUs extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string the database table used by the model
     */
    public $table = 'definite_aboutus_post';

    public function scopeIndex($query)
    {
        return $query
            ->first();
    }
}
