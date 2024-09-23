<?php

namespace Definite\Products\Models;

use Definite\Base\Models\Post;

/**
 * Model.
 */
class Product extends Post
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string the database table used by the model
     */
    public $table = 'definite_products_product';

    protected $jsonable = [
        'ringkasan_gizi',
        'detail_kemasan',
        'link_e_commerce',
        'image_gallery'
    ];

    /**
     * Relations.
     */
    public $belongsToMany = [
        'categories' => [
            'Definite\Products\Models\Category',
            'table' => 'definite_products_products_categories',
            // 'scope' => 'published',
        ],
    ];

    public $hasMany = [
        'childs' => [
            'Definite\Products\Models\Product',
            'key' => 'parent_id',
        ],
    ];

    public $belongsTo = [
        'parent' => 'Definite\Products\Models\Product',
        'key' => 'parent_id',
    ];
    /*
    End of Relations
     */

    public function isParent()
    {
        return !$this->childs->isEmpty();
    }

    public function siblingsVariants()
    {
        $variants = [];

        if (!$this->isParent()) {
            $variants = $this->parent->childs;
            // $variants = $variants->prepend($this->parent);
        }

        return $variants;
    }
}
