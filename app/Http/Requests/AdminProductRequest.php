<?php

namespace codeDelivery\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminProductRequest extends FormRequest
{
 
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category_id' => 'required'
        ];
    }
     public function messages(){
         return [
            'name.required' => 'O campo nome é obrigatório',
            'description.required' => 'O campo descrição é obrigatório',
            'price.required' => 'O campo preço é obrigatório',
            'category_id.required' => 'O campo categoria é obrigatório'
        ];
    }

}
