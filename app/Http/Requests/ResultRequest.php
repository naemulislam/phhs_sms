<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResultRequest extends FormRequest
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
        $document = 'required|mimes:png,jpg,jpeg,pdf';
        if(request()->isMethod('put')){
            $document = 'nullable|mimes:png,jpg,jpeg,pdf';
        }
        return [
            'year' => 'required|max:10',
            'group_id'  => 'required',
            'section' => 'nullable|string|max:20',
            'shift' => 'nullable|string|max:20',
            'exam_type' => 'required|string|max:30',
            'result_type' => 'nullable|string|max:30',
            'document' => $document
        ];
    }
}
