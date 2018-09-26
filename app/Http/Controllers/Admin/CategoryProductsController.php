<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryProducts;
use App\Models\CategoryProductsLanguages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = CategoryProductsLanguages::admin()->get();
        return view('admin.category_products.index', ['category' => $category]);
    }

    public function save(Request $request)
    {
        if ($request['name'][0] != "" || $request['name'][1] != "") {
            DB::beginTransaction();

            try {
                $categoryProducts = CategoryProducts::create();
                foreach ($request['name'] as $key => $value) {

                    CategoryProductsLanguages::create([
                        'category_products_id' => $categoryProducts['id'],
                        'languages_id' => ($key == 0) ? 1 : 2,
                        'name' => $value
                    ]);
                }
                DB::commit();

            } catch (\Exception $e) {
                DB::rollback();
            }
        }

        return redirect()->route('category_prd_index');
    }

    public function edit($id)
    {
        $categoryList = CategoryProductsLanguages::admin()->get();
        $category = CategoryProductsLanguages::where('category_products_id', $id)->get();

        return view('admin.category_products.edit', [
            'categoryList' => $categoryList,
            'category' => $category
        ]);
    }

    public function editSave(Request $request)
    {
        if ($request['name'][0] != "" || $request['name'][1] != "") {
            for ($i=0; $i<2; $i++) {
                CategoryProductsLanguages::where('id', $request['id'][$i])->update([
                    'name' => $request['name'][$i]
                ]);
            }
        }

        return redirect()->route('category_prd_index');
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
