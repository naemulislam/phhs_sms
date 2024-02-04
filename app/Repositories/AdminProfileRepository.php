<?php

namespace App\Repositories;

use App\Http\Requests\AdminProfileRequest;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class AdminProfileRepository extends Repository
{
    public static $path = '/admin-profile';
    public static function model()
    {
        return User::class;
    }
    public static function adminProfile(AdminProfileRequest $request, User $user)
    {
        //dd($user->image);
        $imageId = null;
        if($user->image){
            if($request->hasFile('image')){
                $image = MediaRepository::updateByRequest(
                    $request->image,
                    self::$path,
                    'image',
                    $user->image
                );
                $imageId = $image->id;
            }
        }else{
            if($request->hasFile('image')){
                $image = MediaRepository::storeByRequest(
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
            'address' => $request->address,
        ]);
    }
}
