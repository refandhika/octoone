<?php

namespace Definite\News\Models;

use Model;
use DB;
use request;

/**
 * Model.
 */
class News extends Model
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
    public $table = 'definite_news_post';

    public $belongsToMany = [
        'categories' => [
            'Definite\News\Models\Categories',
            'table' => 'definite_news_post_categories',
        ],
    ];

    // scope function

    public function scopeIndex($query)
    {
        return $query
            ->where('published_status', '=', 'Yes');
    }

    public function year()
    {
        $year = self::select(DB::raw('YEAR(published_date) as published_date'))
            ->groupBy(DB::raw('YEAR(published_date)'))
            ->orderBy('published_date', 'desc')
            ->where('published_status', '=', 'Yes')
            ->get();

        return $year;
    }

    public function getByLatest()
    {
        $news = self::where('published_status', '=', 'Yes')
                ->orderBy('published_date', 'DESC')
                ->take(4)
                ->get();

        return $news;
    }

    public function scopeArchive($query)
    {
        $slug = Request::segment(4);

        return $query
       ->where(DB::raw('YEAR(published_date)'), '=', $slug)
       ->where('published_status', '=', 'Yes');
    }
}
