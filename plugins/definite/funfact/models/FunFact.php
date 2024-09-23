<?php

namespace Definite\FunFact\Models;

use Model;

/**
 * Model.
 */
class FunFact extends Model
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
    public $table = 'definite_funfact_funfact';

    public function random()
    {
        return $this->all()->random();
    }
}
