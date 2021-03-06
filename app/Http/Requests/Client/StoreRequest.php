<?php

namespace App\Http\Requests\Client;

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
            'name' => 'required|string',
            'dni'  => 'required|string|max:8|unique:clients',
            'ruc'  => 'required|string|max:11|unique:clients' ,
            'address' => 'required',
            'phone'   => 'required|max:9|string' ,
            'email'   => 'required|email|unique:clients'
        ];
    }
}
