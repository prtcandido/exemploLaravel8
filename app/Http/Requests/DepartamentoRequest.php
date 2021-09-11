<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DepartamentoRequest extends FormRequest
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
            'nome' => 'required|max:50',
            'sigla' => 'required|max:3',
            'centroCusto => required|max:30'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Nome é obrigatório',
            'nome.max' => 'Nome máximo 50',
            'sigla.*' => 'Sigla é obrigatória com no máximo 3 caracteres',
            'centroCusto.*' => 'Centro custo é obrigatório com no máximo 30 caracteres'
        ];
    }
}
