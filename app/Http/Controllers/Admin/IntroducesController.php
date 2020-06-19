<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SaveHotelRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\SaveIntroducesRequest;
use App\Models\Introduces;
use App\Models\IntroducesLanguages;
use App\Models\Lichsu;
use App\Models\LichSuLanguages;
use App\Models\SuMenh;
use App\Models\SuMenhLanguages;
use App\Models\TamNhin;
use App\Models\TamNhinLanguages;
use Illuminate\Support\Facades\DB;

class IntroducesController extends Controller
{
    public function indexHistory()
    {
        $introduces = LichSuLanguages::all();
        return view('admin.introduces.indexHistory', [
            'introduces' => $introduces
        ]);
    }

    public function indexMission()
    {
        $introduces = SuMenhLanguages::all();
        return view('admin.introduces.indexMission', [
            'introduces' => $introduces
        ]);
    }

    public function indexVision()
    {
        $introduces = TamNhinLanguages::all();
        return view('admin.introduces.indexVision', [
            'introduces' => $introduces
        ]);
    }

    public function saveHistory(SaveIntroducesRequest $request)
    {
        DB::beginTransaction();
        try {
            if (!empty($request['id'][0]) || !empty($request['id'][1])) {
                for ($i=0 ; $i<2; $i++) {
                    $editIntroduce = LichSuLanguages::where('id', $request['id'][$i])->update([
                        'content' => $request['content'][$i]
                    ]);
                }
                if ($editIntroduce) {
                    \Session::flash('alert-success', 'Sửa Lịch Sử Thành Công');
                } else {
                    \Session::flash('alert-warning', 'Sửa Lịch Sử Lỗi');
                }
            } else {
                $products = Lichsu::create();
                for ($i=0 ; $i<2; $i++) {
                    $saveIntroduce = LichSuLanguages::create([
                        'lich_su_id' => $products['id'],
                        'languages_id' => $i+1,
                        'content' => $request['content'][$i]
                    ]);
                }
                if ($saveIntroduce) {
                    \Session::flash('alert-success', 'Tạo Lịch Sử Thành Công');
                } else {
                    \Session::flash('alert-warning', 'Tạo Lịch Sử Lỗi');
                }
            }
            DB::commit();

        } catch (\Exception $e) {
            DB::rollback();
        }

        return redirect()->route('index_history');
    }

    public function saveMission(SaveIntroducesRequest $request)
    {
        DB::beginTransaction();
        try {
            if (!empty($request['id'][0]) || !empty($request['id'][1])) {
                for ($i=0 ; $i<2; $i++) {
                    $editIntroduce = SuMenhLanguages::where('id', $request['id'][$i])->update([
                        'content' => $request['content'][$i]
                    ]);
                }
                if ($editIntroduce) {
                    \Session::flash('alert-success', 'Sửa Sứ Mệnh Thành Công');
                } else {
                    \Session::flash('alert-warning', 'Sửa Sứ Mệnh Lỗi');
                }
            } else {
                $products = SuMenh::create();
                for ($i=0 ; $i<2; $i++) {
                    $saveIntroduce = SuMenhLanguages::create([
                        'su_menh_id' => $products['id'],
                        'languages_id' => $i+1,
                        'content' => $request['content'][$i]
                    ]);
                }
                if ($saveIntroduce) {
                    \Session::flash('alert-success', 'Tạo Sứ Mệnh Thành Công');
                } else {
                    \Session::flash('alert-warning', 'Tạo Sứ Mệnh Lỗi');
                }
            }
            DB::commit();

        } catch (\Exception $e) {
            var_dump($e->getMessage()); die;
            DB::rollback();
        }

        return redirect()->route('index_mission');
    }

    public function saveVision(SaveIntroducesRequest $request)
    {
        DB::beginTransaction();
        try {
            if (!empty($request['id'][0]) || !empty($request['id'][1])) {
                for ($i=0 ; $i<2; $i++) {
                    $editIntroduce = TamNhinLanguages::where('id', $request['id'][$i])->update([
                        'content' => $request['content'][$i]
                    ]);
                }
                if ($editIntroduce) {
                    \Session::flash('alert-success', 'Sửa tầm nhìn Thành Công');
                } else {
                    \Session::flash('alert-warning', 'Sửa tầm nhìn Lỗi');
                }
            } else {
                $products = TamNhin::create();
                for ($i=0 ; $i<2; $i++) {
                    $saveIntroduce = TamNhinLanguages::create([
                        'tam_nhin_id' => $products['id'],
                        'languages_id' => $i+1,
                        'content' => $request['content'][$i]
                    ]);
                }
                if ($saveIntroduce) {
                    \Session::flash('alert-success', 'Tạo tầm nhìn thành công');
                } else {
                    \Session::flash('alert-warning', 'Tạo tầm nhìn lỗi');
                }
            }
            DB::commit();

        } catch (\Exception $e) {
            DB::rollback();
        }

        return redirect()->route('index_vision');
    }
}
