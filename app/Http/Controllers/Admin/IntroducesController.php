<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SaveHotelRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\SaveIntroducesRequest;
use App\Models\Introduces;
use App\Models\IntroducesLanguages;
use Illuminate\Support\Facades\DB;

class IntroducesController extends Controller
{
    public function indexHistory()
    {
        $introduces = IntroducesLanguages::all();
        return view('admin.introduces.indexHistory', [
            'introduces' => $introduces
        ]);
    }

    public function indexMission()
    {
        $introduces = IntroducesLanguages::all();
        return view('admin.introduces.indexMission', [
            'introduces' => $introduces
        ]);
    }

    public function indexVision()
    {
        $introduces = IntroducesLanguages::all();
        return view('admin.introduces.indexVision', [
            'introduces' => $introduces
        ]);
    }

    public function saveIntroduces(SaveIntroducesRequest $request)
    {
        DB::beginTransaction();
        try {
            if (!empty($request['id'][0]) || !empty($request['id'][1])) {
                for ($i=0 ; $i<2; $i++) {
                    $editIntroduce = IntroducesLanguages::where('id', $request['id'][$i])->update([
                        'content' => $request['content'][$i]
                    ]);
                }
                if ($editIntroduce) {
                    \Session::flash('alert-success', 'Sửa Giới Thiệu Thành Công');
                } else {
                    \Session::flash('alert-warning', 'Sửa Giới Thiệu Lỗi');
                }
            } else {
                $products = Introduces::create();
                for ($i=0 ; $i<2; $i++) {
                    $saveIntroduce = IntroducesLanguages::create([
                        'introduces_id' => $products['id'],
                        'languages_id' => $i+1,
                        'content' => $request['content'][$i]
                    ]);
                }
                if ($saveIntroduce) {
                    \Session::flash('alert-success', 'Tạo Giới Thiệu Thành Công');
                } else {
                    \Session::flash('alert-warning', 'Tạo Giới Thiệu Lỗi');
                }
            }
            DB::commit();

        } catch (\Exception $e) {
            DB::rollback();
        }

        return redirect()->route('introduces');
    }
}
