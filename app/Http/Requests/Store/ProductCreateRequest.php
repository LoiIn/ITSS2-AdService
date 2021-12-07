<?php

namespace App\Http\Requests\Store;

use App\Http\Requests\Request;

class ProductCreateRequest extends Request
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
            'title' => ['required', 'string', 'max:255', 'unique:products,title'],
            'categories' => ['required'],
            'image' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'タイトルフィールドは必須です。',
            'title.unique' => '製品名を同じにすることはできません。',
            'categories.required' => 'カテゴリーフィールドは必須です。',
            'image.required' => 'イメージフィールドは必須です。',
        ];
    }
}