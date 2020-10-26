<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\DauGiaRequest;
use App\Http\Controllers\Controller;
use App\Models\NewsDauGia;
use Carbon\Carbon;

class DauGiaController extends Controller {
    public function index()
    {
        return view('admin.dau_gia.index');
    }

    public function save(DauGiaRequest $request) {
        $nowDate = date('Y/m/d H:i:s', time());
        $checkExistTime = NewsDauGia::where('end_date','>', $nowDate)
            ->where('start_date','<', $nowDate)
            ->count();
        if ($checkExistTime >= 1) {
            \Session::flash('alert-warning', 'Tạo đấu giá lỗi, thời gian này đang có sản phẩm đấu giá');
            return redirect()->route('dau_gia_index_form');
        }
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
