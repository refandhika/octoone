<?php

namespace Definite\Products\Models;

use Definite\Base\Models\Post;

/**
 * Model.
 */
class Category extends Post
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
    public $table = 'definite_products_category';

    /**
     * Relations.
     */
    public $belongsToMany = [
        'products' => [
            'Definite\Products\Models\Product',
            'table' => 'definite_products_products_categories',
            // 'scope' => 'published',
        ],
        'publishedProducts' => [
            'Definite\Products\Models\Product',
            'table' => 'definite_products_products_categories',
            'scope' => 'isParent',
        ],
    ];

    public $hasMany = [
        'childs' => [
            'Definite\Products\Models\Category',
            'key' => 'parent_id',
        ],
    ];

    public $belongsTo = [
        'parent' => 'Definite\Products\Models\Category',
        'key' => 'parent_id',
    ];

    public function scopeIsFeatured($query)
    {
        return $query->where('is_featured', '=', 1);
    }

    // public function childs() {
    //     return $this->hasMany(self::class, 'parent_id', $this->id);
    // }
}
