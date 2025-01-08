<?php

namespace Definite\Base\Models;

use Model;

/**
 * Post Model.
 */
class Post extends Model
{
    /**
     * @var string the database table used by the model
     */
    public $table = 'definite_base_posts';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

    /**
     * Published post.
     *
     * @param \Illuminate\Database\Query\Builder $query
     *
     * @return \Illuminate\Database\Query\Builder
     */
    public function scopePublished($query)
    {
        return $query->where('published', '=', 1);
    }

    /**
     * Unpublished post.
     *
     * @param \Illuminate\Database\Query\Builder $query
     *
     * @return \Illuminate\Database\Query\Builder
     */
    public function scopeUnpublished($query)
    {
        return $query->where('published', '=', 0);
    }

    /**
     * Get first category of the post.
     *
     * @return
     */
    public function category()
    {
        foreach ($this->categories as $category) {
            if ($category->childs) {
                if ($category->childs->isEmpty()) {
                    return $category;
                }
            } else {
                return $this->categories->first();
            }
        }
        // return $this->categories->first();
    }

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

        $related = $this->where('id', '<>', $this->id)
            ->published()
            ->isParent()
            ->filterCategories($ids);

        // ordering
        if (isset($this->order)) {
            $related->orderBy('order');
        }

        return $related->take($take)
            ->get();
    }

    /**
     * Filter post by categories.
     *
     * @param \Illuminate\Database\Query\Builder $query
     * @param array                              $categories array of category id
     *
     * @return \Illuminate\Database\Query\Builder
     */
    public function scopeFilterCategories($query, array $categories)
    {
        return $query->whereHas('categories', function ($q) use ($categories) {
            $q->whereIn('id', $categories);
        });
    }

    /**
     * Filter only parent post.
     *
     * @param \Illuminate\Database\Query\Builder $query
     *
     * @return \Illuminate\Database\Query\Builder
     */
    public function scopeIsParent($query)
    {
        return $query->whereNull('parent_id');
    }
}
