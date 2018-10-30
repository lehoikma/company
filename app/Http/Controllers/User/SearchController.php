<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ProductsLanguages;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request) {
        if (isset($request['key'])) {
            $key = $request['key'];
            $dataSearch = ProductsLanguages::User()
                ->where(function ($q) use ($key) {
                    $q->where('content', 'LIKE', "%$key%")
                        ->orWhere('name', 'LIKE', "%$key%")
                        ->orWhere('price', 'LIKE', "%$key%");
                })->paginate(30);
            return view('user.search.index', [
                'key' => $key,
                'dataSearch' => $dataSearch
            ]);
        }
        
        return redirect()->route('user_top');
    }
}
