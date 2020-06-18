<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;

class TamNhinLanguages extends Base
{
    use SoftDeletes;

    protected $table = 'tam_nhin_languages';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tam_nhin_id', 'languages_id', 'content'
    ];
}