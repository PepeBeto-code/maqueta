<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BackRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
             'username' => 'required|min:5',
             'phone' => 'required|min:10',
             'email' => 'required|email|unique:forms',
        ];
    }

       /**
     * @return string[]
     */
    public function messages(): array
    {
        return [
            'username.required' => 'El campo nombre es requerido.',
            'username.min' => 'El campo nombre debe tener como minimo 5 caracteres.',
            'phone.required' => 'Se requiere de un telefono.',
            'phone.min' => 'El telefono debe tener como minimo 10 caracteres.',
            'email.required' => 'Se requiere de un correo electronico.',
            'email.email' => 'Se requiere de un correo electronico valido.',
            'email.unique' => 'El correo electronico introducido ya esta en uso..',

        ];
    }
}
