<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>['required'],
            'stock'=>['required','in:in stock,out of stock'],
            'price'=>['required','digits_between:2,4']
        ];
    }
    public function messages()
    {
        return [
          'stock.in'=>['the input must be in stock or out of stock']
        ];
    }
}
