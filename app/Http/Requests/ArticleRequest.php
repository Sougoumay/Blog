<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    /**
     * Determine if the admin is authorized to make this request.
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
            'title'=>'required|string|min:3',
            'content'=>'required|string|min:30',
            'image'=>'required|file|max:512|mimes:jpg,png,jpeg,bmp',
            'status'=>'required|string',
            'tags'=>'required|string',
            'planned_at'=>'nullable|date|dateFormat:Y-m-d'
        ];
    }
}
