<?php

namespace Definite\Milkpedia\Models;

use Definite\Base\Models\Post;
use DB;


class Milkpedia extends Post
{
    use \October\Rain\Database\Traits\Validation;

    public $timestamps = true;

    /*
     * Validation
     */

    public $rules = [
        'title'          => 'required',
        'slug'           => 'required|unique:definite_milkpedia_post,slug',
        'content'        => 'required',
        'excerpt'        => 'required',
        'featured_image' => 'required',
        'categories'     => 'required',
        'created_at'     => 'required',   
    ];


    /**
     * @var string the database table used by the model
     */

    public $table = 'definite_milkpedia_post';

    /* Relations */
    public $belongsToMany = [
        'categories' => [
            'Definite\Milkpedia\Models\Category',
            'table' => 'definite_milkpedia_posts_categories',
        ],
    ];
    public $belongsTo = [
        'products' => [
            'Definite\Products\Models\Product',
            'table' => 'definite_milkpedia_posts_product',
        ]
    ];

    /**
     * Get related post.
     *
     * @param int $take how many to take
     *
     * @return \Illunminate\Support\Collection
     */
    public function related($take = 3)
    {
        $ids = [];
        foreach ($this->categories as $category) {
            if (empty($category->childs)) {
                $ids[] = $category->id;
            }
        }

         return $this->where('id', '<>', $this->id)
            ->orderBy(DB::raw('RAND()'))
            ->published()
            ->filterCategories($ids)
            ->take($take)
            ->get();
    }

   
}
