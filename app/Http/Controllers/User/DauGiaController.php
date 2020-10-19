<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DauGiaController extends Controller
{
    public function index() {
        return view('user.dau_gia.index');
    }
}
