<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;


class FornecedorFormRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.  $this->id,
            'type_person' => 'required',
            'cell_phone' => 'required',
            'id_activity' => 'required',
            'cep' => 'required',
            'street' => 'required',
            'number' => 'required',
            'id_city' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nome é obrigatório!',
            'email.required' => 'E-mail é obrigatório!',
            'email.email' => 'Digite um E-mail válido!',
            'email.unique' => 'E-mail já cadastrado!',
            'type_person.required' => 'Selecione o tipo de pessoa!',
            'cell_phone.required' => 'Celular é obrigatório!',
            'id_activity.required' => 'Selecione a atividade!',
            'cep.required' => 'CEP é obrigatório!',
            'street.required' => 'Rua é obrigatório!',
            'number.required' => 'Número é obrigatório!',
            'id_city.required' => 'Cidade é obrigatório!'
        ];
    }
}