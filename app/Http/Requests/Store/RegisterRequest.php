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
        ];
    }
}