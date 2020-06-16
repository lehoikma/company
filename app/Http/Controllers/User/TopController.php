<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CookTable;
use App\Models\NewsLanguage;
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
        $newsAmavet = NewsLanguage::User()->where('category_news_id', 1)
            ->orderBy('id', 'desc')->take(4)->get();
        $newsSocial = NewsLanguage::User()->where('category_news_id', 4)
            ->orderBy('id', 'desc')->first();
        $videos = Videos::orderBy('id', 'desc')->first();
        $sliders = Sliders::all();
        return view('user.top.index',[
            'newsAmavet' => $newsAmavet,
            'newsSocial' => $newsSocial,
            'videos' => $videos,
            'sliders' => $sliders,
        ]);
    }
}
