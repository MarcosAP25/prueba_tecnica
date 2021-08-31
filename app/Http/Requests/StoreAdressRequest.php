<?php

namespace prueba_tecnica\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdressRequest extends FormRequest
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
            'adressID' => 'required',
            'userName' => 'required|exists:customers,userName'
        ];
    }
}
