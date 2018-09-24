<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SaveProductsRequest;
use App\Models\CategoryProducts;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = CategoryProducts::all();
        return view('admin.products.index', ['category' => $category]);
    }

    public function save(SaveProductsRequest $request)
    {
        var_dump($request->all());
    }
}
