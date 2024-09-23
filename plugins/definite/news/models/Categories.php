<?php

namespace Definite\News\Models;

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
    public $table = 'definite_news_categories';

    public $hashMany = [
        'news' => [
            'Definite\News\Models\News',
            'table' => 'definite_news_post_categories',
        ],
    ];
}
