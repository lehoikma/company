<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SaveIntroducesRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {

        return [
            'content.0' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'content.0.required' => 'Vui lòng nhập giới thiệu',
        ];

    }

}

