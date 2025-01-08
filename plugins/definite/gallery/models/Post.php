<?php namespace Definite\Gallery\Models;

use Model;
use DB;
use request;

/**
 * Model
 */
class Post extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /**
     * @var array Validation rules
     */
    public $rules = [
        'published_date' => 'required'
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'definite_gallery_post';

    // scope function

    public function save(array $options = null, $sessionKey = null)
    {
        if( ! $this->getAttributeValue('published_date') ){
            $this->setAttribute('published_date', date('Y-m-d'));
        }
        parent::save($options, $sessionKey);
    }

    public function year()
    {
        $year = self::select(DB::raw('YEAR(published_date) as published_date'))
            ->groupBy(DB::raw('YEAR(published_date)'))
            ->orderBy('published_date', 'desc')
            ->get();

        return $year;
    }

    public function scopeArchive($query)
    {
        $slug = Request::segment(4);

        return $query
       ->where(DB::raw('YEAR(published_date)'), '=', $slug);
    }

    public function scopeArchiveAmp($query)
    {
        $slug = Request::segment(5);

        return $query
       ->where(DB::raw('YEAR(published_date)'), '=', $slug);
    }



    public $attachOne = [
        'poster' => 'System\Models\File'
    ];

    public $attachMany = [
        'images' => 'System\Models\File'
    ];
    

}