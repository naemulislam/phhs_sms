<?php

namespace App\Repositories;

use App\Http\Requests\AdmissionRequest;
use App\Models\Address;
use App\Models\Student;

class AddressRepository extends Repository
{
    public static function model()
    {
        return Address::class;
    }
    public static function storeByRequest(AdmissionRequest $request, $userId)
    {
        $permanentVill = $request->permanent_vill;
        $permanentPost = $request->permanent_post;
        $permanentUpzilla = $request->permanent_upzilla;
        $permanentDist = $request->permanent_dist;
        if ($request->same == 1) {
            $permanentVill = $request->present_vill;
            $permanentPost = $request->present_post;
            $permanentUpzilla = $request->present_upzilla;
            $permanentDist = $request->present_dist;
        }
        $create = self::create([
            'user_id' => $userId,
            'present_vill' => $request->present_vill,
            'present_post' => $request->present_post,
            'present_upzilla' => $request->present_upzilla,
            'present_dist' => $request->present_dist,

            'permanent_vill' => $permanentVill,
            'permanent_post' => $permanentPost,
            'permanent_upzilla' => $permanentUpzilla,
            'permanent_dist' => $permanentDist,
        ]);
        return $create;
    }
    public static function updateByRequest(AdmissionRequest $request, $userId)
    {
        $address = self::query()->where('user_id', $userId)->first();
        $permanentVill = $request->permanent_vill;
        $permanentPost = $request->permanent_post;
        $permanentUpzilla = $request->permanent_upzilla;
        $permanentDist = $request->permanent_dist;
        if ($request->same == 1) {
            $permanentVill = $request->present_vill;
            $permanentPost = $request->present_post;
            $permanentUpzilla = $request->present_upzilla;
            $permanentDist = $request->present_dist;
        }
        $update = self::update($address,[
            'present_vill' => $request->present_vill,
            'present_post' => $request->present_post,
            'present_upzilla' => $request->present_upzilla,
            'present_dist' => $request->present_dist,

            'permanent_vill' => $permanentVill,
            'permanent_post' => $permanentPost,
            'permanent_upzilla' => $permanentUpzilla,
            'permanent_dist' => $permanentDist,
        ]);
        return $update;
    }
}
