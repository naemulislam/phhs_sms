<?php
namespace App\Repositories;

use App\Http\Requests\ClassRoutineRequest;
use App\Models\ClassRoutine;
use Illuminate\Support\Facades\Storage;

class ClassRoutineRepository extends Repository{
    public static function model()
    {
        return ClassRoutine::class;
    }
    public static function storeByRequest(ClassRoutineRequest $request){
        $path = null;
        if($request->hasFile('document')){
            $path = Storage::put('/'.trim('/class_routine','/'),$request->document,'public');
        }
        $create = self::create([
            'year' => $request->year,
            'group_id' => $request->group_id,
            'section' => $request->section,
            'shift' => $request->shift,
            'document' => $path,
            'is_active' => true,
        ]);
        return $create;
    }
    public static function updateByRequest(ClassRoutineRequest $request, ClassRoutine $classRoutine){
        if($request->hasFile('document')){
            $path = Storage::put('/'.trim('/class_routine','/'),$request->document,'public');
            if(Storage::exists($classRoutine->document)){
                Storage::delete($classRoutine->document);
            }
        }
        $update = self::update($classRoutine,[
            'year' => $request->year,
            'group_id' => $request->group_id,
            'section' => $request->section,
            'shift' => $request->shift,
            'document' => $path ?? $classRoutine->document,
        ]);
        return $update;
    }
}
