<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SaveProductsRequest;
use App\Models\CategoryProducts;
use App\Models\Products;
use App\Models\ProductsLanguages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        DB::beginTransaction();
        try {
            $image = $request->file('fileToUpload');
            $filename = time() . '.' . $image->extension();
            $image->move('upload/', $filename);

            $products = Products::create();
            for ($i=0 ; $i<2; $i++) {
                $saveProducts = ProductsLanguages::create([
                    'products_id' => $products['id'],
                    'languages_id' => $i+1,
                    'name' => $request['name'][$i],
                    'content' => $request['content'][$i],
                    'price' => $request['price'],
                    'image' => $filename,
                    'status' => 1
                ]);
            }
            DB::commit();

        } catch (\Exception $e) {
            DB::rollback();
        }

        if ($saveProducts) {
            \Session::flash('alert-success', 'Tạo Sản Phẩm Thành Công');
        } else {
            \Session::flash('alert-warning', 'Tạo Sản Phẩm Lỗi');
        }
        return redirect()->route('prd_listPrd');
    }

    public function listPrd() {
        $listPrd = ProductsLanguages::admin()->get();
        return view('admin.products.listPrd', ['listPrd' => $listPrd]);
    }

    public function delete($id) {
        $prd = Products::find($id);
        if (!empty($prd)) {
            $prd->delete();
        }
        return redirect()->route('prd_listPrd');
    }

    public function edit($id) {
        $prd = ProductsLanguages::where('products_id', $id)->get();
        if (!empty($prd)) {
            return view('admin.products.edit', ['prd' => $prd]);
        }
        return redirect()->route('prd_listPrd');
    }

    public function editSave(Request $request) {
        if (($request['name'][0] != "" || $request['name'][1] != "") && ($request['content'][0] != "" || $request['content'][1] != "")) {
            if (!empty($request->file('fileToUpload'))) {
                $image = $request->file('fileToUpload');
                $filename = time() . '.' . $image->extension();
                $image->move('upload/', $filename);
            } else{
                $products = ProductsLanguages::where('id', $request['id'])->first();
                $filename = $products['image'];
            }

            for ($i=0; $i<2; $i++) {
                $newsEdit = ProductsLanguages::where('id', $request['id'][$i])->update([
                    'languages_id' => $i+1,
                    'name' => $request['name'][$i],
                    'content' => $request['content'][$i],
                    'price' => $request['price'],
                    'image' => $filename,
                    'status' => 1
                ]);
            }
        }

        if ($newsEdit) {
            \Session::flash('alert-success', 'Sửa Sản Phẩm Thành Công');
        } else {
            \Session::flash('alert-warning', 'Sửa Sản Phẩm Lỗi');
        }
        return redirect()->route('prd_listPrd');
    }
}
