<?php

namespace Definite\Milkpedia\Models;


use Definite\Base\Models\Post;
use DB;


/**
 * Model.
 */

class Milkpedia extends Post
{
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */

    public $timestamps = true;

    /*
     * Validation
     */

    public $rules = [];


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
            //->orderBy(DB::raw('RAND()'))
            ->whereBetween('created_at',[date('2019-05-01'),date('2019-05-31')])
            ->orderBy(DB::raw('RAND()'))
            ->published()
            //->filterCategories($ids)
            ->take($take)
            ->get();
    }
}
