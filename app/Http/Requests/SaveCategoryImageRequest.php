<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SaveCategoryImageRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {

        return [
            'name_category_image' => 'required',
            'fileToUpload' => 'required | mimes:jpeg,jpg,png,gif'
        ];
    }

    public function messages()
    {
        return [
            'name_category_image.required' => 'Vui lòng chọn nhập tên bài viết',
            'fileToUpload.required' => 'Vui lòng chọn hình ảnh',
            'fileToUpload.mimes' => 'Vui lòng chọn hình lại định dạng file ảnh',
        ];

    }

}

