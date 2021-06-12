<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfesionesRequest extends FormRequest
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
            'nombre'=>'required|max:100|min:4',
        ];
    }
    public function messages()
    {
        return [
            'nombre.required'=>"El campo nombre es requerido.",
            'nombre.min'=>"El campo nombre debe tener 4 caracteres minimo."
        ];
    }
}
