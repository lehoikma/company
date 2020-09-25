<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;

class TuyenDungLanguages extends Base
{
    use SoftDeletes;

    protected $table = 'tuyen_dung_languages';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'tuyen_dung_id', 'languages_id', 'name', 'content', 'image'
    ];

    public function scopeAdmin($query) {
        return $query->where('languages_id', 1);
    }

    public function scopeUser($query) {
        $locateId = $this->getLocate(config('app.locale'));
        return $query->where('languages_id', $locateId);
    }
}