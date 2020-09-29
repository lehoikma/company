<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CategoriesImages;
use App\Models\Images;
use App\Models\TuyenDungLanguages;
use Illuminate\Support\Facades\DB;

class TuyenDungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listTuyenDung()
    {
        $categoryImage = TuyenDungLanguages::User()->orderBy('created_at', 'desc')->paginate(24);
        return view('user.tuyen_dung.list',[
            'categoryImage' => $categoryImage
        ]);
    }

    public function detailTuyenDung($title, $id) {
        $news = TuyenDungLanguages::where('id', $id)->first();
        return view('user.tuyen_dung.detail',[
            'news' => $news,
            'titles' => $title
        ]);
    }
}
