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
//            'fileToUpload' => 'required | mimes:jpeg,jpg,png'
        ];
    }

    public function messages()
    {
        return [
            'title_news.required' => 'Vui l«Òng nh?p t«´n tin t?c ',
            'content_news.required' => 'Vui l«Òng nh?p m«Ô t? tin t?c ',
//            'fileToUpload.required' => 'Vui l«Òng ch?n h«Ành ?nh ©Â?i di?n cho s?n ph?m',
//            'fileToUpload.mimes' => 'Vui l«Òng ch?n h«Ành l?i ©Â?nh d?ng file ?nh',
        ];

    }

}

