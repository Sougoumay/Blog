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
            'start_date'=>'date|dateFormat:Y-m-d',
            'end_date'=>'date|after:start_date|dateFormat:Y-m-d',
            'institute'=>'string',
            'country'=>'string|min:3',
            'city'=>'string|min:2'
        ];
    }
}
