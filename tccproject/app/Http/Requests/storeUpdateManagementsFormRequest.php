<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class storeUpdateManagementsFormRequest extends FormRequest
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
            'nome' => [
                'required',
                'string',
                'max:191'
            ], 
            'sobrenome' => [
                'required',
                'string',
                'max:191'
            ], 
            'email' => [
                'required',
                Rule::unique('users')->ignore($this->id),
                'max:191',
            ],
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
            'nome.required' => 'O nome do coordenador é obrigatório!',
            'nome.max' => 'O limite é de 191 caracteres para o nome do coordenador!',
            'sobrenome.required' => 'O sobrenome do coordenador é obrigatório!',
            'sobrenome.max' => 'O limite é de 191 caracteres para o sobrenome do coordenador!',
            'email.required' => 'O email do coordenador é obrigatório!',
            'email.unique' => 'Um usuário com esse email já está cadastrado!',
            'email.max' => 'O limite é de 191 caracteres para o email do coordenador!',
        ];
    }   
}
