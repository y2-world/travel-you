<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'category_id' => 'required',
            'body' => 'required',
        ];
    }

    public function messages()
{
    return [
        'title.required' => 'タイトルは必須です。',
        'category_id.required'      => 'カテゴリーは必須です。',
        'body.required'  => '本文は必須です。',
    ];
}
}
