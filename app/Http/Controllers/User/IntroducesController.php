<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CategoryProductsLanguages;
use App\Models\IntroducesLanguages;
use App\Models\NewsLanguage;
use App\Models\ProductsLanguages;

class IntroducesController extends Controller
{
    public function index() {
        $introduces = IntroducesLanguages::User()->first();

        return view('user.introduces.index', [
            'introduces' => $introduces
        ]);
    }
}
