<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryProducts;
use Illuminate\Http\Request;

class CategoryProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = CategoryProducts::all();
        return view('admin.category_products.index', ['category' => $category]);
    }

    public function save(Request $request)
    {
        if ($request['name'] != "") {
            CategoryProducts::create([
                'name' => $request['name']
            ]);
        }

        return redirect()->route('category_prd_index');
    }

    public function edit($id)
    {

    }

    public function delete($id)
    {
        $categoryPrd = CategoryProducts::find($id);
        if (!empty($categoryPrd)) {
            $categoryPrd->delete();
        }
        return redirect()->route('category_prd_index');
    }
}
