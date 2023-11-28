<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

     #validações
    public function rules(): array {
        return [
            'email' => 'required',
            'password' => 'required',
        ];
    }

    #personalizar mensagens
    public function messages(): array {
        return [
            'email.required' => 'O email é obrigatório',
            'password.required' => 'A senha é obrigatória',
        ];
    }
}
