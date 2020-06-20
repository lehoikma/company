<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SaveIntroducesRequest;
use App\Models\DucGiong;
use App\Models\DucGiongLanguages;
use App\Models\Lichsu;
use App\Models\LichSuLanguages;
use App\Models\SuMenh;
use App\Models\SuMenhLanguages;
use App\Models\TamNhin;
use App\Models\TamNhinLanguages;
use App\Models\ThuocThuY;
use App\Models\ThuocThuYLanguages;
use App\Models\VacXinFmd;
use App\Models\VacXinFmdLanguages;
use App\Models\VacXinOie;
use App\Models\VacXinOieLanguages;
use Illuminate\Support\Facades\DB;

class LinhVucHoatDongController extends Controller
{
    public function indexThuocThuY()
    {
        $introduces = ThuocThuYLanguages::all();
        return view('admin.linhvuchoatdong.indexThuocThuY', [
            'introduces' => $introduces
        ]);
    }

    public function indexDucGiong()
    {
        $introduces = DucGiongLanguages::all();
        return view('admin.linhvuchoatdong.indexDucGiong', [
            'introduces' => $introduces
        ]);
    }

    public function indexVacXinOie()
    {
        $introduces = VacXinOieLanguages::all();
        return view('admin.linhvuchoatdong.indexVacXinOie', [
            'introduces' => $introduces
        ]);
    }

    public function indexVacXinFmd()
    {
        $introduces = VacXinFmdLanguages::all();
        return view('admin.linhvuchoatdong.indexVacXinFmd', [
            'introduces' => $introduces
        ]);
    }


    public function saveThuocThuY(SaveIntroducesRequest $request)
    {
        DB::beginTransaction();
        try {
            if (!empty($request['id'][0]) || !empty($request['id'][1])) {
                for ($i=0 ; $i<2; $i++) {
                    $editIntroduce = ThuocThuYLanguages::where('id', $request['id'][$i])->update([
                        'content' => $request['content'][$i]
                    ]);
                }
                if ($editIntroduce) {
                    \Session::flash('alert-success', 'Sửa Bài Viết Thành Công');
                } else {
                    \Session::flash('alert-warning', 'Sửa Bài Viết Lỗi');
                }
            } else {
                $products = ThuocThuY::create();
                for ($i=0 ; $i<2; $i++) {
                    $saveIntroduce = ThuocThuYLanguages::create([
                        'thuoc_thu_y_id' => $products['id'],
                        'languages_id' => $i+1,
                        'content' => $request['content'][$i]
                    ]);
                }
                if ($saveIntroduce) {
                    \Session::flash('alert-success', 'Tạo Bài Viết Thành Công');
                } else {
                    \Session::flash('alert-warning', 'Tạo Bài Viết Lỗi');
                }
            }
            DB::commit();

        } catch (\Exception $e) {
            DB::rollback();
        }

        return redirect()->route('index_thuoc_thu_y');
    }

    public function saveDucGiong(SaveIntroducesRequest $request)
    {
        DB::beginTransaction();
        try {
            if (!empty($request['id'][0]) || !empty($request['id'][1])) {
                for ($i=0 ; $i<2; $i++) {
                    $editIntroduce = DucGiongLanguages::where('id', $request['id'][$i])->update([
                        'content' => $request['content'][$i]
                    ]);
                }
                if ($editIntroduce) {
                    \Session::flash('alert-success', 'Sửa Bài Viết Thành Công');
                } else {
                    \Session::flash('alert-warning', 'Sửa Bài Viết Lỗi');
                }
            } else {
                $products = DucGiong::create();
                for ($i=0 ; $i<2; $i++) {
                    $saveIntroduce = DucGiongLanguages::create([
                        'duc_giong_id' => $products['id'],
                        'languages_id' => $i+1,
                        'content' => $request['content'][$i]
                    ]);
                }
                if ($saveIntroduce) {
                    \Session::flash('alert-success', 'Tạo Bài Viết Thành Công');
                } else {
                    \Session::flash('alert-warning', 'Tạo Bài Viết Lỗi');
                }
            }
            DB::commit();

        } catch (\Exception $e) {
            DB::rollback();
        }

        return redirect()->route('index_duc_giong');
    }

    public function saveVacXinOie(SaveIntroducesRequest $request)
    {
        DB::beginTransaction();
        try {
            if (!empty($request['id'][0]) || !empty($request['id'][1])) {
                for ($i=0 ; $i<2; $i++) {
                    $editIntroduce = VacXinOieLanguages::where('id', $request['id'][$i])->update([
                        'content' => $request['content'][$i]
                    ]);
                }
                if ($editIntroduce) {
                    \Session::flash('alert-success', 'Sửa Bài Viết Thành Công');
                } else {
                    \Session::flash('alert-warning', 'Sửa Bài Viết Lỗi');
                }
            } else {
                $products = VacXinOie::create();
                for ($i=0 ; $i<2; $i++) {
                    $saveIntroduce = VacXinOieLanguages::create([
                        'vac_xin_oie_id' => $products['id'],
                        'languages_id' => $i+1,
                        'content' => $request['content'][$i]
                    ]);
                }
                if ($saveIntroduce) {
                    \Session::flash('alert-success', 'Tạo Bài Viết Thành Công');
                } else {
                    \Session::flash('alert-warning', 'Tạo Bài Viết Lỗi');
                }
            }
            DB::commit();

        } catch (\Exception $e) {
            DB::rollback();
        }

        return redirect()->route('index_vac_xin_oie');
    }

    public function saveVacXinFmd(SaveIntroducesRequest $request)
    {
        DB::beginTransaction();
        try {
            if (!empty($request['id'][0]) || !empty($request['id'][1])) {
                for ($i=0 ; $i<2; $i++) {
                    $editIntroduce = VacXinFmdLanguages::where('id', $request['id'][$i])->update([
                        'content' => $request['content'][$i]
                    ]);
                }
                if ($editIntroduce) {
                    \Session::flash('alert-success', 'Sửa Bài Viết Thành Công');
                } else {
                    \Session::flash('alert-warning', 'Sửa Bài Viết Lỗi');
                }
            } else {
                $products = VacXinFmd::create();
                for ($i=0 ; $i<2; $i++) {
                    $saveIntroduce = VacXinFmdLanguages::create([
                        'vac_xin_fmd_id' => $products['id'],
                        'languages_id' => $i+1,
                        'content' => $request['content'][$i]
                    ]);
                }
                if ($saveIntroduce) {
                    \Session::flash('alert-success', 'Tạo Bài Viết Thành Công');
                } else {
                    \Session::flash('alert-warning', 'Tạo Bài Viết Lỗi');
                }
            }
            DB::commit();

        } catch (\Exception $e) {
            DB::rollback();
        }

        return redirect()->route('index_vac_xin_fmd');
    }
}
