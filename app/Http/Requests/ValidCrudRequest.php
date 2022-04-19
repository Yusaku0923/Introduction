<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidCrudRequest extends FormRequest
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
            'name' => 'required|min:2|max:64',
            'email' => 'required',
            'tel' => 'required',
            'message' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'お名前',
            'email' => 'メールアドレス',
            'tel' => '電話番号',
            'message' => 'メッセージ',
        ];
    }
}
