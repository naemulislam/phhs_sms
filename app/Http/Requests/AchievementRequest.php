<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AchievementRequest extends FormRequest
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
        $document = 'required|mimes:png,jpg,jpeg';
        if(request()->isMethod('put')){
            $document = 'nullable|mimes:png,jpg,jpeg';
        }
        return [
            'title' => 'required|string|max:200',
            'description' => 'nullable|string',
            'date' => 'required|date',
            'document' => $document
        ];
    }
}
