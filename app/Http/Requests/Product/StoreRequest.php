<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name'        => 'required|unique:products|max:255',
            'image'       => 'required|dimensions:min_width=100,min_height=200',
            'sell_price'  => 'required',
            'category_id' => 'required|integer|exists:App\Category,id',
            'provider_id' => 'required|integer|exists:App\Provider,id'
        ];
    }
}
