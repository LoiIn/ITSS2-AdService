<?php

namespace App\Http\Requests\Store;

use App\Http\Requests\Request;

class RegisterRequest extends Request
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
            'email' => ['required', 'string', 'max:255', 'unique:stores,email'],
            'name' => ['required'],
            'address' => ['required'],
            'phone' => ['required'],
            'password' => ['required', 'min:6', 'confirmed'],
            'logo' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'メールフィールドは必須です。',
            'email.unique' => 'すでに使用中のメール。',
            'name.required' => '名前フィールドは必須です。',
            'address.required' => 'アドレスフィールドは必須です。',
            'phone.required' => '電話番号フィールドは必須です。',
            'password.required' => 'パスワードフィールドは必須です。',
            'password.confirmed' => 'パスワードが違います。',
            'password.min' => 'パスワードは最低でも6文字必要です。',
            'logo.required' => 'ロゴフィールドは必須です。',
        ];
    }
}