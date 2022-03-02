<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AcademicRequest extends FormRequest
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
            'start_date'=>'string|max:4|min:4',
            'end_date'=>'string|max:4|min:4',
            'institute'=>'string',
            'country'=>'string|min:3',
            'city'=>'string|min:2'
        ];
    }
}
