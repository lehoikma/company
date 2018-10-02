<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoriesNews;
use App\Models\CategoriesNewsLanguage;
use App\Models\CategoryProducts;
use App\Models\CategoryProductsLanguages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = CategoriesNewsLanguage::admin()->get();
        return view('admin.category_news.index', ['category' => $category]);
    }

    public function save(Request $request)
    {
        if ($request['name'][0] != "" || $request['name'][1] != "") {
            DB::beginTransaction();

            try {
                $categoryNews = CategoriesNews::create();
                foreach ($request['name'] as $key => $value) {

                    CategoriesNewsLanguage::create([
                        'news_category_id' => $categoryNews['id'],
                        'languages_id' => ($key == 0) ? 1 : 2,
                        'name' => $value
                    ]);
                }
                DB::commit();

            } catch (\Exception $e) {
                DB::rollback();
            }
        }

        return redirect()->route('category_news_index');
    }

    public function edit($id)
    {
        $categoryList = CategoriesNewsLanguage::admin()->get();
        $category = CategoriesNewsLanguage::where('news_category_id', $id)->get();

        return view('admin.category_news.edit', [
            'categoryList' => $categoryList,
            'category' => $category
        ]);
    }

    public function editSave(Request $request)
    {
        if ($request['name'][0] != "" || $request['name'][1] != "") {
            for ($i=0; $i<2; $i++) {
                CategoriesNewsLanguage::where('id', $request['id'][$i])->update([
                    'name' => $request['name'][$i]
                ]);
            }
        }

        return redirect()->route('category_news_index');
    }

    public function delete($id)
    {
        $categoryPrd = CategoriesNews::find($id);
        if (!empty($categoryPrd)) {
            $categoryPrd->delete();
        }
        return redirect()->route('category_news_index');
    }
}
