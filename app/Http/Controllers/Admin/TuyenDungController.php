<?php

namespace App\Http\Controllers\Admin;

use App\Models\TuyenDung;
use App\Models\TuyenDungLanguages;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TuyenDungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexTuyenDung()
    {
        return view('admin.tuyen_dung.index_tuyen_dung');
    }

    public function saveTuyenDung(Request $request)
    {
        DB::beginTransaction();
        try {
            $image = $request->file('fileToUpload');
            $filename = time() . '.' . $image->extension();
            $image->move('upload/', $filename);

            $news = TuyenDung::create();
            for ($i=0 ; $i<2; $i++) {

                TuyenDungLanguages::create([
                    'tuyen_dung_id' => $news['id'],
                    'languages_id' => $i+1,
                    'content' => $request['content'][$i],
                    'image' => $filename,
                    'name' => $request['name'][$i]
                ]);
            }

            DB::commit();
            \Session::flash('alert-success', 'Tạo bài viết tuyển dụng thành công');

        } catch (\Exception $e) {
            DB::rollback();
            \Session::flash('alert-warning', 'Tạo bài viết tuyển dụng lỗi');
        }

        return redirect()->route('list_tuyen_dung');
    }

    public function listTuyenDung(Request $request) {
        $news = TuyenDungLanguages::admin()->orderBy('updated_at', 'desc')->get();

        return view('admin.tuyen_dung.list_tuyen_dung',[
            'news' => $news
        ]);
    }

    public function showEditTuyenDung($id) {
        $news = TuyenDungLanguages::where('tuyen_dung_id', $id)->get();

        if (isset($news) && !empty($news)) {

            return view('admin.tuyen_dung.edit_tuyen_dung', [
                'news' => $news
            ]);
        }
        return redirect()->route('list_tuyen_dung', [
            'news' => $news
        ]);
    }

    public function editTuyenDung(Request $request)
    {
        if (($request['name'][0] != "" || $request['name'][1] != "") && ($request['content'][0] != "" || $request['content'][1] != "")) {
            if (!empty($request->file('fileToUpload'))) {
                $image = $request->file('fileToUpload');
                $filename = time() . '.' . $image->extension();
                $image->move('upload/', $filename);
            } else {
                $news = TuyenDungLanguages::where('id', $request['tuyen_dung_id'])->first();
                $filename = $news['image'];
            }

            for ($i=0; $i<2; $i++) {
                $newsEdit = TuyenDungLanguages::where('id', $request['tuyen_dung_id'][$i])->update([
                    'content' => $request['content'][$i],
                    'image' => $filename,
                    'name' => $request['name'][$i]
                ]);
            }
        }

        if ($newsEdit) {
            \Session::flash('alert-success', 'Sửa bài viết tuyển dụng thành công');
        } else {
            \Session::flash('alert-warning', 'Sửa bài viết tuyển dụng lỗi');
        }
        return redirect()->route('list_tuyen_dung');

    }

    public function deleteTuyenDung($id)
    {
        DB::beginTransaction();
        try {
            $news = TuyenDung::find($id);
            if (!empty($news)) {
                TuyenDungLanguages::where('tuyen_dung_id', $news['id'])->delete();
                $news->delete();
            }

            DB::commit();
            \Session::flash('alert-success', 'Xoá bài viết tuyển dụng thành công');
        } catch (\Exception $e) {
            DB::rollback();
            \Session::flash('alert-warning', 'Xoá bài viết tuyển dụng lỗi');
        }

        return redirect()->route('list_tuyen_dung');
    }
}
