<?php namespace Leverate\Careers\Models;

use Model;
use Carbon\Carbon;
/**
 * Model
 */
class Event extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'leverate_careers_event';

    /**
     * @var array Validation rules
     */
    
    protected $dates = [
        'start_date',
        'end_date',
    ];

    public $rules = [
        'title'       => 'required',
        'location_id' => 'required',
        'thumb_img'   => 'required',
        'img'         => 'required',
        'slug'        => 'unique:leverate_careers_event,slug',  
        
       
    ];
    
    public $customMessages = [
        'title.required'        => 'Field Judul tidak boleh kosong!',
        'location_id.required'  => 'Field Kota tidak boleh kosong!',
        'thumb_img.required'    => 'Field Thumbnail tidak boleh kosong!',
        'img.required'          => 'Field Gambar tidak boleh kosong!',
    ];

    public $belongsTo = [
        'status' => ['Leverate\Careers\Models\Status', 'key' => 'is_enabled' ],
        'regencies' => ['Leverate\Careers\Models\Regency', 'key' => 'location_id']
    ];

    
    
    
}
