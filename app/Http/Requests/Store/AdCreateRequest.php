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
            'ended_date' => ['required', 'string'] 
        ];
    }
}