<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\EditSlidersRequest;
use App\Http\Requests\SaveSliderRequest;
use App\Models\Sliders;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SlidersController extends Controller
{
    public function registerSlider()
    {
        return view('admin.sliders.register_sliders');
    }

    public function saveSlider(SaveSliderRequest $request)
    {
        $image = $request->file('fileToUpload');
        $filename = time() . '.' . $image->extension();
        $image->move('upload/', $filename);

        $saveImage = Sliders::create([
            'image' => $filename,
            'url' => $request['url'],
        ]);
        if ($saveImage) {
            \Session::flash('alert-success', 'Tạo Slider Thành Công');
        } else {
            \Session::flash('alert-warning', 'Tạo Slider Lỗi');
        }

        return redirect()->route('list_slider');
    }

    public function listSlider()
    {
        $images = Sliders::all();

        return view('admin.sliders.list_sliders', [
            'images' => $images
        ]);
    }

    public function showEditSlider($id)
    {
        $image = Sliders::find($id);

        if (isset($image) && !empty($image)) {
            return view('admin.sliders.show_edit_sliders', [
                'image' => $image
            ]);
        }
        return redirect()->route('list_slider');
    }

    public function editSlider(EditSlidersRequest $request)
    {
        if (!empty($request->file('fileToUpload'))) {
            $image = $request->file('fileToUpload');
            $filename = time() . '.' . $image->extension();
            $image->move('upload/', $filename);
        } else {
            $editImage = Sliders::where('id', $request['image_id'])->first();
            $filename = $editImage['image'];
        }

        $productEdit = Sliders::where('id', $request['image_id'])
            ->update([
                'image' => $filename,
                'url' => $request['url']
            ]);
        if ($productEdit) {
            \Session::flash('alert-success', 'Sửa Slider Thành Công');
        } else {
            \Session::flash('alert-warning', 'Sửa Slider Lỗi');
        }
        return redirect()->route('list_slider');
    }

    public function deleteSlider($id)
    {
        $image = Sliders::find($id);
        $delete = $image->delete();
        if ($delete) {
            \Session::flash('alert-success', 'Xoá Slider Thành Công');
        } else {
            \Session::flash('alert-warning', 'Xoá Slider Lỗi');
        }
        return redirect()->route('list_slider');
    }
}
