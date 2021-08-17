<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required',
            'date1' => 'required',
            'date2'  => 'required',
            'image'  => 'required',
            'image' => 'required',
            'country'  => 'required',
            'city'  => 'required',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'タイトルは必須です。',
            'date1.required'  => '期間1は必須です。',
            'date2.required'  => '期間2は必須です。',
            'image.required'  => 'カバー写真は必須です。',
            'country.required'  => '国は必須です。',
            'city.required'  => '都市は必須です。',
        ];
    }
}
