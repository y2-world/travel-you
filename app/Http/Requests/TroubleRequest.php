<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TroubleRequest extends FormRequest
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
            'country_id' => 'required',
            'content'  => 'required',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'タイトルは必須です。',
            'country_id.required'  => '国は必須です。',
            'content.required'  => '本文は必須です。',
        ];
    }
}
