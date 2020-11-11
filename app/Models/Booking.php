<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use SoftDeletes;

    protected $table = 'booking';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'news_dau_gia', 'name', 'phone', 'email', 'tinh', 'huyen', 'xa', 'price'
    ];
}