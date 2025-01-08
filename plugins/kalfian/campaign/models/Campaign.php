<?php namespace Kalfian\Campaign\Models;

use Model;

/**
 * Model
 */
class Campaign extends Model
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
    public $table = 'kalfian_campaign_';

    public function getShowPageAttribute() 
    {
        echo "<a href=\"".$this->button_url."\" target=\"_blank\"> <button> Show Campaign </button> </a>";
    }

    public function getShowSubmissionAttribute() 
    {
        echo "<a href=\"".url('backend/kalfian/campaign').'/'.$this->slug."\"> <button> Show Submission </button> </a>";
    }
}
