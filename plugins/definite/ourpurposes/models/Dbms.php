<?php

namespace Definite\Ourpurposes\Models;

use Model;

/**
 * Model.
 */
class Dbms extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];
    protected $jsonable = ['image'];
    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string the database table used by the model
     */
    public $table = 'definite_ourpurposes_nutriton_dbms';

    public function scopeIndex($query)
    {
        return $query
           ->first();
    }
}
