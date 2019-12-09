<?php

namespace codeDelivery\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminCategoryRequest extends FormRequest
{
 
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required'
        ];
    }
     public function messages(){
         return [
            'name.required' => 'O campo nome é obrigatório',
        ];
    }

}
