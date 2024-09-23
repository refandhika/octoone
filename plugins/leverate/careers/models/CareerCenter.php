<?php namespace Leverate\Careers\Models;

use Model;

/**
 * Model
 */
class CareerCenter extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */

    /**
     * @var string The database table used by the model.
     */
    public $table = 'leverate_careers_careercenter';

    /**
     * @var array Validation rules
     */
   
    public $rules = [
        'title'     => 'required',
        'title_url' => 'required',
        'location_id' => 'required'
    ];
    
    public $customMessages = [
        'title.required'       => 'Field Judul tidak boleh kosong!',
        'title_url.required'   => 'Field Link URL tidak boleh kosong!',
        'location_id.required' => 'Field Kota tidak boleh kosong!'
    ];

    public $belongsTo = [
        'category' => ['Leverate\Careers\Models\Category', 'key' => 'category_id'],
        'status' => ['Leverate\Careers\Models\Status', 'key' => 'is_enabled' ],
        'regencies' => ['Leverate\Careers\Models\Regency', 'key' => 'location_id']
    ];
}
