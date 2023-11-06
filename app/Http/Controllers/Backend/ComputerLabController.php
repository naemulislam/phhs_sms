<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ComputerLab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ComputerLabController extends Controller
{
    public function index(){
        $computerLab = ComputerLab::query()->latest()->first();
        return view('backend.dashboard.computer_lab.create', compact('computerLab'));
    }
    public static function update(Request $request, ComputerLab $computerLab){
        $image = 'required|image|mimes:png,jpg,jpeg';
        if($computerLab->id > 0){
            $image = 'nullable|image|mimes:png,jpg,jpeg';
        }
        $request->validate([
            'description' => 'required|string',
            'image' => $image
        ]);
        $imageFile = null;
        if($request->hasFile('image')){
            $imageFile = Storage::put('/'.trim('/computer-lab', '/'),$request->image, 'public');
            if($computerLab->id > 0){
                if(Storage::exists($computerLab->image)){
                    Storage::delete($computerLab->image);
                }
            }
        }
        ComputerLab::query()->updateOrCreate(
            [
                'id' => $computerLab?->id ?? 0,
            ],
            [
                'description' => $request->description,
                'image' => $imageFile ?? $computerLab->image

            ]
        );
        return back()->with('success', 'Computer lab is updated successfully!');

    }
}
