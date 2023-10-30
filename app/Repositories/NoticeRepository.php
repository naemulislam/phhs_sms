<?php
namespace App\Repositories;

use App\Http\Requests\NoticeRequest;
use App\Models\Notice;
use Illuminate\Support\Facades\Storage;

class NoticeRepository extends Repository
{
    public static function model()
    {
        return Notice::class;
    }
    public static function storeByRequest(NoticeRequest $request){
        $path = null;
        if($request->hasFile('document')){
            $path = Storage::put('/'.trim('/notice','/'),$request->document,'public');
        }
        $create = self::create([
            'title' => $request->title,
            'date' => $request->date,
            'description' => $request->description,
            'type' => $request->type,
            'document' => $path
        ]);
        return $create;
    }
    public static function updateByRequest(NoticeRequest $request, Notice $notice){
        if($notice->document){
        if($request->hasFile('document')){
            $path = Storage::put('/'.trim('/notice','/'),$request->document,'public');
            if(Storage::exists($notice->document)){
                Storage::delete($notice->document);
            }
        }
    }else{
        if($request->hasFile('document')){
            $path = Storage::put('/'.trim('/notice','/'),$request->document,'public');
        }
    }
        $update = self::update($notice,[
            'title' => $request->title,
            'date' => $request->date,
            'description' => $request->description,
            'type' => $request->type,
            'document' => $path ?? $notice->document
        ]);
        return $update;
    }

}
