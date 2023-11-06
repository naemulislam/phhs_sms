<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index(){
        $gallerys = Gallery::latest()->get();
        return view('backend.dashboard.gallery.index',compact('gallerys'));
    }
    public function create(){
        return view('backend.dashboard.gallery.create');
    }
    public function store(Request $request){
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg'
        ]);
        if($request->hasFile('image')){
            $imagePath = Storage::put('/'.trim('gallery', '/'), $request->image, 'public');
        }
        Gallery::create([
            'image' => $imagePath,
            'is_active' => true
        ]);
        return back()->with('success', 'Image is uploaded successfully!');
    }
    public function edit(Gallery $gallery){
        return view('backend.dashboard.gallery.edit',compact('gallery'));
    }
    public function update(Request $request, Gallery $gallery){
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg'
        ]);
        if($request->hasFile('image')){
            $imagePath = Storage::put('/'.trim('gallery', '/'), $request->image, 'public');
            if(Storage::exists($gallery->image)){
                Storage::delete($gallery->image);
            }
        }
        $gallery->update([
            'image' => $imagePath,
        ]);
        return back()->with('success', 'Image is updated successfully!');
    }
    public function destroy(Gallery $gallery){
        if(Storage::exists($gallery->image)){
            Storage::delete($gallery->image);
        }
        $gallery->delete();
        return back()->with('success', 'Image is deleted successfully!');
    }
    public function status(Request $request, Gallery $gallery)
    {
        $isActive = false;
        if ($request->status == 1) {
            $isActive = true;
        }
        $gallery->update([
            'is_active' => $isActive,
        ]);
        return back()->with('success', 'Status is updated successfully!');
    }
}
