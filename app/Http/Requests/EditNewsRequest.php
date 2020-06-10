<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EditNewsRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {

        return [
            'title_news' => 'required',
            'content_news' => 'required',
            'description_news' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title_news.required' => 'Vui lòng nhập tên tin tức',
            'content_news.required' => 'Vui lòng nhập nội dung tin tức ',
            'description_news.required' => 'Vui lòng nhập mô tả tin tức ',
        ];

    }

}

