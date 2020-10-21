<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\EditImagesRequest;
use App\Http\Requests\SaveImageRequest;
use App\Models\CategoriesImages;
use App\Models\Contacts;
use App\Models\Images;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DauGiaController extends Controller
{
    public function index()
    {
        return view('admin.dau_gia.index');
    }

    public function save($id) {
        if (!empty($id)) {
            $contacsEdit = Contacts::where('id', $id)->update([
                'status' => 1
            ]);
        }
        if (!empty($contacsEdit)) {
            \Session::flash('alert-success', 'Sửa Liên Hệ thành công');
        } else {
            \Session::flash('alert-warning', 'Sửa Liên Hệ lỗi');
        }
        return redirect()->back();
    }
}
