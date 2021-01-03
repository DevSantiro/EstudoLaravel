<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeriesFormRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|min:3',
            'qnt_temporadas' => 'required',
            'ep_por_temporada' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo nome é obrigatório.',
            'nome.min' => 'O campo nome precisa ter ao menos 3 caracteres.',
            'qnt_temporadas.required' => 'Quantidade de temporadas é um campo obrigatório',
            'ep_por_temporada.required' => 'Número de episódios é um campo obrigatório'
        ];
    }

    
}
