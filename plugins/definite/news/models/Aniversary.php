<?php namespace Definite\News\Models;

use Model;

/**
 * Model
 */
class Aniversary extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
	
	public $attachOne= [
		'photo_source' => '\System\Models\File'
	];
    /**
     * @var string The database table used by the model.
     */
    public $table = 'definite_news_aniversary';
}
