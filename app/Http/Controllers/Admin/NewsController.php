<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\EditNewsCompanyRequest;
use App\Http\Requests\EditNewsRequest;
use App\Http\Requests\SaveNewsRequest;
use App\Models\CategoriesNews;
use App\Models\News;
use App\Models\NewsCompany;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function formCreateNews()
    {
        $categoryNews = CategoriesNews::all();
        return view('admin.news.form_create_news', [
            'categoryNews' => $categoryNews
        ]);
    }

    public function createNews(SaveNewsRequest $request)
    {
        $image = $request->file('fileToUpload');
        $filename = time() . '.' . $image->extension();
        $image->move('upload/', $filename);

        $newsCompany = News::create([
            'content' => $request['content_news'],
            'category_news_id' => $request['select_cate_news'],
            'image' => $filename,
            'author' => $request['author'],
            'title' => $request['title_news']
        ]);
        if ($newsCompany) {
            \Session::flash('alert-success', 'Tạo tin tức thành công');
        } else {
            \Session::flash('alert-warning', 'Tạo tin tức lỗi');
        }
        return redirect()->route('list_news');
    }

    public function listNews()
    {
        $news = News::orderBy('updated_at', 'desc')->get();

        return view('admin.news.list_news',[
            'news' => $news
        ]);
    }

    public function showEditNews($id)
    {
        $news = News::find($id);
        $categoryNews = CategoriesNews::all();

        if (isset($news) && !empty($news)) {

            return view('admin.news.edit_news', [
                'news' => $news,
                'categoryNews' => $categoryNews
            ]);
        }
        return redirect()->route('list_news', [
            'news' => $news
        ]);
    }

    public function editNews(EditNewsRequest $request)
    {
        if (!empty($request->file('fileToUpload'))) {
            $image = $request->file('fileToUpload');
            $filename = time() . '.' . $image->extension();
            $image->move('upload/', $filename);
        } else{
            $news = News::where('id', $request['news_id'])->first();
            $filename = $news['image'];
        }

        $newsEdit = News::where('id', $request['news_id'])
            ->update([
                'content' => $request['content_news'],
                'category_news_id' => $request['select_cate_news'],
                'image' => $filename,
                'author' => $request['author'],
                'title' => $request['title_news']
            ]);
        if ($newsEdit) {
            \Session::flash('alert-success', 'Sửa tin tức thành công');
        } else {
            \Session::flash('alert-warning', 'Sửa tin tức lỗi');
        }
        return redirect()->route('list_news');

    }

    public function deleteNews($id)
    {
        $news = News::find($id);
        $delete = $news->delete();
        if ($delete) {
            \Session::flash('alert-success', 'Xoá tin tức thành công');
        } else {
            \Session::flash('alert-warning', 'Xoá tin tức lỗi');
        }
        return redirect()->route('list_news');
    }

}
