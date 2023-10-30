<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClassRoutineRequest;
use App\Models\ClassRoutine;
use App\Repositories\ClassRoutineRepository;
use App\Repositories\GroupRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClassRoutineController extends Controller
{
    public function index()
    {
        $classRoutines = ClassRoutineRepository::getAll();
        $groups = GroupRepository::query()->where('is_active', true)->get();
        return view('backend.dashboard.class_routine.index', compact('classRoutines', 'groups'));
    }
    public function store(ClassRoutineRequest $request)
    {
        ClassRoutineRepository::storeByRequest($request);
        return back()->with('success', 'Class routine is created successfully!');
    }
    public function update(ClassRoutineRequest $request, ClassRoutine $classRoutine)
    {
        ClassRoutineRepository::updateByRequest($request, $classRoutine);
        return back()->with('success', 'Class routine is updated successfully!');
    }
    public function destroy(ClassRoutine $classRoutine)
    {
        if (Storage::exists($classRoutine->document)) {
            Storage::delete($classRoutine->document);
        }
        $classRoutine->delete();
        return back()->with('success', 'Class routine is deleted successfully!');
    }
    public function status(Request $request, ClassRoutine $classRoutine)
    {
        $isActive = false;
        if ($request->status == 1) {
            $isActive = true;
        }
        $classRoutine->update([
            'is_active' => $isActive,
        ]);
        return back()->with('success', 'Status is updated successfully!');
    }
}
