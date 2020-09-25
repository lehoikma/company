<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SaveVideosRequest;
use App\Models\TuyenDung;
use App\Models\TuyenDungLanguages;
use App\Models\Videos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}
