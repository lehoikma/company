<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\DauGiaRequest;
use App\Http\Controllers\Controller;
use App\Models\NewsDauGia;

class DauGiaController extends Controller {
    public function index()
    {
        return view('admin.dau_gia.index');
    }

    public function save(DauGiaRequest $request) {
        $save = NewsDauGia::create([
            'title' => $request['title'],
            'content' => $request['content'],
            'price' => $request['price'],
            'start_date' => date('Y-m-d H:i', strtotime(str_replace('/', '-', $request['start_date']))),
            'end_date' => date('Y-m-d H:i', strtotime(str_replace('/', '-', $request['end_date']))),
        ]);
        if ($save) {
            \Session::flash('alert-success', 'Tạo Đấu Giá Thành Công');
        } else {
            \Session::flash('alert-warning', 'Tạo Đấu Giá Lỗi');
        }

        return redirect()->route('dau_gia_list');
    }

    public function listNews() {
        $news = NewsDauGia::orderBy('created_at', 'desc')->get();
        return view('admin.dau_gia.list', [
            'news' => $news
        ]);
    }

    public function deleteNews($id)
    {
        $image = NewsDauGia::find($id);
        $delete = $image->delete();
        if ($delete) {
            \Session::flash('alert-success', 'Xoá Bài Viết Đấu Giá Thành Công');
        } else {
            \Session::flash('alert-warning', 'Xoá Bài Viết Đấu Giá Lỗi');
        }
        return redirect()->route('dau_gia_list');
    }
}
