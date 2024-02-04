<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SchoolStaffRequest extends FormRequest
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
        $email = 'required|email|unique:users,email';
        if(request()->isMethod('put')){
            $email = 'required|email';
        }
        return [
            'name' => 'required|string|max:100',
            'email' => $email,
            // 'subject_id' => 'required',
            'pds_id' => 'required|max:50',
            'nid' => 'required|min:10|max:10',
            'date_of_birth' => 'nullable',
            'religion' => 'required',
            'gender' => 'required',
            'join_date' => 'nullable',
            'blood' => 'nullable',
            'phone' => 'required|min:11|max:11',
            'designation' => 'nullable',
            'shift' => 'nullable',
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
