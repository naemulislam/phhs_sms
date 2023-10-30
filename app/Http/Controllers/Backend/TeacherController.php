<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeacherRequest;
use App\Models\Teacher;
use App\Models\User;
use App\Repositories\AddressRepository;
use App\Repositories\GroupRepository;
use App\Repositories\MediaRepository;
use App\Repositories\SubjectRepository;
use App\Repositories\TeacherRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = TeacherRepository::getAll();
        return view('backend.dashboard.teacher.index', compact('teachers'));
    }
    public function create()
    {
        $subjects = SubjectRepository::query()->where('is_active', true)->get();
        return view('backend.dashboard.teacher.create', compact('subjects'));
    }
    public function store(TeacherRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'role' => 'teacher',
            'pds_id' => $request->pds_id,
            'is_active' => true,
        ]);
        TeacherRepository::storeByRequest($request, $user->id);
        AddressRepository::storeByRequest($request, $user->id);
        return back()->with('success', 'Teacher is created successfully!');
    }
    public function show(Teacher $teacher)
    {
        $address = AddressRepository::query()->where('user_id', $teacher->user->id)->first();
        return view('backend.dashboard.teacher.show', compact('teacher', 'address'));
    }
    public function edit(Teacher $teacher)
    {
        $address = AddressRepository::query()->where('user_id', $teacher->user->id)->first();
        $subjects = SubjectRepository::query()->where('is_active', true)->get();
        return view('backend.dashboard.teacher.edit', compact('teacher', 'address', 'subjects'));
    }
    public function update(TeacherRequest $request, Teacher $teacher)
    {
        $user = UserRepository::query()->where('id', $teacher->user_id)->first();
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'pds_id' => $request->pds_id,
        ]);
        TeacherRepository::updateByRequest($request, $teacher);
        AddressRepository::updateByRequest($request, $teacher->user_id);
        return back()->with('success', 'Teacher is updated successfully!');
    }
    public function destroy(Teacher $teacher)
    {
        $media = MediaRepository::find($teacher->profile_id);
        if (Storage::exists($media->src)) {
            Storage::delete($media->src);
        }
        $address = AddressRepository::query()->where('user_id', $teacher->user->id)->first();
        $teacher->delete();
        $media->delete();
        $address->delete();
        $teacher->user->delete();
        return back()->with('success', 'Teacher is deleted successfully!');
    }
    public function status(Request $request, Teacher $teacher)
    {
        $user = UserRepository::query()->where('id', $teacher->user_id)->first();
        $isActive = false;
        if ($request->status == 1) {
            $isActive = true;
        }
        $user->update([
            'is_active' => $isActive,
        ]);
        return back()->with('success', 'Status is updated successfully!');
    }
}
