<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class adminProfileRequest extends FormRequest
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
            'company_name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'user_image' => 'mimes:jpeg,png,jpg|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'company_name' => "Please enter company name",
            'email'         => "Please enter email",
            'mobile' => "Please enter company mobile",
            'user_image.mimes' => "Only .jpg, .jpeg, .png extension allowed",
        ];
    }
}
