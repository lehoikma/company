<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SaveSliderRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {

        return [
            'fileToUpload' => 'required | mimes:jpeg,jpg,png,gif'
        ];
    }

    public function messages()
    {
        return [
            'fileToUpload.required' => 'Vui lòng chọn slider',
            'fileToUpload.mimes' => 'Vui lòng chọn đúng lại định dạng file ảnh',
        ];

    }

}

