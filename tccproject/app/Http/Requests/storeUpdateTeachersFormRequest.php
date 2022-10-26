<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class storeUpdateTeachersFormRequest extends FormRequest
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
                Rule::unique('professor')->ignore($this->id),
                'max:191',
            ],
            'disciplina' => [
                'required',
                'string',
                'max:191'
            ], 
            'acesso' => [
                'required',
                'int',
                'regex:/^[0-1]*$/'
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
            'nome.required' => 'O nome do professor é obrigatório!',
            'nome.max' => 'O limite é de 191 caracteres para o nome do professor!',
            'sobrenome.required' => 'O sobrenome do professor é obrigatório!',
            'sobrenome.max' => 'O limite é de 191 caracteres para o sobrenome do professor!',
            'email.required' => 'O email do professor é obrigatório!',
            'email.unique' => 'Um professor com esse email já está cadastrado!',
            'email.max' => 'O limite é de 191 caracteres para o email do professor!',
            'disciplina.required' => 'A disciplina que o professor leciona é obrigatória!',
            'disciplina.max' => 'O limite é de 191 caracteres para a disciplina do professor!',
            'acesso.required' => 'O acesso do professor é obrigatório!',
            'acesso.regex' => 'Erro no regex',
        ];
    }   
}
