<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ContentFormRequest extends FormRequest
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
            'title' => 'required|min:3',
            'content' => 'required|min:3'
            // 'category' => 'required'
        ];
    }

    public function messages()
    {
        return ['title.required' => 'Campo título é obrigatorio!',
                'title.min' => 'Titulo deve conter no minimo 3 letras!',
                'content.required' => 'Campo conteúdo é obrigatorio!',
                'content.min' => 'Conteúdo deve conter no minimo 3 letras!',
                // 'category.required' => 'Campo categoria é obrigatorio!',
        ];
    }
}
