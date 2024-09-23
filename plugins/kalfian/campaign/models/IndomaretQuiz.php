<?php namespace Kalfian\Campaign\Models;

use Model;
use RainLab\User\Models\User;
use Kalfian\Campaign\Models\IndomaretQuizStruk;

/**
 * Model
 */
class IndomaretQuiz extends Model
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

    public $hasMany = [
        'struk' => [
            'Kalfian\Campaign\Models\IndomaretQuizStruk',
            'key'        => 'quiz_id',
        ]
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'kalfian_campaign_indomaret_quiz';

    public function getFullNameAttribute() 
    {
        $user = User::find($this->user_id);

        if ($user) return $user->name.' '.$user->surname;
    }

    public function getEmailAttribute() 
    {
        $user = User::find($this->user_id);

        if ($user) return $user->email;
    }

    public function getJenisKelaminAttribute() 
    {
        $user = User::find($this->user_id);

        if ($user) return $user->jk;
    }

    public function getTglLahirAttribute() 
    {
        $user = User::find($this->user_id);

        if ($user) return $user->tgl_lahir;
    }

    public function getTelephoneAttribute() 
    {
        $user = User::find($this->user_id);

        if ($user) return $user->telp;
    }

    public function getProvinceAttribute() 
    {
        $user = User::find($this->user_id);

        if ($user) return $user->prof;
    }

    public function getCityAttribute() 
    {
        $user = User::find($this->user_id);

        if ($user) return $user->kota;
    }

    public function getFileStrukAttribute()
    {
        $listStruk = IndomaretQuizStruk::where('quiz_id', $this->id)->get();
        $result = '';

        foreach ($listStruk as $struk) {
            $result .= "<img width='60px' heigth='40px' src='".asset("storage/app/media/struk_indomaret/".$struk->file_name)."'> <br>";
        }

        echo $result;
    }

    public function getActionAttribute()
    {
        $user = User::find($this->user_id);

        if ($user) echo "<a href=\"".url('campaign/export').'/indomaret?code=1LWrUKJiUi99&email='.$user->email."\" type=\"_blank\"> <button> Export </button> </a>";
    }
}
