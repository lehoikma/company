<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CategoriesImages;
use App\Models\CookTable;
use App\Models\Images;
use App\Models\LichSuLanguages;
use App\Models\NewsLanguage;
use App\Models\ProductsLanguages;
use App\Models\Sliders;
use App\Models\Slides;
use App\Models\Videos;

class TopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $firstNewsAmavet = NewsLanguage::User()
//            ->where('category_news_id', 1)
            ->where('display_top', 1)
            ->orderBy('display_top', 'desc')
            ->orderBy('updated_at', 'desc')->first();

        $newsAmavet = NewsLanguage::User()
//            ->where('category_news_id', 1)
            ->where('display_top', 1)
            ->orderBy('updated_at', 'desc')->take(6)->get();

        $newsSocial = NewsLanguage::User()->where('category_news_id', 4)
            ->orderBy('id', 'desc')->take(3)->get();
        $videos = Videos::orderBy('id', 'desc')->first();
        $sliders = Sliders::all();
        $products = ProductsLanguages::User()->orderBy('created_at', 'desc')->where('display_top', 1)->take(10)->get();
        $images = CategoriesImages::orderBy('created_at', 'desc')->take(2)->get();
        $introduces = LichSuLanguages::User()->first();

        return view('user.top.index',[
            'firstNewsAmavet' => $firstNewsAmavet,
            'newsAmavet' => $newsAmavet,
            'newsSocial' => $newsSocial,
            'videos' => $videos,
            'sliders' => $sliders,
            'products' => $products,
            'images' => $images,
            'introduces' => $introduces,
        ]);
    }
    }
}
