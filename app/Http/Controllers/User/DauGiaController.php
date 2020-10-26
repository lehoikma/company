<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\NewsDauGia;
use Illuminate\Http\Request;

class DauGiaController extends Controller
{
    public function index() {
        $nowDate = date('Y/m/d H:i:s', time());
        $dataTime = NewsDauGia::where('end_date','>', $nowDate)
            ->where('start_date','<', $nowDate)
            ->first();

        return view('user.dau_gia.index', [
            'dataTime' => $dataTime
        ]);
    }
}
