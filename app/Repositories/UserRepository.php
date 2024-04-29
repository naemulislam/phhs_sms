<?php

namespace App\Repositories;

use App\Http\Requests\AdmissionRequest;
use App\Http\Requests\SchoolStaffRequest;
use App\Http\Requests\StaffRequest;
use App\Http\Requests\TeacherRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserRepository extends Repository
{
    public static $path = '/teacher';
    public static $staff = '/staff';
    public static $student = '/student';
    public static $profile = '/profile';
    public static function model()
    {
        return User::class;
    }
     //This is Teacher method create and update
    public static function teacherCreate(TeacherRequest $request){
        $imageId = null;
        if($request->hasFile('image')){
            $image = MediaRepository::storeByRequest(
                $request->image,
                self::$path,
                'image'
            );
            $imageId = $image->id;
        }
        $teacherCreate = self::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'profile_id' => $imageId,
            'role' => 'teacher',
            'password' => Hash::make('teacher123'),
            'pds_id' => $request->pds_id,
            'is_active' => true,
        ]);
        return $teacherCreate;
    }
    public static function updateTeacher(TeacherRequest $request, $userId){
        $user = self::query()->where('id', $userId)->first();
        $imageId = null;
        if ($user->image) {
            if ($request->hasFile('image')) {
                $image = MediaRepository::updateByRequest(
                    $request->image,
                    self::$path,
                    'image',
                    $user->image
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

        return self::update($user,[
            'profile_id' => $imageId ?? $user->profile_id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'pds_id' => $request->pds_id,
        ]);
    }
    //This is Staff method create and update
    public static function staffCreate(StaffRequest $request){
        $imageId = null;
        if($request->hasFile('image')){
            $image = MediaRepository::storeByRequest(
                $request->image,
                self::$staff,
                'image'
            );
            $imageId = $image->id;
        }
        $staffCreate = self::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'profile_id' => $imageId,
            'role' => 'staff',
            'password' => Hash::make('staff123'),
            'pds_id' => $request->pds_id,
            'is_active' => true,
        ]);
        return $staffCreate;
    }
    public static function updateStaff(StaffRequest $request, $userId){
        $user = self::query()->where('id', $userId)->first();
        $imageId = null;
        if ($user->image) {
            if ($request->hasFile('image')) {
                $image = MediaRepository::updateByRequest(
                    $request->image,
                    self::$staff,
                    'image',
                    $user->image
                );
                $imageId = $image->id;
            }
        }else{
            if ($request->hasFile('image')) {
                $image =  MediaRepository::storeByRequest(
                    $request->image,
                    self::$staff,
                    'image'
                );
                $imageId = $image->id;
            }
        }

        return self::update($user,[
            'profile_id' => $imageId ?? $user->profile_id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'pds_id' => $request->pds_id,
        ]);
    }
    //This is Student method create and update
    public static function studentCreate(AdmissionRequest $request){
        $imageId = null;
        if ($request->hasFile('image')) {
            $image = MediaRepository::storeByRequest(
                $request->image,
                self::$student,
                'image'
            );
            $imageId = $image->id;
        }
        $studentCreate = self::create([
            'name' => $request->name,
            'email' => $request->email,
            'email_verified_at' => now(),
            'role' => 'student',
            'student_id' => $request->student_id,
            'is_active' => true,
            'profile_id' => $imageId,
            'password' => Hash::make('student123'),


        ]);
        return $studentCreate;
    }
    public static function studentUpdate(AdmissionRequest $request, $userId){
        $user = self::query()->where('id', $userId)->first();
        $imageId = null;
        if ($user->image) {
            if ($request->hasFile('image')) {
                $image = MediaRepository::updateByRequest(
                    $request->image,
                    self::$student,
                    'image',
                    $user->image
                );
                $imageId = $image->id;
            }
        }else{
            if ($request->hasFile('image')) {
                $image =  MediaRepository::storeByRequest(
                    $request->image,
                    self::$student,
                    'image'
                );
                $imageId = $image->id;
            }
        }

        return self::update($user,[
            'profile_id' => $imageId ?? $user->profile_id,
            'email' => $request->email,
            'student_id' => $request->student_id,
        ]);
    }
    public static function updatePasswordByRrquest(Request $request, User $user):bool
    {
        $isUpdate = self::update($user, [
            'password' => Hash::make($request->new_password)
        ]);
        return $isUpdate;
    }
    public static function schoolStaffProfile(SchoolStaffRequest $request, User $user){
        // $user = self::query()->where('id', $userId)->first();
        $imageId = null;
        if ($user->image) {
            if ($request->hasFile('image')) {
                $image = MediaRepository::updateByRequest(
                    $request->image,
                    self::$profile,
                    'image',
                    $user->image
                );
                $imageId = $image->id;
            }
        }else{
            if ($request->hasFile('image')) {
                $image =  MediaRepository::storeByRequest(
                    $request->image,
                    self::$profile,
                    'image'
                );
                $imageId = $image->id;
            }
        }

        return self::update($user,[
            'profile_id' => $imageId ?? $user->profile_id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'pds_id' => $request->pds_id,
        ]);

    }
}
