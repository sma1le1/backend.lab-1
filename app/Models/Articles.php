<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Articles
 * @package App\Models
 * @version December 3, 2019, 2:30 pm UTC
 *
 * @property string name
 * @property string content
 */
class Articles extends Model
{

    public $table = 'articles';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public $fillable = [
        'name',
        'content'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'content' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'content' => 'required'
    ];


}
