<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $password = 'required|same:confirm_password|min:8';
        $confirm_password = 'required|min:8';
        $email = 'required|email|unique:users,email';
        if(request()->isMethod('put')){
            $password = 'nullable|same:confirm_password|min:8';
            $confirm_password = 'nullable|min:8';
            $email = 'required|email';
        }
        return [
            'name' => 'required|string|max:20',
            'email' => $email,
            'role' => 'required|string',
            'pds_id' => 'nullable|max:50',
            'phone' => 'nullable|min:11|max:11',
            'address' => 'nullable|string|max:200',
            'password' => $password,
            'confirm_password' => $confirm_password
        ];
    }
}
