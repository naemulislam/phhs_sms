<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
        return [
            'name_e' => 'required|string|max:150',
            'name_b' => 'required|string|max:150',
            'email' => 'nullable|email',
            'phone' => 'nullable|min:11|max:11',
            'web_address' => 'nullable|string|max:100',
            'total_t' => 'nullable|max:50',
            'total_s' => 'nullable|max:50',
            'total_c' => 'nullable|max:50',
            'total_l' => 'nullable|max:50',
            'address' => 'nullable|string|max:255',
            'facebook' => 'nullable|string|max:100',
            'youtube' => 'nullable|string|max:100',
            'twitter' => 'nullable|string|max:100',
            'instagram' => 'nullable|string|max:100',
            'image' => 'nullable|mimes:png,jpg,jpeg',
        ];
    }
}
