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
            'scope' => 'published'
        ],
    ];

    public $belongsTo = [
        'parent' => 'Definite\Products\Models\Product',
        'key' => 'parent_id',
        'scope' => 'published'
    ];
    /*
    End of Relations
     */

    protected $childCache = null;

    public function isParent()
    {
        if ($this->childCache === null) {
            $this->childCache = $this->childs()->exists();
        }
    
        return $this->childCache;
    }

    public function siblingsVariants()
    {
        if ($this->isParent()) {
            return collect([]);
        }

        return $this->parent()->with('childs')->first()->childs ?? collect([]);
    }
}
