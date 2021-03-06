<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        $rules = [
            'code'    => 'required|regex:/^[0-9]+$/|max:20|unique:products',
            'name'    => 'required|max:50',
            'd_begin' => 'required|date',
            'd_end'   => 'required|date',
        ];

        if ($this->product) {
            $key = $this->product->getKey();
            $rules['code'] .= ',code,' . $key;
        }

        return $rules;
    }

    /*public function messages()
    {
        return [
            'name.required' => 'A name is required',
        ];
    }*/

    public function attributes()
    {
        $product = new \App\Product;
        return $product->getColumnsTranslate();
    }

}
