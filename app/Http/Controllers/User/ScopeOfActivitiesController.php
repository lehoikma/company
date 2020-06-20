<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Contacts;
use Illuminate\Http\Request;

class ScopeOfActivitiesController extends Controller
{
    public function listActivities() {
        return view('user.linhvuchoatdong.index');
    }
}
