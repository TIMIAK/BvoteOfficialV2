<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'fullname' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ];
    }
    public function messages(){
        return [
            'fullname.required' => 'Your Name is required!!',
            'email.required' => 'Your Email Address is Required!!',
            'email.email' => 'Please Enter a valid Email Address!!',
            'subject' => 'Subject Field is Required',
            'message.required' => 'Message field is required!!',
        ];
    }
}
