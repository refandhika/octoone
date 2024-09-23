<?php

namespace Definite\Aboutus\Models;

use Model;
use Request;

/**
 * Model.
 */
class Award extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    /*
     * Validation
     */
    public $rules = [
    ];
    protected $jsonable = ['file_upload'];
    /**
     * @var string the database table used by the model
     */
    public $table = 'definite_aboutus_award';

    public function scopeSearch()
    {
        $searchterm = Request::input('q');

        if ($searchterm) {
            $results = self::where('title', 'LIKE', '%'.$searchterm.'%')
            ->orWhere('description', 'LIKE', '%'.$searchterm.'%')
            ->orderBy('title', 'asc');
            return $results;
        }
    }
}
