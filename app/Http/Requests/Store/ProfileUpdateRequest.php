<?php

namespace App\Http\Requests\Store;

use App\Http\Requests\Request;

class ProfileUpdateRequest extends Request
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
            // 'email' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            // 'phone' => ['required', 'string', 'max:20'],
            // 'address' => ['required', 'string'],
        ];
    }

    public function messages()
    {
        return [
            // 'email.required' => 'メールは必須です。',
            'name.required' => '名前は必須です。',
            // 'phone.required' => '電話番号は必須です。',
            // 'address.required' => '場所は必須です。',
        ];
    }
}