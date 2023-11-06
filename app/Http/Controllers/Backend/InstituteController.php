<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Institute;
use App\Repositories\InstituteRepository;
use Illuminate\Http\Request;

class InstituteController extends Controller
{
    public function index(){
        $institute = InstituteRepository::query()->latest()->first();
        return view('backend.dashboard.institute.create', compact('institute'));
    }
    public function update(Request $request, Institute $institute){
        $image = 'required|image|mimes:png,jpg,jpeg';
        if($institute->id > 0){
            $image = 'nullable|image|mimes:png,jpg,jpeg';
        }
        $request->validate([
            'description' => 'required|string',
            'image' => $image
        ]);
        InstituteRepository::updateByRequest($request, $institute);
        return back()->with('success', 'History is updated successfully!');

    }
}
