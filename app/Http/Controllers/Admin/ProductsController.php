<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SaveProductsRequest;
use App\Models\CategoryProducts;
use App\Models\Products;
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

        $image = $request->file('fileToUpload');
        $filename = time() . '.' . $image->extension();
        $image->move('upload/', $filename);

        $saveProducts = Products::create([
            'name' => $request['name'],
            'content' => $request['content'],
            'price' => $request['price'],
            'image' => $filename,
            'status' => 1
        ]);

        if ($saveProducts) {
            \Session::flash('alert-success', 'Tạo Sản Phẩm Thành Công');
        } else {
            \Session::flash('alert-warning', 'Tạo Sản Phẩm Lỗi');
        }
        return redirect()->route('prd_listPrd');
    }

    public function listPrd() {
        $listPrd = Products::all();
        return view('admin.products.listPrd', ['listPrd' => $listPrd]);
    }
}
