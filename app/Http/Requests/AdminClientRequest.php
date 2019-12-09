<?php

namespace codeDelivery\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminClientRequest extends FormRequest
{
 
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
        ];
    }
     public function messages(){
         return [
        ];
    }

}
