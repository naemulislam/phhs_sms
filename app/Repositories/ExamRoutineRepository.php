<?php
namespace App\Repositories;

use App\Http\Requests\ExamRoutineRequest;
use App\Models\ExamRoutine;
use Illuminate\Support\Facades\Storage;

class ExamRoutineRepository extends Repository{
    public static function model()
    {
        return ExamRoutine::class;
    }
    public static function storeByRequest(ExamRoutineRequest $request){
        $path = null;
        if($request->hasFile('document')){
            $path = Storage::put('/'.trim('/exam_routine', '/'),$request->document, 'public');
        }
        $create = self::create([
            'year' => $request->year,
            'group_id' => $request->group_id,
            'section' => $request->section,
            'shift' => $request->shift,
            'exam_type' => $request->exam_type,
            'document' => $path,
            'is_active' => true,
        ]);
        return $create;
    }
    public static function updateByRequest(ExamRoutineRequest $request, ExamRoutine $examRoutine){
        if($request->hasFile('document')){
            $path = Storage::put('/'.trim('/exam_routine', '/'),$request->document, 'public');
            if(Storage::exists($examRoutine->document)){
                Storage::delete($examRoutine->document);
            }
        }
        $update = self::update($examRoutine,[
            'year' => $request->year,
            'group_id' => $request->group_id,
            'section' => $request->section,
            'shift' => $request->shift,
            'exam_type' => $request->exam_type,
            'document' => $path ?? $examRoutine->document,
        ]);
        return $update;
    }
}
