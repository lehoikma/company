<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class CategoriesNewsLanguage extends Model
{
    use SoftDeletes;

    protected $table = 'categories_news_language';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'news_category_id', 'name', 'languages_id'
    ];

    public function scopeAdmin($query) {
        return $query->where('languages_id', 1);
    }
}