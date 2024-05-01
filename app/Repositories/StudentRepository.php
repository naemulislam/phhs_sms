<?php

namespace App\Repositories;

use App\Http\Requests\AdmissionRequest;
use App\Http\Requests\StudentProfileRequest;
use App\Models\Student;

class StudentRepository extends Repository
{

    public static function model()
    {
        return Student::class;
    }
    public static function storeByRequest(AdmissionRequest $request, $userId){
        $create = self::create([
            'user_id' => $userId->id,
            'applicant_name' => $request->name,
            'roll' => $request->roll,
            'group_id' => $request->group_id,
            'birth_reg_no' => $request->birth_reg_no,
            'date_of_birth' => $request->date_of_birth,
            'religion' => $request->religion,
            'gender' => $request->gender,
            'sibling' => $request->sibling,
            'shift' => $request->shift,
            'quota' => $request->quota,
            'old_prev_school' => $request->old_prev_school,
            'type' => $request->type,
            'blood' => $request->blood,
            'phone' => $request->phone,
            'session_year' => date('Y'),
            'admission_date' => $request->admission_date,
            //Guardian Information
            'father_name' => $request->father_name,
            'father_phone' => $request->father_phone,
            'father_nid' => $request->father_nid,
            'mother_name' => $request->mother_name,
            'mother_phone' => $request->mother_phone,
            'mother_nid' => $request->mother_nid,
            // absent Guardian Information
            'absent_guardian' => $request->absent_guardian,
            'absent_guardian_nid' => $request->absent_guardian_nid,
        ]);
        return $create;
    }
    public static function updateByRequest(AdmissionRequest $request, Student $student){

        $update = self::update($student,[
            'applicant_name' => $request->name,
            'roll' => $request->roll,
            'group_id' => $request->group_id,
            'birth_reg_no' => $request->birth_reg_no,
            'date_of_birth' => $request->date_of_birth,
            'religion' => $request->religion,
            'gender' => $request->gender,
            'sibling' => $request->sibling,
            'shift' => $request->shift,
            'quota' => $request->quota,
            'old_prev_school' => $request->old_prev_school,
            'type' => $request->type,
            'blood' => $request->blood,
            'phone' => $request->phone,
            'admission_date' => $request->admission_date,
            //Guardian Information
            'father_name' => $request->father_name,
            'father_phone' => $request->father_phone,
            'father_nid' => $request->father_nid,
            'mother_name' => $request->mother_name,
            'mother_phone' => $request->mother_phone,
            'mother_nid' => $request->mother_nid,
            // absent Guardian Information
            'absent_guardian' => $request->absent_guardian,
            'absent_guardian_nid' => $request->absent_guardian_nid,
        ]);
        return $update;
    }
    //Student dashboard profile method
    public static function studentProfileUpdate(StudentProfileRequest $request, $userId){

        $student = self::query()->where('user_id', $userId)->first();

        $updateProfile = self::update($student,[
            'religion' => $request->religion,
            'gender' => $request->gender,
            'sibling' => $request->sibling,
            'shift' => $request->shift,
            'old_prev_school' => $request->old_prev_school,
            'blood' => $request->blood,
            'phone' => $request->phone,
            //Guardian Information
            'father_name' => $request->father_name,
            'father_phone' => $request->father_phone,
            'father_nid' => $request->father_nid,
            'mother_name' => $request->mother_name,
            'mother_phone' => $request->mother_phone,
            'mother_nid' => $request->mother_nid,
            // absent Guardian Information
            'absent_guardian' => $request->absent_guardian,
            'absent_guardian_nid' => $request->absent_guardian_nid,
        ]);
        return $updateProfile;

    }
}
