<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeUpdateEnviromentsEquipmentsFormResquest extends FormRequest
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
            'nomeAmbiente' => [
                'required',
                'string',
                'unique:ambiente',
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
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function messages()
    {
        return [
            'nomeAmbiente.required' => 'O campo é obrigatório',
            'nomeAmbiente.unique' => 'Um recurso com esse nome já está cadastrado!',
        ];
    }                
}
