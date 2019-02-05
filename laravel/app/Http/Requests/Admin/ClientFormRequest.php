<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;


class ClientFormRequest extends FormRequest
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
            'email' => 'required|email|unique:users,email,'.  $this->id
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nome é obrigatorio!',
            'email.required' => 'E-mail é obrigatorio!',
            'email.email' => 'Digite um E-mail válido!',
            'email.unique' => 'E-mail já cadastrado!'
        ];
    }
}
