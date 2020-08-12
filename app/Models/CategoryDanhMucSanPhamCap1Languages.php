<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;

class CategoryDanhMucSanPhamCap1Languages extends Base
{
    use SoftDeletes;

    protected $table = 'categories_cap_1_language';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'categories_cap_1_id', 'languages_id', 'name'
    ];

    public function scopeAdmin($query) {
        return $query->where('languages_id', 1);
    }

    public function scopeUser($query) {
        $locateId = $this->getLocate(config('app.locale'));
        return $query->where('languages_id', $locateId);
    }
}