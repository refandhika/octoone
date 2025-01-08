<?php

namespace Definite\Localization\Models;

use Model;

/**
 * Model.
 */
class Translation extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
        'key' => 'required|max:191|unique:definite_localization_translations',
        'trans_id' => 'required',
    ];

    /**
     * @var string the database table used by the model
     */
    public $table = 'definite_localization_translations';
}
