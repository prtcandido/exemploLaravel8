<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FuncionarioRequest extends FormRequest
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
                'nome' => 'required|max:100',    // nome obrigatório e no máximo 100 caracteres
                'endereco' => 'required|max:100', // endereço obrigatório e no máximo 100 caracteres
                'departamento_id' => 'required|exists:departamentos,id',
                'datanascimento' => 'required|date',
            ];
    }

    public function messages()
    {
        return [
                'nome.*' => 'Nome é obrigatório de tamanho máximo de 100 caracteres',
                'endereco.required' => 'Endereço é obrigatório',
                'endereco.max' => 'Endereço deve ter tamanho máximo de 100 caracteres',
                'departamento_id' => 'Departamento inválido',
            ];
    }
}
