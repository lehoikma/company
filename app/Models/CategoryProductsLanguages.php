<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class CategoryProductsLanguages extends Model
{
    use SoftDeletes;

    protected $table = 'category_products_languages';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_products_id', 'languages_id', 'name'
    ];

    public function scopeAdmin($query) {
        return $query->where('languages_id', 1);
    }
}