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
             'username' => 'required',  
             'email' => 'required|email|unique:register',       
             'password' => 'required|min:5',       
     
        ];
    }

       /**
     * @return string[]
     */
    public function messages(): array
    {
        return [
            'username.required' => 'El usuario es requerido.',
            'email.required' => 'El Correo es requerido.',
            'password.required' => 'El password es requerido.',
            'password.min' => 'La contraseña debe tener alemnos 5 caracteres.',
            'email.email' => 'El email no es valido.',
            'email.unique' => 'El email ya existe',
        ];
    }
}
