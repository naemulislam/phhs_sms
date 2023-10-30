<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ExamRoutineRequest;
use App\Models\ExamRoutine;
use App\Repositories\ExamRoutineRepository;
use App\Repositories\GroupRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ExamRoutineController extends Controller
{
    public function index()
    {
        $examRoutines = ExamRoutineRepository::getAll();
        $groups = GroupRepository::query()->where('is_active', true)->get();
        return view('backend.dashboard.exam_routine.index', compact('examRoutines', 'groups'));
    }
    public function store(ExamRoutineRequest $request)
    {
        ExamRoutineRepository::storeByRequest($request);
        return back()->with('success', 'Exam routine is created successfully!');
    }
    public function update(ExamRoutineRequest $request, ExamRoutine $examRoutine)
    {
        ExamRoutineRepository::updateByRequest($request, $examRoutine);
        return back()->with('success', 'Exam routine is updated successfully!');
    }
    public function destroy(ExamRoutine $examRoutine)
    {
        if (Storage::exists($examRoutine->document)) {
            Storage::delete($examRoutine->document);
        }
        $examRoutine->delete();
        return back()->with('success', 'Exam routine is deleted successfully!');
    }
    public function status(Request $request, ExamRoutine $examRoutine)
    {
        $isActive = false;
        if ($request->status == 1) {
            $isActive = true;
        }
        $examRoutine->update([
            'is_active' => $isActive,
        ]);
        return back()->with('success', 'Status is updated successfully!');
    }
}
