<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;

class ProductsLanguages extends Base
{
    use SoftDeletes;

    protected $table = 'products_languages';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'products_id', 'languages_id', 'name', 'image' , 'price', 'content', 'status', 'category_product_id'
    ];

    public function scopeAdmin($query) {
        return $query->where('languages_id', 1);
    }

    public function scopeUser($query) {
        $locateId = $this->getLocate(config('app.locale'));
        return $query->where('languages_id', $locateId);
    }
}