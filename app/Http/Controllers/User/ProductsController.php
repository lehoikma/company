<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function detail() {
        return view('user.products.detail');
    }
}
