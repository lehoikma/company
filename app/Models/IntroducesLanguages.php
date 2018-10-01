<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class IntroducesLanguages extends Model
{
    use SoftDeletes;

    protected $table = 'introduces_languages';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'introduces_id', 'content' , 'languages_id'
    ];
}