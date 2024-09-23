<?php namespace Kalfian\Campaign\Models;

use Model;

/**
 * Model
 */
class IndomaretQuizStruk extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'kalfian_campaign_indomaret_quiz_struk';
}
