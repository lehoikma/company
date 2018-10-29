<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request) {
        var_dump($request['key']);
    }
}
