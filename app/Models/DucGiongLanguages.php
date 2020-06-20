<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;

class DucGiongLanguages extends Base
{
    use SoftDeletes;

    protected $table = 'duc_giong_languages';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'duc_giong_id', 'languages_id', 'content'
    ];

    public function scopeUser($query) {
        $locateId = $this->getLocate(config('app.locale'));
        return $query->where('languages_id', $locateId);
    }
}