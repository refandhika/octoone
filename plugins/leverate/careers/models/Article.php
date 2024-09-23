<?php namespace Leverate\Careers\Models;

use Model;
use Carbon\Carbon;
/**
 * Model
 */
class Article extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'leverate_careers_article';

    /**
     * @var array Validation rules
     */
    protected $dates = ['created_at','updated_at'];
    protected $appends = ['time'];
    
    public $rules = [
        'title'       => 'required',
        'thumb_img'   => 'required',
        'img'         => 'required',
        'excerpt'     => 'required',
        'description' => 'required',
    ];
    
    public $customMessages = [
        'title.required'        => 'Field Judul tidak boleh kosong!',
        'thumb_img.required'    => 'Field Thumbnail tidak boleh kosong!',
        'img.required'          => 'Field Gambar tidak boleh kosong!',
        'excerpt.required'      => 'Field Excerpt tidak boleh kosong!',
        'description'           => 'Field Description tidak boleh kosong!'   
    ];

    public $belongsTo = [
        'status' => ['Leverate\Careers\Models\Status', 'key' => 'is_enabled' ]
        
    ];

     public function getTimeAttribute()
    {   
        
        $time = strtotime($this->created_at);

        return strftime('%d %B %Y', $time);
    }

   
    
}
