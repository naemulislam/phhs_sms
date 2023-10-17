<?php

namespace App\Repositories;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupRepository extends Repository
{
    public static function model()
    {
        return Group::class;
    }
    public static function storeByRequest(Request $request){
        return self::create([
            'name' => $request->name,
            'is_active' => true
        ]);
    }
    public static function updateByRequest(Request $request, Group $group){
        return self::update($group,[
            'name' => $request->name,
        ]);
    }
    public static function status(Request $request, Group $group){
        $isActive = false;
        if($request->status == 1){
            $isActive = true;
        }
        return self::update($group,[
            'is_active' => $isActive,
        ]);
    }
}
