<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CategoryProductsLanguages;
use App\Models\ProductsLanguages;

class ProductsController extends Controller
{
    public function detail($title, $id) {
        $product = ProductsLanguages::User()->where('products_id', $id)->first();
        $prdFollows = ProductsLanguages::User()->where('category_product_id', $product['category_product_id'])->limit(4)->inRandomOrder()->get();

        return view('user.products.detail', [
            'product' => $product,
            'prdFollows' => $prdFollows
        ]);
    }

    public function listCategory($title, $id) {
        $listProductCategory = ProductsLanguages::User()->where('category_product_id', $id)->paginate(20);
        return view('user.products.list',[
            'title' => $title,
            'listProductCategory' => $listProductCategory
        ]);
    }

    public function listProduct() {
        $data = ProductsLanguages::User()->paginate(30);
        return view('user.products.list1',[
            'data' => $data
        ]);
    }
}
