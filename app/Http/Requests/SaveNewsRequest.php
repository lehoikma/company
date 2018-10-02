<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SaveNewsRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {

        return [
            'title_news.0' => 'required',
            'title_news.1' => 'required',
            'content_news.0' => 'required',
            'content_news.1' => 'required',
            'select_cate_news' => 'required',
            'fileToUpload' => 'required | mimes:jpeg,jpg,png'
        ];
    }

    public function messages()
    {
        return [
            'title_news.0.required' => 'Vui lòng nhập tên tin tức Tiếng Việt ',
            'title_news.1.required' => 'Vui lòng nhập tên tin tức Tiếng Anh',
            'select_cate_news.required' => 'Vui lòng nhập danh mục tin tức ',
            'content_news.0.required' => 'Vui lòng nhập mô tả tin tức Tiếng Việt ',
            'content_news.1.required' => 'Vui lòng nhập mô tả tin tức Tiếng Anh ',
            'fileToUpload.required' => 'Vui lòng chọn hình ảnh đại diện cho tin tức ',
            'fileToUpload.mimes' => 'Vui lòng chọn đúng định dạng file ảnh',
        ];

    }

}

