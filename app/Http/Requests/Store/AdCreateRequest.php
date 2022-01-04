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
            'started_date' => ['required', 'date'],
            'ended_date' => 'required|date|after:started_date',
            'product_id' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'タイトルフィールドは必須です。',
            'content.required' => '内容フィールドは必須です。',
            'started_date.required' => '始める時間フィールドは必須です。',
            'ended_date.required' => '終わり時間フィールドは必須です。',
            'ended_date.after' => '「終わり時間」は「始める時間」より後でなければなりません。',
            'product_id.required' => '商品フィールドは必須です。',
        ];
    }
}