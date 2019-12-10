<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Comments
 * @package App\Models
 * @version December 3, 2019, 2:35 pm UTC
 *
 * @property string textarea
 */
class Comments extends Model
{

    public $table = 'comments';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $fillable = [
        'textarea'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'textarea' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'textarea' => 'required'
    ];


}
