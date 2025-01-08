<?php

namespace Definite\Pressrelease\Models;

use Model;

/**
 * Model.
 */
class Categories extends Model
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
    public $table = 'definite_pressrelease_categories';

    public $hashMany = [
        'pressrelease' => [
            'Definite\pressrelease\Models\Pressrelease',
            'table' => 'definite_pressrelease_post_categories',
        ],
    ];
}
