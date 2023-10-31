<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Campas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CampasController extends Controller
{
    public function index()
    {
        $campas = Campas::latest()->get();
        return view('backend.dashboard.campas.index', compact('campas'));
    }
    public function create()
    {
        return view('backend.dashboard.campas.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg',
            'description' => 'nullable|string|max:200',
        ]);
        if ($request->hasFile('image')) {
            $path = Storage::put('/' . trim('/campas', '/'), $request->image, 'public');
        }
        Campas::create([
            'image' => $path,
            'description' => $request->description,
            'is_active' => true,
        ]);
        return back()->with('success', 'Campas is created successfully!');
    }
    public function edit(Campas $campas)
    {
        return view('backend.dashboard.campas.edit', compact('campas'));
    }
    public function update(Request $request, Campas $campas)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:png,jpg,jpeg',
            'description' => 'nullable|string|max:200'
        ]);
        if ($request->hasFile('image')) {
            $path = Storage::put('/' . trim('/campas', '/'), $request->image, 'public');

            if (Storage::exists($campas->image)) {
                Storage::delete($campas->image);
            }
        }

        $campas->update([
            'image' => $path ?? $campas->image,
            'description' => $request->description,
        ]);
        return back()->with('success', 'Campas is updated successfully!');
    }
    public function destroy(Campas $campas)
    {
        if (Storage::exists($campas->image)) {
            Storage::delete($campas->image);
        }
        $campas->delete();
        return back()->with('success', 'Campas is deleted successfully!');
    }

    public function status(Request $request, Campas $campas)
    {
        $isActive = false;
        if ($request->status == 1) {
            $isActive = true;
        }
        $campas->update([
            'is_active' => $isActive,
        ]);
        return back()->with('success', 'Status is updated successfully!');
    }
}
