<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Base extends Model
{
    public function getLocate($localte) {
        return $localte == 'vn' ? 1 : 2;
    }
}