<?php namespace Kalfian\Campaign\Models;

use Model;
use RainLab\User\Models\User;

/**
 * Model
 */
class AlfamartQuiz extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsTo = [
        'user' => ['RainLab\User\Models\User']
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'kalfian_campaign_alfamart_quiz';

    public function getActionAttribute()
    {
        $user = User::find($this->user_id);

        if ($user) echo "<a href=\"".url('campaign/export').'/alfamart?email='.$user->email."\" type=\"_blank\"> <button> Export </button> </a>";
    }
}
