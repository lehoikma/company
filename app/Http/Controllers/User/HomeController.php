<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function changeLanguage($language) {

        \Session::put('website_language', $language);
        return redirect()->back();
    }
}
