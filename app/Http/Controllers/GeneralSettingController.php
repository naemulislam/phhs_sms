<?php

namespace App\Http\Controllers;

use App\Http\Requests\SettingRequest;
use App\Models\Setting;
use App\Repositories\SettingRepository;
use Illuminate\Http\Request;

class GeneralSettingController extends Controller
{
    public function index(){
        $setting = Setting::latest()->first();
        return view('backend.dashboard.setting.index',compact('setting'));
    }
    public function update(SettingRequest $request, Setting $setting){
        SettingRepository::storyByRequest($request, $setting);
        return back()->with('success', 'Setting is updated successfully!');

    }
}
