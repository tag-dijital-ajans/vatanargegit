<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KurumiciformRequest extends FormRequest
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
            'name'=>'required',
            'sicilno'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'mezun'=>'required',
            'fkrad'=>'required',
            'fkrozet'=>'required',

        ];
    }
}
