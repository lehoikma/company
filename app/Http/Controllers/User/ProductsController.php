<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ProductsLanguages;

class ProductsController extends Controller
{
    public function detail($title, $id) {
        $product = ProductsLanguages::User()->where('products_id', $id)->first();

        return view('user.products.detail', ['product' => $product]);
    }
}
