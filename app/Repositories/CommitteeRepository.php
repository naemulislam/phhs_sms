<?php

namespace App\Repositories;

use App\Http\Requests\CommitteeRequest;
use App\Models\Committee;
use Illuminate\Support\Facades\Storage;

class CommitteeRepository extends Repository
{
    public static function model()
    {
        return Committee::class;
    }
    public static function storeByRequest(CommitteeRequest $request)
    {
        $imagePath = null;
        if($request->hasFile('image')){
            $imagePath  = Storage::put('/'. trim('committee','/'), $request->image,'public');
        }
        $create = self::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'nid'=>$request->nid,
            'date_of_birth'=>$request->date_of_birth,
            'designation'=>$request->designation,
            'religion'=>$request->religion,
            'gender'=>$request->gender,
            'join_date'=>$request->join_date,
            'address'=>$request->address,
            'image'=>$imagePath,
            'is_active'=> 1,
        ]);
        return $create;
    }
    public static function updateByRequest(CommitteeRequest $request, Committee $committee)
    {
        $imagePath = null;
        if($request->hasFile('image')){
            $imagePath  = Storage::put('/'. trim('committee','/'), $request->image,'public');
            if(Storage::exists($committee->image)){
                Storage::delete($committee->image);
            }
        }
        $update = self::update($committee,[
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'nid'=>$request->nid,
            'date_of_birth'=>$request->date_of_birth,
            'designation'=>$request->designation,
            'religion'=>$request->religion,
            'gender'=>$request->gender,
            'join_date'=>$request->join_date,
            'address'=>$request->address,
            'image'=>$imagePath ?? $committee->image,
        ]);
        return $update;
    }
}
