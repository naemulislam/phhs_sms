<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommitteeRequest extends FormRequest
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
            'name'=> 'required|max:30',
            'email'=> 'nullable|email',
            'phone'=> 'required|max:11',
            'nid'=> 'required|max:10',
            'designation'=> 'required',
            'date_of_birth'=> 'nullable',
            'religion'=> 'required',
            'gender'=> 'required',
            'join_date'=> 'required',
            'address'=> 'required',
            'image'=> 'nullable|mimes:png,jpg,jpeg'
        ];
    }
}
