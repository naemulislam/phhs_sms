<?php

namespace App\Repositories;

use App\Http\Requests\SchoolStaffRequest;
use App\Http\Requests\StaffRequest;
use App\Models\Staff;

class StaffRepository extends Repository
{
    public static function model()
    {
        return Staff::class;
    }
    public static function storeByRequest(StaffRequest $request, $userId){

        $create = self::create([
            'user_id' => $userId->id,
            'designation' => $request->designation,
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
    public static function updateByRequest(StaffRequest $request, Staff $staff){

        $update = self::update($staff,[
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
    public static function staffProfileUpdate(SchoolStaffRequest $request, $userId){
        $staff = self::query()->where('user_id', $userId)->first();

        $update = self::update($staff,[
            'designation' => $request->designation,
            // 'subject_id' => $request->subject_id,
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
