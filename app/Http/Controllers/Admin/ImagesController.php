<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\EditImagesRequest;
use App\Http\Requests\SaveCategoryImageRequest;
use App\Http\Requests\SaveImageRequest;
use App\Models\CategoriesImages;
use App\Models\Images;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ImagesController extends Controller
{
    public function createCategoryImage()
    {
        $categoriesImage = CategoriesImages::all();
        return view('admin.images.create_category_image',[
            'categoriesImage' => $categoriesImage
        ]);
    }

    public function saveCategoryImage(SaveCategoryImageRequest $request)
    {
        $image = $request->file('fileToUpload');
        $filename = time() . '.' . $image->extension();
        $image->move('upload/', $filename);

        CategoriesImages::create([
            'name' => $request['name_category_image'],
            'slug' => str_slug($request['name_category_image']),
            'image' => $filename
        ]);
        return redirect()->route('create_category_image');
    }

    public function deleteCategoryImage($id)
    {
        $categoryProduct = CategoriesImages::find($id);

        $categoryProduct->delete();

        return redirect()->route('create_category_image');
    }

    public function showEditCategoryImage($id)
    {
        $categoryImage = CategoriesImages::where('id', $id)->first();
        if (empty($categoryImage)) {
            return redirect()->route('admin_top');
        }
        $categoryImages = CategoriesImages::all();
        return view('admin.images.edit_category_image', [
            'categoryImages' => $categoryImages,
            'categoryImage' => $categoryImage
        ]);
    }

    public function editCategoryImage(Request $request)
    {
        if (!empty($request->file('fileToUpload'))) {
            $image = $request->file('fileToUpload');
            $filename = time() . '.' . $image->extension();
            $image->move('upload/', $filename);
        } else {
            $editImage = Images::where('id', $request['image_id'])->first();
            $filename = $editImage['image'];
        }

        $categoryProduct = CategoriesImages::where('id', $request['id_category_image'])->first();
        if (empty($categoryProduct)) {
            return redirect()->route('admin_top');
        }
        CategoriesImages::where('id', $request['id_category_image'])
            ->update([
                'name' => $request['name_category_image'],
                'image' => $filename
            ]);

        return redirect()->route('create_category_image');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function registerImage()
    {
        $categoriesImages = CategoriesImages::all();
        return view('admin.images.register_image',[
            'categoriesImages' => $categoriesImages
        ]);
    }

    public function saveImage(SaveImageRequest $request)
    {
        $image = $request->file('fileToUpload');
        $filename = time() . '.' . $image->extension();
        $image->move('upload/', $filename);

        $saveImage = Images::create([
            'category_image_id' => $request['select_cate_image'],
            'image' => $filename,
            'description' => $request['description']
        ]);
        if ($saveImage) {
            \Session::flash('alert-success', 'Tạo Hình Ảnh Thành Công');
        } else {
            \Session::flash('alert-warning', 'Tạo Hình Ảnh Lỗi');
        }

        return redirect()->route('list_images');
    }

    public function listImage()
    {
        $images = DB::table('images')
            ->where('images.deleted_at', null)
            ->leftJoin('categories_images', 'categories_images.id', '=', 'images.category_image_id')
            ->select('images.*', 'categories_images.name as categories_image_name')
            ->get();

        return view('admin.images.list_image', [
            'images' => $images
        ]);
    }

    public function showEditImage($id)
    {
        $image = Images::find($id);

        if (isset($image) && !empty($image)) {
            $categoriesImages = CategoriesImages::all();
            return view('admin.images.show_edit_image', [
                'image' => $image,
                'categoriesImages' => $categoriesImages
            ]);
        }
        return redirect()->route('list_images');
    }

    public function editImage(EditImagesRequest $request)
    {
        if (!empty($request->file('fileToUpload'))) {
            $image = $request->file('fileToUpload');
            $filename = time() . '.' . $image->extension();
            $image->move('upload/', $filename);
        } else {
            $editImage = Images::where('id', $request['image_id'])->first();
            $filename = $editImage['image'];
        }

        $productEdit = Images::where('id', $request['image_id'])
            ->update([
                'category_image_id' => $request['select_cate_image'],
                'image' => $filename,
                'description' => $request['description']
            ]);
        if ($productEdit) {
            \Session::flash('alert-success', 'Sửa Hình Ảnh Công Ty Thành Công');
        } else {
            \Session::flash('alert-warning', 'Sửa Hình Ảnh Công Ty Lỗi');
        }
        return redirect()->route('list_images');
    }

    public function deleteImage($id)
    {
        $image = Images::find($id);
        $delete = $image->delete();
        if ($delete) {
            \Session::flash('alert-success', 'Xoá Hình Ảnh Thành Công');
        } else {
            \Session::flash('alert-warning', 'Xoá Hình Ảnh Lỗi');
        }
        return redirect()->route('list_images');
    }
}
