<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CategoriesImages;
use App\Models\Images;
use Illuminate\Support\Facades\DB;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listImage()
    {
        $categoryImage = CategoriesImages::orderBy('created_at', 'desc')->paginate(18);

        return view('user.image.list_image',[
            'categoryImage' => $categoryImage
        ]);
    }

    public function detailImage($title, $id) {
        $images = Images::where('category_image_id', $id)->orderBy('created_at', 'desc')->get();
        $titles = CategoriesImages::where('id', $images[0]['category_image_id'])->first();
        return view('user.image.detail_image',[
            'images' => $images,
            'title' => $titles['name']
        ]);
    }

    public function mobileListImages()
    {
        $listImage = Images::all();
        $categoryImage = CategoriesImages::all();
        return view('list_image',[
            'listImage' => $listImage,
            'categoryImage' => $categoryImage,
        ]);
    }
}
