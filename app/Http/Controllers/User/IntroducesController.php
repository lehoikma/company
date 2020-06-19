<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\LichSuLanguages;
use App\Models\SuMenhLanguages;
use App\Models\TamNhinLanguages;

class IntroducesController extends Controller
{
    public function indexLichSu() {
        $introduces = LichSuLanguages::User()->first();

        return view('user.introduces.indexLichSu', [
            'introduces' => $introduces
        ]);
    }

    public function indexSumenh() {
        $introduces = SuMenhLanguages::User()->first();

        return view('user.introduces.indexSumenh', [
            'introduces' => $introduces
        ]);
    }

    public function indexTamNhin() {
        $introduces = TamNhinLanguages::User()->first();

        return view('user.introduces.indexTamNhin', [
            'introduces' => $introduces
        ]);
    }
}
