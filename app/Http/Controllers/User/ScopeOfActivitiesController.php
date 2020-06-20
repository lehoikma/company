<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Contacts;
use App\Models\DucGiongLanguages;
use App\Models\ThuocThuYLanguages;
use App\Models\VacXinFmdLanguages;
use App\Models\VacXinOieLanguages;
use Illuminate\Http\Request;

class ScopeOfActivitiesController extends Controller
{
    public function listActivities() {
        return view('user.linhvuchoatdong.listActivities');
    }

    public function detailThuocThuY() {
        $data = ThuocThuYLanguages::User()->first();
        return view('user.linhvuchoatdong.detailThuocThuY', [
            'data' => $data
        ]);
    }

    public function detailDucGiong() {
        $data = DucGiongLanguages::User()->first();
        return view('user.linhvuchoatdong.detailDucGiong', [
            'data' => $data
        ]);
    }

    public function detailVacXinOie() {
        $data = VacXinOieLanguages::User()->first();
        return view('user.linhvuchoatdong.detailVacXinOie', [
            'data' => $data
        ]);
    }

    public function detailVacXinFmd() {
        $data = VacXinFmdLanguages::User()->first();
        return view('user.linhvuchoatdong.detailVacXinFmd', [
            'data' => $data
        ]);
    }
}
