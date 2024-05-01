<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentProfileRequest extends FormRequest
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
        $permanentVill = 'required|string|max:100';
        $permanentPost = 'required|string|max:100';
        $permanentUpzilla = 'required|string|max:100';
        $permanentDist = 'required|string|max:100';
        if (request()->same == 1) {
            $permanentVill = 'nullable|string|max:100';
            $permanentPost = 'nullable|string|max:100';
            $permanentUpzilla = 'nullable|string|max:100';
            $permanentDist = 'nullable|string|max:100';
        }
        return [
            'name' => 'required|string|max:150',
            'email' => 'nullable|email',
            'religion' => 'required|string',
            'gender' => 'required|in:male,female,others',
            'sibling' => 'nullable',
            'shift' => 'required',
            'old_prev_school' => 'nullable|string|max:200',
            'blood' => 'nullable|string',
            'phone' => 'nullable|min:11|min:11',
            //Guardian Information
            'father_name' => 'nullable|string|max:150',
            'father_phone' => 'nullable|max:11|min:11',
            'father_nid' => 'nullable|integer',
            'mother_name' => 'nullable|string|max:150',
            'mother_phone' => 'nullable|max:11|min:11',
            'mother_nid' => 'nullable|integer',
            //Present Address
            'present_vill' => 'required|string|max:100',
            'present_post' => 'required|string|max:100',
            'present_upzilla' => 'required|string|max:100',
            'present_dist' => 'required|string|max:100',
            //permanent Address
            'permanent_vill' => $permanentVill,
            'permanent_post' => $permanentPost,
            'permanent_upzilla' => $permanentUpzilla,
            'permanent_dist' => $permanentDist,
        ];
    }
}
