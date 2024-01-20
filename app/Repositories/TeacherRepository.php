<?php

namespace App\Repositories;

use App\Http\Requests\TeacherRequest;
use App\Models\Teacher;

class TeacherRepository extends Repository
{
    public static function model()
    {
        return Teacher::class;
    }
    public static function storeByRequest(TeacherRequest $request, $userId){

        $create = self::create([
            'user_id' => $userId->id,
            'designation' => $request->designation,
            'subject_id' => $request->subject_id,
            'shift' => $request->shift,
            'blood' => $request->blood,
            'gender' => $request->gender,
            'religion' => $request->religion,
            'nid' => $request->nid,
            'date_of_birth' => $request->date_of_birth,
            'join_date' => $request->join_date,
        ]);
        return $create;

    }
    public static function updateByRequest(TeacherRequest $request, Teacher $teacher){

        $update = self::update($teacher,[
            'designation' => $request->designation,
            'subject_id' => $request->subject_id,
            'shift' => $request->shift,
            'blood' => $request->blood,
            'gender' => $request->gender,
            'religion' => $request->religion,
            'nid' => $request->nid,
            'date_of_birth' => $request->date_of_birth,
            'join_date' => $request->join_date,
        ]);
        return $update;
    }
}
