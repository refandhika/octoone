<?php

namespace Definite\Pressrelease\Models;

use Model;
use DB;
use request;

/**
 * Model.
 */
class PressRelease extends Model
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
    public $table = 'definite_pressrelease_post';

    public $belongsToMany = [
        'categories' => [
            'Definite\pressrelease\Models\Categories',
            'table' => 'definite_pressrelease_post_categories',
        ],
    ];

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
        ///
        return $year;
    }

    public function getByLatest()
    {
        $press = self::latest()
                ->take(4)
                ->where('published_status', '=', 'Yes')
                ->get();
        ///
        return $press;
    }

    public function scopeArchive($query)
    {
        $slug = Request::segment(4);
        ///
        return $query
       ->where(DB::raw('YEAR(published_date)'), '=', $slug)
       ->where('published_status', '=', 'Yes');
    }

    public function scopeArchiveAmp($query)
    {
        $slug = Request::segment(5);
        ///
        return $query
       ->where(DB::raw('YEAR(published_date)'), '=', $slug)
       ->where('published_status', '=', 'Yes');
    }
}
