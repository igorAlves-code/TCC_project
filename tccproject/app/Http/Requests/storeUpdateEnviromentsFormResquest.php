<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class storeUpdateEnviromentsFormResquest extends FormRequest
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
            'nomeAmbiente' => [
                'required',
                'string',
                Rule::unique('ambiente')->ignore($this->id),
                'max:191'
            ], 
            'tipoAmbiente' => [
                'required',
                'string',
                'max:191'
            ], 
            'quantidadeAmbiente' => [
                'required',
                'int'
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
            'nomeAmbiente.required' => 'O nome do ambiente é obrigatório!',
            'nomeAmbiente.unique' => 'Um ambiente com esse nome já está cadastrado!',
            'nomeAmbiente.max' => 'O limite é de 191 caracteres para o nome do ambiente!',
            'tipoAmbiente.required' => 'O tipo do ambiente é obrigatório!',
            'tipoAmbiente.max' => 'O limite é de 191 caracteres para o tipo do ambiente!',
            'quantidadeAmbiente.required' => 'A quantidade de ambientes é obrigatória!',
        ];
    }                
}
