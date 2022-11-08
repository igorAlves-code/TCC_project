<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class resetPasswordRequest extends FormRequest
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
        $rules = [
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8', 
        ];

        return $rules;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function messages()
    {
        return [
            'email.required' => 'O email é obrigatório!',
            'email.email' => 'O email não é válido!',
            'password.required' => 'A senha é obrigatória!',
            'password.min' => 'A senha deve conter no mínimo 8 caracteres!',
        ];
    }                
}
