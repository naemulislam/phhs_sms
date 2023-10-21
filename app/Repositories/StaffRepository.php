<?php

namespace App\Repositories;

use App\Http\Requests\StaffRequest;
use App\Models\Staff;

class StaffRepository extends Repository
{
    public static $path = '/staff';
    public static function model()
    {
        return Staff::class;
    }
    public static function storeByRequest(StaffRequest $request, $userId){
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
        $imageId = null;
        if ($staff->image) {
            if ($request->hasFile('image')) {
                $image = MediaRepository::updateByRequest(
                    $request->image,
                    self::$path,
                    'image',
                    $staff->image
                );
                $imageId = $image->id;
            }
        }else{
            if ($request->hasFile('image')) {
                $image =  MediaRepository::storeByRequest(
                    $request->image,
                    self::$path,
                    'image'
                );
                $imageId = $image->id;
            }
        }
        $update = self::update($staff,[
            'profile_id' => $imageId ?? $staff->profile_id,
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
