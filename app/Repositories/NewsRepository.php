<?php
namespace App\Repositories;

use App\Http\Requests\NewsRequest;
use App\Models\News;

class NewsRepository extends Repository{
    public static $path = '/news';
    public static function model()
    {
        return News::class;
    }
    public static function storeByRequest(NewsRequest $request){
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
    public static function updateByRequest(NewsRequest $request, News $news){
        $imageId = null;
        if($request->hasFile('document')){
            $imageId = MediaRepository::updateByRequest(
                $request->document,
                self::$path,
                'image',
                $news->image
            );
        }
        $update = self::update($news,[
            'title' => $request->title,
            'description' => $request->description,
            'date' => $request->date,
            'image_id' => $imageId ? $imageId->id :$news->image_id,
        ]);
        return $update;
    }
}
