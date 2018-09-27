<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class ProductsLanguages extends Model
{
    use SoftDeletes;

    protected $table = 'products_languages';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'products_id', 'languages_id', 'name', 'image' , 'price', 'content', 'status'
    ];

    public function scopeAdmin($query) {
        return $query->where('languages_id', 1);
    }
}