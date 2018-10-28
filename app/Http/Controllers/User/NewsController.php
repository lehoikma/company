<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CategoryProductsLanguages;
use App\Models\NewsLanguage;
use App\Models\ProductsLanguages;

class NewsController extends Controller
{
    public function detail($title, $id) {
        $news = NewsLanguage::User()->where('news_id', $id)->first();
        $newsFollows = NewsLanguage::User()->where('category_news_id', $news['category_news_id'])->limit(3)->inRandomOrder()->get();

        return view('user.news.detail', [
            'news' => $news,
            'newsFollows' => $newsFollows
        ]);
    }

    public function listCategory($title, $id) {
        $listNewsCategory = NewsLanguage::User()->where('category_news_id', $id)->paginate(20);
        return view('user.news.list',[
            'title' => $title,
            'listNewsCategory' => $listNewsCategory
        ]);
    }

    public function listNews() {
        $listNews = NewsLanguage::User()->paginate(30);
        return view('user.news.list1',[
            'listNews' => $listNews
        ]);
    }
}
