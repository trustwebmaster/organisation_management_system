<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemberStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
            'national_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'first_name' => "First Name is required",
            'last_name' => "Last Name is required",
            'email' => "Email is required",
            'address' => "Address is required",
            'phone_number' => "Phone Number is required",
            'national_id' => "National Id is required"
        ];
    }
}
