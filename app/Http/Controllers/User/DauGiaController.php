<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\DauGiaUserRequest;
use App\Models\Booking;
use App\Models\NewsDauGia;
use Illuminate\Http\Request;

class DauGiaController extends Controller
{
    public function index() {
        $nowDate = date('Y/m/d H:i:s', time());
        $dangDauGia = NewsDauGia::where('end_date','>', $nowDate)
            ->where('start_date','<', $nowDate)
            ->first();
        if (!empty($dangDauGia)) {
            $booking = Booking::where('news_dau_gia', $dangDauGia['id'])->orderByRaw('CONVERT(price, SIGNED) desc')->limit(10)->get();
        }
        $daDauGia = NewsDauGia::where('end_date','<', $nowDate)
            ->get();
        $sapDauGia = NewsDauGia::where('start_date','>', $nowDate)
            ->first();

        return view('user.dau_gia.index', [
            'dangDauGia' => $dangDauGia,
            'daDauGia' => $daDauGia,
            'sapDauGia' => $sapDauGia,
            'booking' => !empty($booking) ? $booking : null,
        ]);
    }

    public function saveDauGia(Request $request) {
        $save = Booking::create([
            'news_dau_gia' => $request['id'],
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'tinh' => $request['tinh'],
            'huyen' => $request['huyen'],
            'xa' => $request['xa'],
            'price' => $request['price']
        ]);
        if ($save) {
            \Session::flash('alert-danger', 'Đấu Giá Thành Công');
        } else {
            \Session::flash('alert-warning', 'Đấu Giá Lỗi');
        }

        return redirect()->route('dau_gia_index');
    }

    public function detail($id) {
        $nowDate = date('Y/m/d H:i:s', time());
        $detail = NewsDauGia::find($id);
        $booking = Booking::where('news_dau_gia', $id)->orderByRaw('CONVERT(price, SIGNED) desc')->limit(10)->get()->toArray();
        $daDauGia = NewsDauGia::where('end_date','<', $nowDate)
            ->get();
        return view('user.dau_gia.detail', [
            'detail' => $detail,
            'daDauGia' => $daDauGia,
            'booking' => $booking,
        ]);
    }
}