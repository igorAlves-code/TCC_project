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
                'unique:ambiente',
                'max:191'.$this->route('id')
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

        // $rules = [];
        // foreach($enviroments->rules as $key=>$rule){
        // if(request()->route()->getActionMethod() == "update" && strpos($rule, "unique") !== FALSE)
        //     $rule = "{$rule},{$model->id}";

        // $rules[ $key ] = $rule;
        // }

        // $this->validate($request, $rules); // Mas esse é o correto
     
        // Validator::make($data, [
        //     'nomeAmbiente' => [
        //         'required',
        //         Rule::unique('ambiente')->ignore($enviroments->id),
        //     ],
        // ]);
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
