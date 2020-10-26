<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class DauGiaRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {

        return [
            'title' => 'required',
            'content' => 'required',
            'price' => 'required',
            'start_date'    => 'required|date_format:d/m/Y H:i',
            'end_date'      => 'required|date_format:d/m/Y H:i|after_or_equal:start_date',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Vui lòng nhập tên',
            'content.required' => 'Vui lòng nhập nội dung',
            'price.required' => 'Vui lòng nhập giá',
            'start_date.required' => 'Vui lòng nhập ngày bắt đầu',
            'end_date.required' => 'Vui lòng nhập ngày kết thúc',
            'end_date.after_or_equal' => 'Ngày kết thúc phải lớn hơn ngày bắt đầu'
        ];

    }

}

