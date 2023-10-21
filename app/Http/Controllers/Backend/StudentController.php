<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdmissionRequest;
use App\Models\Address;
use App\Models\Student;
use App\Models\Subject;
use App\Models\User;
use App\Repositories\AddressRepository;
use App\Repositories\GroupRepository;
use App\Repositories\StudentRepository;
use App\Repositories\SubjectRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //get all students
    public function index()
    {
        $students = StudentRepository::getAll();
        return view('backend.dashboard.student.student_list', compact('students'));
    }
    public function create()
    {
        $groups = GroupRepository::query()->where('is_active', true)->get();
        return view('backend.dashboard.student.admission', compact('groups'));
    }
    public function studentId()
    {
        $studentId = random_int(100000, 999999);
        return response()->json([
            'message',
            'id' => $studentId
        ]);
    }
    public function store(AdmissionRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'role' => 'student',
            'student_id' => $request->student_id,
            'is_active' => true,
        ]);
        StudentRepository::storeByRequest($request, $user->id);
        AddressRepository::storeByRequest($request, $user->id);
        return back()->with('success', 'Student is created successfully!');
    }
    public function show( Student $student)
    {
        $address = AddressRepository::query()->where('user_id',$student->user->id)->first();
        return view('backend.dashboard.student.show_dtls', compact('student','address'));
    }
    public function edit( Student $student)
    {
        $groups = GroupRepository::query()->where('is_active', true)->get();
        $address = AddressRepository::query()->where('user_id',$student->user->id)->first();
        return view('backend.dashboard.student.edit', compact('groups','student','address'));
    }
    public function update(AdmissionRequest $request, Student $student)
    {
        $user = UserRepository::query()->where('id', $student->user_id)->first();
        $user->update([
            'student_id' => $request->student_id,
        ]);
        StudentRepository::updateByRequest($request, $student);
        AddressRepository::updateByRequest($request, $student->user_id);
        return back()->with('success', 'Student is updated successfully!');
    }
    public function destroy(Student $student)
    {
        $address = AddressRepository::query()->where('user_id', $student->user->id)->first();
        $student->delete();
        $address->delete();
        $student->user->delete();

        return back()->with('success', 'Student is deleted successfully!');
    }

    public function status(Request $request, Student $student)
    {
        $user = UserRepository::query()->where('id', $student->user_id)->first();
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
