<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class agendamentosRequest extends FormRequest
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
            'start' =>'after:today | before:21days',
            'retirada' =>'lte:devolucao',
            'devolucao' =>'gte:retirada',
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
            'start.after' => 'Não é permitido agendar antes da data atual.',
            'start.before' => 'Não é permitido agendar para mais de 21 dias após a data atual.',
            'retirada.lte' => 'A aula de retirada deve ser anterior a de devolução.',
            'devolucao.gte' => 'A aula de devolução deve ser posterior a de retirada.',
        ];
    }                
}
