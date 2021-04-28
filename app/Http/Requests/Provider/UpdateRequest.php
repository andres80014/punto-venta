<?php

namespace App\Http\Requests\Provider;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name'       => 'required|max:50|string',
            'email'      => 'required|max:50|email|string|unique:providers,email,'.$this->route('provider')->id,
            'ruc_number' => 'required|max:50|min:8|string|unique:providers,ruc_number'.$this->route('provider')->id,
            'address'    => 'nullable|max:50|string',
            'phone'      => 'required|max:20|string|min:3|unique:providers,phone'.$this->route('provider')->id,
        ];
    }
}
