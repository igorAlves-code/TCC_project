<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeUpdateEquipmentsFormRequest extends FormRequest
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
            'nomeEquipamento' => [
                'required',
                'string',
                'unique:equipamento',
                'max:191'
            ], 
            'tipoEquipamento' => [
                'required',
                'string',
                'max:191'
            ], 
            'quantidadeEquipamento' => [
                'required',
                'int'
            ],'id'
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
            'nomeEquipamento.required' => 'O campo é obrigatório',
            'nomeEquipamento.unique' => 'Um recurso com esse nome já está cadastrado!',
        ];
    }   
}
