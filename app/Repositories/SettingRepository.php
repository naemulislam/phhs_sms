<?php
namespace App\Repositories;

use App\Http\Requests\SettingRequest;
use App\Models\Media;
use App\Models\Setting;

class SettingRepository extends Repository
{
    public static $path = '/settings';
    public static function model()
    {
        return Setting::class;
    }
    public static function storyByRequest(SettingRequest $request, Setting $setting){
        $siteLogo = null;
        if($request->hasFile('image')){
            $siteLogo = MediaRepository::updateOrCreateByRequest(
                $request->image,
                self::$path,
                'image',
                $setting->logo
            );
        }
        $createOrupdate = self::query()->updateOrCreate([
            'id' => $setting->id ?? 0,
        ],[
            'name_e' => $request->name_e,
            'name_b' => $request->name_b,
            'email' => $request->email,
            'phone' => $request->phone,
            'web_address' => $request->web_address,
            'total_t' => $request->total_t,
            'total_s' => $request->total_s,
            'total_c' => $request->total_c,
            'total_l' => $request->total_l,
            'address' => $request->address,
            'facebook' => $request->facebook,
            'youtube' => $request->youtube,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
            'image' => $siteLogo ? $siteLogo->id :$setting->image,

        ]);
        return $createOrupdate;
    }
}
