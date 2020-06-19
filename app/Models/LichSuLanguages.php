<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;

class LichSuLanguages extends Base
{
    use SoftDeletes;

    protected $table = 'lich_su_languages';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lich_su_id', 'languages_id', 'content'
    ];

    public function scopeUser($query) {
        $locateId = $this->getLocate(config('app.locale'));
        return $query->where('languages_id', $locateId);
    }
}