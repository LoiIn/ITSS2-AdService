<?php

namespace App\Http\Requests\Store;

use App\Http\Requests\Request;

class AdCreateRequest extends Request
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
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required'],
            'started_date' => ['required', 'string'],
            'ended_date' => ['required', 'string'],
            'product_id' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'タイトルフィールドは必須です。',
            'content.required' => '内容フィールドは必須です。',
            'started_date.required' => '開始日フィールドは必須です。',
            'ended_date.required' => '終了日フィールドは必須です。',
            'product_id.required' => '商品フィールドは必須です。',
        ];
    }
}