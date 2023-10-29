<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function index(){
        $sliders = Slider::latest()->get();
        return view('backend.dashboard.slider.index', compact('sliders'));
    }
    public function create(){
        return view('backend.dashboard.slider.create');
    }
    public function store(Request $request){
        $request->validate([
            'image'=> 'required|image|mimes:png,jpg,jpeg'
        ]);
        if($request->hasFile('image')){
            $path = Storage::put('/'.trim('/slider', '/'), $request->image, 'public');
        }
        Slider::create([
            'image' => $path,
            'description' => $request->description,
            'is_active' => true,
        ]);
        return back()->with('success', 'Slider is created successfully!');
    }
    public function edit(Slider $slider){
        return view('backend.dashboard.slider.edit',compact('slider'));
    }
    public function update(Request $request, Slider $slider){
        $request->validate([
            'image'=> 'nullable|image|mimes:png,jpg,jpeg'
        ]);
        // dd($slider->image);
        if($request->hasFile('image')){
            $path = Storage::put('/'.trim('/slider', '/'), $request->image, 'public');

            if(Storage::exists($slider->image)){
                Storage::delete($slider->image);
            }
        }

        $slider->update([
            'image' => $path ?? $slider->image,
            'description' => $request->description,
        ]);
        return back()->with('success', 'Slider is updated successfully!');
    }
    public function destroy(Slider $slider){
        $slider->delete();
        return back()->with('success', 'Slider is deleted successfully!');
    }

    public function status(Request $request, Slider $slider)
    {
        $isActive = false;
        if ($request->status == 1) {
            $isActive = true;
        }
        $slider->update([
            'is_active' => $isActive,
        ]);
        return back()->with('success', 'Status is updated successfully!');
    }
}
