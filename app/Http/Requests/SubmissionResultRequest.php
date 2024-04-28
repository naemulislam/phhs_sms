<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubmissionResultRequest extends FormRequest
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
        $group = 'required';
        $subject = 'required';
        $examType = 'required|string|in:Half yearly examination, Annual examination, Class test examination';
        $examYear = 'required|string';
        if (request()->isMethod('put')) {
            $group = 'nullable';
            $subject = 'nullable';
            $examType = 'nullable|string|in:Half yearly examination, Annual examination, Class test examination';
            $examYear = 'nullable|string';
        }
        return [
            'group_id' => $group,
            'subject_id' => $subject,
            'exam_type' => $examType,
            'exam_year' => $examYear,
            'mark.*' => 'required'
        ];
    }
}
