<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CategoriesNewsLanguage;
use App\Models\CategoryProductsLanguages;
use App\Models\NewsLanguage;
use App\Models\ProductsLanguages;

class NewsController extends Controller
{
    public function detail($title, $id) {
        $news = NewsLanguage::User()->where('news_id', $id)->first();
        if (!empty($news)) {
            $currentCount = $news['view'];
            $news->view = (int) $currentCount + 1;
            $news->save();

            $newsFollows = NewsLanguage::User()->where('category_news_id', $news['category_news_id'])->limit(5)->inRandomOrder()->get();
            return view('user.news.detail', [
                'news' => $news,
                'newsFollows' => $newsFollows
            ]);
        }
    }

    public function listCategory($title, $id) {
        $listNewsCategory = NewsLanguage::User()->where('category_news_id', $id)->paginate(20);
        $categoryName = CategoriesNewsLanguage::User()->where('news_category_id', $id)->first();
        return view('user.news.list',[
            'listNewsCategory' => $listNewsCategory,
            'categoryName' => $categoryName
        ]);
    }

    public function listNews() {
        $listNews = NewsLanguage::User()->paginate(24);
        return view('user.news.list1',[
            'listNews' => $listNews
        ]);
    }
}
