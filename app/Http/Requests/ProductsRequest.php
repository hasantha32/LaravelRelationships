<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductsRequest extends FormRequest
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
            //
            'name'=>['required'],
            'price'=>['required', 'numeric', 'between:0,100'],
            'quantity'=>['required', 'numeric', 'between:0,100'],
            'image'=> ['required'],
        ];
    }
    //return custom messages
    public function messages()
    {
        return[
            'name.required'=>'please enter the name',
        ];
    }
}
