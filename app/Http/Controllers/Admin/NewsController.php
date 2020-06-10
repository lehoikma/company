<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\EditNewsCompanyRequest;
use App\Http\Requests\EditNewsRequest;
use App\Http\Requests\SaveNewsRequest;
use App\Models\CategoriesNews;
use App\Models\CategoriesNewsLanguage;
use App\Models\News;
use App\Models\NewsCompany;
use App\Http\Controllers\Controller;
use App\Models\NewsLanguage;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function formCreateNews()
    {
        $categoryNews = CategoriesNewsLanguage::admin()->get();
        return view('admin.news.form_create_news', [
            'categoryNews' => $categoryNews
        ]);
    }

    public function createNews(SaveNewsRequest $request)
    {
        DB::beginTransaction();
        try {
            $image = $request->file('fileToUpload');
            $filename = time() . '.' . $image->extension();
            $image->move('upload/', $filename);

            $news = News::create();
            for ($i=0 ; $i<2; $i++) {

                NewsLanguage::create([
                    'category_news_id' => $request['select_cate_news'],
                    'news_id' => $news['id'],
                    'languages_id' => $i+1,
                    'content' => $request['content_news'][$i],
                    'image' => $filename,
                    'title' => $request['title_news'][$i],
                    'description' => $request['description_news'][$i]
                ]);
            }

            DB::commit();
            \Session::flash('alert-success', 'Tạo tin tức thành công');

        } catch (\Exception $e) {
            dd($e->getMessage()); die;
            DB::rollback();
            \Session::flash('alert-warning', 'Tạo tin tức lỗi');
        }

        return redirect()->route('list_news');

    }

    public function listNews()
    {
        $news = NewsLanguage::admin()->orderBy('updated_at', 'desc')->get();

        return view('admin.news.list_news',[
            'news' => $news
        ]);
    }

    public function showEditNews($id)
    {
        $news = NewsLanguage::where('news_id', $id)->get();
        $categoryNews = CategoriesNewsLanguage::admin()->get();

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
        if (($request['title_news'][0] != "" || $request['title_news'][1] != "") && ($request['content_news'][0] != "" || $request['content_news'][1] != "")) {
            if (!empty($request->file('fileToUpload'))) {
                $image = $request->file('fileToUpload');
                $filename = time() . '.' . $image->extension();
                $image->move('upload/', $filename);
            } else {
                $news = NewsLanguage::where('id', $request['news_id'])->first();
                $filename = $news['image'];
            }

            for ($i=0; $i<2; $i++) {
                $newsEdit = NewsLanguage::where('id', $request['news_id'][$i])->update([
                    'content' => $request['content_news'][$i],
                    'description' => $request['description_news'][$i],
                    'category_news_id' => $request['select_cate_news'],
                    'title' => $request['title_news'][$i],
                    'image' => $filename
                ]);
            }
        }

        if ($newsEdit) {
            \Session::flash('alert-success', 'Sửa tin tức thành công');
        } else {
            \Session::flash('alert-warning', 'Sửa tin tức lỗi');
        }
        return redirect()->route('list_news');

    }

    public function deleteNews($id)
    {
        DB::beginTransaction();
        try {
            $news = News::find($id);
            if (!empty($news)) {
                NewsLanguage::where('news_id', $news['id'])->delete();
                $news->delete();
            }

            DB::commit();
            \Session::flash('alert-success', 'Xoá tin tức thành công');
        } catch (\Exception $e) {
            DB::rollback();
            \Session::flash('alert-warning', 'Xoá tin tức lỗi');
        }

        return redirect()->route('list_news');

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
