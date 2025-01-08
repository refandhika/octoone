<?php

namespace Definite\Milkpedia\Models;

use Model;

/**
 * Model.
 */
class Faq extends Model
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
    public $table = 'definite_milkpedia_faq';
}
