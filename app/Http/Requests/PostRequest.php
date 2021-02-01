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
            'diary'  => 'required',
            'image1' => 'required',
            'image2' => 'required',
            'image3' => 'required',
            'image4' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'タイトルは必須です。',
            'date1.required'  => '期間1は必須です。',
            'date2.required'  => '期間2は必須です。',
            'image.required'  => 'カバー写真は必須です。',
            'image.max' => 'ファイルが大きすぎます。',
            'country.required'  => '国は必須です。',
            'city.required'  => '都市は必須です。',
            'diary.required'  => 'ダイアリーは必須です。',
            'image1.required'  => '写真を4枚選択してください (1枚目)',
            'image2.required'  => '写真を4枚選択してください (2枚目)',
            'image3.required'  => '写真を4枚選択してください (3枚目)',
            'image4.required'  => '写真を4枚選択してください (4枚目)',
        ];
    }
}
