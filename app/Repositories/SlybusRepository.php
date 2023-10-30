<?php
namespace App\Repositories;

use App\Http\Requests\SlybusRequest;
use App\Models\Slybus;
use Illuminate\Support\Facades\Storage;

class SlybusRepository extends Repository{
    public static function model()
    {
        return Slybus::class;
    }
    public static function storeByRequest(SlybusRequest $request){
        $path = null;
        if($request->hasFile('document')){
            $path = Storage::put('/'.trim('/slybus', '/'),$request->document, 'public');
        }
        $create = self::create([
            'year' => $request->year,
            'group_id' => $request->group_id,
            'section' => $request->section,
            'shift' => $request->shift,
            'slybus_type' => $request->slybus_type,
            'document' => $path,
            'is_active' => true,
        ]);
        return $create;
    }
    public static function updateByRequest(SlybusRequest $request, Slybus $slybus){
        if($request->hasFile('document')){
            $path = Storage::put('/'.trim('/slybus', '/'),$request->document, 'public');
            if(Storage::exists($slybus->document)){
                Storage::delete($slybus->document);
            }
        }
        $update = self::update($slybus,[
            'year' => $request->year,
            'group_id' => $request->group_id,
            'section' => $request->section,
            'shift' => $request->shift,
            'slybus_type' => $request->slybus_type,
            'document' => $path ?? $slybus->document,
        ]);
        return $update;
    }
}
