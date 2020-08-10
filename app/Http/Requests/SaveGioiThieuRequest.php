<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SaveGioiThieuRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {

        return [
            'content.0' => 'required',
            'videos' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'content.0.required' => 'Vui lòng nhập nội dung',
            'videos.required' => 'Vui lòng nhập nội dung videos',
        ];

    }

}

