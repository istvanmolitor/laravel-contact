<?php

namespace IstvanMolitor\LaravelContact\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactSendRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return TRUE;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'email|required',
            'name' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'email' => 'Hibás e-mail cím.',
            'name.required' => 'A név megadása kötelező',
            'phone.required' => 'A telefonszám megadása kötelező',
            'message.required' => 'Az üzenet megadása kötelező',
        ];
    }
}
