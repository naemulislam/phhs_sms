<?php

namespace App\Repositories;

use App\Models\Media;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectRepository extends Repository
{
    public static $path = '/subject';
    public static function model()
    {
        return Subject::class;
    }
    public static function storeByRequest(Request $request)
    {
        $imageId = null;
        if ($request->hasFile('image')) {
            $image = MediaRepository::storeByRequest(
                $request->image,
                self::$path,
                'image'
            );
            $imageId = $image->id;
        }
        return self::create([
            'name' => $request->name,
            'group_id' => $request->group_id,
            'image_id' => $imageId,
            'code' => $request->code,
            'description' => $request->description,
            'is_active' => true
        ]);
    }
    public static function updateByRequest(Request $request, Subject $subject)
    {
        if ($subject->image) {
            if ($request->hasFile('image')) {
                $imageId = MediaRepository::updateByRequest(
                    $request->image,
                    self::$path,
                    'image',
                    $subject->image
                );
            }
        }else{
            $imageId = null;
            if ($request->hasFile('image')) {
                $imageId =  MediaRepository::storeByRequest(
                    $request->image,
                    self::$path,
                    'image'
                );
            }

        }
        return self::update($subject, [
            'name' => $request->name,
            'group_id' => $request->group_id,
            'image_id' => $imageId ? $imageId->id : $subject->image_id,
            'code' => $request->code,
            'description' => $request->description,
        ]);
    }
    public static function status(Request $request, Subject $subject)
    {
        $isActive = false;
        if ($request->status == 1) {
            $isActive = true;
        }
        return self::update($subject, [
            'is_active' => $isActive,
        ]);
    }
}
