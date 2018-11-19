<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;

class CategoryProductsLanguages extends Base
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

    public function scopeUser($query) {
        $locateId = $this->getLocate(config('app.locale'));
        return $query->where('languages_id', $locateId);
    }
}