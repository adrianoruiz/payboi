<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CategoryFormRequest extends FormRequest
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
            'name' => 'required|min:3',
            'section_id' => 'required'
        ];
    }

    public function messages()
    {
        return ['name.required' => 'Campo categoria é obrigatorio!',
                'name.min' => 'Categoria deve conter no minimo 3 letras!',
                'section_id.required' => 'Campo sessão é obrigatorio!'
        ];
    }
}
