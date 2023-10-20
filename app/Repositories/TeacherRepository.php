<?php

namespace App\Repositories;

use App\Http\Requests\TeacherRequest;
use App\Models\Teacher;

class TeacherRepository extends Repository
{
    public static $path = '/teacher';
    public static function model()
    {
        return Teacher::class;
    }
    public static function storeByRequest(TeacherRequest $request, $userId){
        $imageId = null;
        if($request->hasFile('image')){
            $image = MediaRepository::storeByRequest(
                $request->image,
                self::$path,
                'image'
            );
            $imageId = $image->id;
        }
        $create = self::create([
            'user_id' => $userId,
            'profile_id' => $imageId,
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
}
