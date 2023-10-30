<?php
namespace App\Repositories;

use App\Http\Requests\AchievementRequest;
use App\Models\Achievement;

class AchievementRepository extends Repository{
    public static $path = '/achievement';
    public static function model()
    {
        return Achievement::class;
    }
    public static function storeByRequest(AchievementRequest $request){
        $imageId = null;
        if($request->hasFile('document')){
            $image = MediaRepository::storeByRequest(
                $request->document,
                self::$path,
                'image'
            );
            $imageId = $image->id;
        }
        $create = self::create([
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
            'image_id' => $imageId,
            'is_active' => true
        ]);
        return $create;
    }
    public static function updateByRequest(AchievementRequest $request, Achievement $achievement){
        $imageId = null;
        if($request->hasFile('document')){
            $imageId = MediaRepository::updateByRequest(
                $request->document,
                self::$path,
                'image',
                $achievement->image
            );
        }
        $update = self::update($achievement,[
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
            'image_id' => $imageId ? $imageId->id :$achievement->image_id,
        ]);
        return $update;
    }
}
