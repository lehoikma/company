<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CategoriesImages;
use App\Models\Images;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listImage()
    {
        $listImage = Images::all();
        $categoryImage = CategoriesImages::all();
        return view('user.image.list_image',[
            'listImage' => $listImage,
            'categoryImage' => $categoryImage,
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
