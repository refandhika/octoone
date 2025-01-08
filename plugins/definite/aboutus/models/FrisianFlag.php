<?php

namespace Definite\Aboutus\Models;

use Model;

/**
 * Model.
 */
class FrisianFlag extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    /*
     * Validation
     */
    public $rules = [
    ];

    protected $jsonable = ['frisian'];

    /**
     * @var string the database table used by the model
     */
    public $table = 'definite_aboutus_frisian';

    public function scopeIndex($query)
    {
        return $query
            ->first();
    }
}
