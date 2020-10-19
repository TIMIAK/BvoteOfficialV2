<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangePassword extends FormRequest
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
            'OldPassword' => 'required|string',
            'password' => 'required|min:8|string',
            'password_confirmation' => 'required|same:password|string',
        ];
    }
    public function messages()
    {
        return [
            'OldPassword.required' => 'Enter your Old Password',
            'OldPassword.password' => 'Enter a Valid Password',
            'password_confirmation.same' => 'Passwords do not Match'
        ];
    }
}
