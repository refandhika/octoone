<?php

namespace Definite\Translation\Models;

use Model;

/**
 * Model.
 */
class Message extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string the database table used by the model
     */
    public $table = 'definite_translation_messages';
}
