<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SectionFormRequest extends FormRequest
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
            'name' => 'required|min:3'
        ];
    }

    public function messages()
    {
        return ['name.required' => 'Campo sessão é obrigatorio!',
                'name.min' => 'Sessão deve conter no minimo 3 letras!'];
    }
}
