<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RemarkRequest extends FormRequest
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
            'remark'=>'string|required|min:3|max:200',
            'status'=>['string',Rule::in(['pending','approved'])],
            'name'=>'string|required',
            'email'=>'email:dns,rfc|required'
        ];
    }
}
