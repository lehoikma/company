<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;

class SuMenhLanguages extends Base
{
    use SoftDeletes;

    protected $table = 'su_menh_languages';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'su_menh_id', 'languages_id', 'content'
    ];
}