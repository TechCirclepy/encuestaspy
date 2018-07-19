<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpresaFormRequest extends FormRequest
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
            //
            'name' => 'required|string|max:25',
            'email' => 'string|email|max:100|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'telefono'=>'required|max:15|unique:users',
            'foto'=>'mimes:jpeg,bmp,png|max:2000',
        ];
    }
}
