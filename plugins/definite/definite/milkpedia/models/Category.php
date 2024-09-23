<?php

namespace Definite\Milkpedia\Models;

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
    public $table = 'definite_milkpedia_category';

    /* Relations */
    public $belongsToMany = [
        'posts' => [
            'Definite\Milkpedia\Models\Milkpedia',
            'table' => 'definite_milkpedia_posts_categories',
            'order' => 'created_at DESC',
        ],
    ];

    // Get Milkpedia
    public function getMilkpedia($perPage = 7)
    {
        return $this->belongsToMany('Definite\Milkpedia\Models\Milkpedia', 'definite_milkpedia_posts_categories', 'category_id', 'milkpedia_id')->latest()->paginate($perPage);
    }

    public function getPosts($perPage = 10)
    {
        $self = $this;

        return Milkpedia::with(['categories' => function ($query) use ($self) {
            $query->where('id', '=', $self->id);
        }])->latest()->paginate($perPage);
    }

    public function findBySlug($slug)
    {
        if ($record = Self::where('slug', '=', $slug)->first()) {
            return $record;
        }

        return null;
    }

    // protected function listPosts()
    // {
    //     $category = $this->id ? $this->category->id : null;

    //     /*
    //      * List all the posts, eager load their categories
    //      */
    //     $posts = Milkpedia::with('categories')->listFrontEnd([
    //         'page'       => $this->property('pageNumber'),
    //         'sort'       => $this->property('sortOrder'),
    //         'perPage'    => $this->property('postsPerPage'),
    //         'search'     => trim(input('search')),
    //         'category'   => $category,
    //         'exceptPost' => $this->property('exceptPost'),
    //     ]);

    //     /*
    //      * Add a "url" helper attribute for linking to each post and category
    //      */
    //     $posts->each(function ($post)
    //     {
    //         $post->setUrl($this->postPage, $this->controller);

    //         $post->categories->each(function ($category)
    //         {
    //             $category->setUrl($this->categoryPage, $this->controller);
    //         });
    //     });

    //     return $posts;
    // }
}
