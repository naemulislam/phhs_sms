<?php
namespace App\Repositories;

use App\Http\Requests\ResultRequest;
use App\Models\Result;
use Illuminate\Support\Facades\Storage;

class ResultRepository extends Repository{
    public static function model()
    {
        return Result::class;
    }
    public static function storeByRequest(ResultRequest $request){
        $path = null;
        if($request->hasFile('document')){
            $path = Storage::put('/'.trim('/result', '/'),$request->document, 'public');
        }
        $create = self::create([
            'year' => $request->year,
            'group_id' => $request->group_id,
            'section' => $request->section,
            'shift' => $request->shift,
            'exam_type' => $request->exam_type,
            'result_type' => $request->result_type,
            'document' => $path,
            'is_active' => true,
        ]);
        return $create;
    }
    public static function updateByRequest(ResultRequest $request, Result $result){
        if($request->hasFile('document')){
            $path = Storage::put('/'.trim('/result', '/'),$request->document, 'public');
            if(Storage::exists($result->document)){
                Storage::delete($result->document);
            }
        }
        $update = self::update($result,[
            'year' => $request->year,
            'group_id' => $request->group_id,
            'section' => $request->section,
            'shift' => $request->shift,
            'exam_type' => $request->exam_type,
            'result_type' => $request->result_type,
            'document' => $path ?? $result->document,
        ]);
        return $update;
    }
}
