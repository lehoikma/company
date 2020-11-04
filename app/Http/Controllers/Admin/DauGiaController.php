<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\DauGiaRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\EditDauGiaRequest;
use App\Models\NewsDauGia;
use Carbon\Carbon;

class DauGiaController extends Controller {
    public function index()
    {
        return view('admin.dau_gia.index');
    }

    public function save(DauGiaRequest $request) {
        $filename1 = '';
        $filename2 = '';
        $filename3 = '';
        $filename4 = '';
        $filename5 = '';
        $filename6 = '';
        $nowDate = date('Y/m/d H:i:s', time());
        $checkExistTime = NewsDauGia::where('end_date','>', $nowDate)
            ->where('start_date','<', $nowDate)
            ->count();
        if ($checkExistTime >= 1) {
            \Session::flash('alert-warning', 'Tạo đấu giá lỗi, thời gian này đang có sản phẩm đấu giá');
            return redirect()->route('dau_gia_index_form');
        }
        if (!empty($request->file('files1'))) {
            $image = $request->file('files1');
            $filename1 = time() . '.' . $image->extension();
            $image->move('upload/', $filename1);
        }
        if (!empty($request->file('files2'))) {
            $image = $request->file('files2');
            $filename2 = time() . '.' . $image->extension();
            $image->move('upload/', $filename2);
        }
        if (!empty($request->file('files3'))) {
            $image = $request->file('files3');
            $filename3 = time() . '.' . $image->extension();
            $image->move('upload/', $filename3);
        }
        if (!empty($request->file('files4'))) {
            $image = $request->file('files4');
            $filename4 = time() . '.' . $image->extension();
            $image->move('upload/', $filename4);
        }
        if (!empty($request->file('files5'))) {
            $image = $request->file('files5');
            $filename5 = time() . '.' . $image->extension();
            $image->move('upload/', $filename5);
        }
        if (!empty($request->file('files6'))) {
            $image = $request->file('files6');
            $filename6 = time() . '.' . $image->extension();
            $image->move('upload/', $filename6);
        }

        $save = NewsDauGia::create([
            'title' => $request['title'],
            'content' => $request['content'],
            'price' => $request['price'],
            'start_date' => date('Y-m-d H:i', strtotime(str_replace('/', '-', $request['start_date']))),
            'end_date' => date('Y-m-d H:i', strtotime(str_replace('/', '-', $request['end_date']))),
            'image1' => $filename1,
            'image2' => $filename2,
            'image3' => $filename3,
            'image4' => $filename4,
            'image5' => $filename5,
            'image6' => $filename6
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

    public function edit($id) {
        $data = NewsDauGia::find($id);
        return view('admin.dau_gia.edit', [
            'data' => $data
        ]);
    }

    public function saveEdit(EditDauGiaRequest $request) {
        $data = NewsDauGia::find($request['id']);
        $filename1 = $data['image1'];
        $filename2 = $data['image2'];
        $filename3 = $data['image3'];
        $filename4 = $data['image4'];
        $filename5 = $data['image5'];
        $filename6 = $data['image6'];
        $nowDate = date('Y/m/d H:i:s', time());
        $checkExistTime = NewsDauGia::where('end_date','>', $nowDate)
            ->where('start_date','<', $nowDate)
            ->count();
        if ($checkExistTime >= 1) {
            \Session::flash('alert-warning', 'Tạo đấu giá lỗi, thời gian này đang có sản phẩm đấu giá');
            return redirect()->back();
        }
        if (!empty($request->file('files1'))) {
            $image = $request->file('files1');
            $filename1 = time() . '.' . $image->extension();
            $image->move('upload/', $filename1);
        }
        if (!empty($request->file('files2'))) {
            $image = $request->file('files2');
            $filename2 = time() . '.' . $image->extension();
            $image->move('upload/', $filename2);
        }
        if (!empty($request->file('files3'))) {
            $image = $request->file('files3');
            $filename3 = time() . '.' . $image->extension();
            $image->move('upload/', $filename3);
        }
        if (!empty($request->file('files4'))) {
            $image = $request->file('files4');
            $filename4 = time() . '.' . $image->extension();
            $image->move('upload/', $filename4);
        }
        if (!empty($request->file('files5'))) {
            $image = $request->file('files5');
            $filename5 = time() . '.' . $image->extension();
            $image->move('upload/', $filename5);
        }
        if (!empty($request->file('files6'))) {
            $image = $request->file('files6');
            $filename6 = time() . '.' . $image->extension();
            $image->move('upload/', $filename6);
        }

        $edit = NewsDauGia::where('id', $request['id'])->update([
            'title' => $request['title'],
            'content' => $request['content'],
            'price' => $request['price'],
            'start_date' => date('Y-m-d H:i', strtotime(str_replace('/', '-', $request['start_date']))),
            'end_date' => date('Y-m-d H:i', strtotime(str_replace('/', '-', $request['end_date']))),
            'image1' => $filename1,
            'image2' => $filename2,
            'image3' => $filename3,
            'image4' => $filename4,
            'image5' => $filename5,
            'image6' => $filename6
        ]);
        if ($edit) {
            \Session::flash('alert-success', 'Sửa đấu giá thành công');
        } else {
            \Session::flash('alert-warning', 'Sửa đấu giá lỗi');
        }
        return redirect()->route('dau_gia_list');
    }

    public function thongKe() {
        $news = NewsDauGia::orderBy('created_at', 'desc')->get();
        return view('admin.dau_gia.thong_ke', [
            'news' => $news
        ]);
    }
}
