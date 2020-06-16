<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EditSlidersRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {

        return [
            'fileToUpload' => 'mimes:jpeg,jpg,png,gif',
        ];
    }

    public function messages()
    {
        return [
            'fileToUpload.mimes' => 'Vui lòng chọn đúng định dạng file ảnh',
        ];

    }

}

