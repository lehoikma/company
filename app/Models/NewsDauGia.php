<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class NewsDauGia extends Model
{
    use SoftDeletes;

    protected $table = 'news_dau_gia';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'title', 'content', 'price', 'start_date', 'end_date'
    ];
}