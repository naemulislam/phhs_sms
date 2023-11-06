<?php

namespace App\Repositories;

use App\Models\Institute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InstituteRepository extends Repository
{
    public static $path = '/history_of_institute';
    public static function model()
    {
        return Institute::class;
    }
    public static function updateByRequest(Request $request, Institute $institute)
    {
        $imageFile = null;
        if ($request->hasFile('image')) {
            $imageFile = Storage::put('/' . trim(self::$path, '/'), $request->image, 'public');
            if ($institute->id > 0) {
                if (Storage::exists($institute->image)) {
                    Storage::delete($institute->image);
                }
            }
        }
        $update = self::query()->updateOrCreate(
            [
                'id' => $institute?->id ?? 0
            ],
            [
                'description' => $request->description,
                'image' => $imageFile ?? $institute->image
            ]
        );
        return $update;
    }
}
