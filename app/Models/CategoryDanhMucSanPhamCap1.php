<?php

namespace App\Models;

use App\Models\Base;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class CategoryDanhMucSanPhamCap1 extends Base
{
    use SoftDeletes;

    protected $table = 'categories_cap_1';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id'
    ];
}