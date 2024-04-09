<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdmissionRequest;
use App\Models\Student;
use App\Models\StudentLogs;
use App\Models\User;
use App\Repositories\AddressRepository;
use App\Repositories\GroupRepository;
use App\Repositories\MediaRepository;
use App\Repositories\StudentLogsRepository;
use App\Repositories\StudentRepository;
use App\Repositories\UserRepository;
use FFI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Carbon;

class StudentController extends Controller
{
    //get all students
    public function index()
    {
        $group = request()->group_id;
        $students = StudentRepository::query()->when($group, function ($query) use ($group) {
            $query->where('group_id', $group);
        })->get();
        $groups = GroupRepository::query()->where('is_active', true)->get();
        return view('backend.dashboard.student.student_list', compact('students', 'groups'));
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
        $userId = UserRepository::studentCreate($request);
        StudentRepository::storeByRequest($request, $userId);
        AddressRepository::storeByRequest($request, $userId);
        return back()->with('success', 'Student is created successfully!');
    }
    public function show(Student $student)
    {
        $address = AddressRepository::query()->where('user_id', $student->user->id)->first();
        return view('backend.dashboard.student.show_dtls', compact('student', 'address'));
    }
    public function edit(Student $student)
    {
        $groups = GroupRepository::query()->where('is_active', true)->get();
        $address = AddressRepository::query()->where('user_id', $student->user->id)->first();
        return view('backend.dashboard.student.edit', compact('groups', 'student', 'address'));
    }
    public function update(AdmissionRequest $request, Student $student)
    {
        UserRepository::studentUpdate($request, $student->user_id);
        // $user->update([
        //     'student_id' => $request->student_id,
        // ]);
        StudentRepository::updateByRequest($request, $student);
        AddressRepository::updateByRequest($request, $student->user_id);
        return back()->with('success', 'Student is updated successfully!');
    }
    public function destroy(Student $student)
    {
        $media = MediaRepository::find($student->user->profile_id);
        if (Storage::exists($media->src)) {
            Storage::delete($media->src);
        }
        $address = AddressRepository::query()->where('user_id', $student->user->id)->first();
        $student->delete();
        $address->delete();
        $student->user->delete();
        $media->delete();

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
    //Student Promote function bellow
    public function studentPromote()
    {
        $group = request()->group_id;
        $students = StudentRepository::query()->when($group, function ($query) use ($group) {
            $query->where('group_id', $group);
        })->get();
        $groups = GroupRepository::query()->where('is_active', true)->get();
        return view('backend.dashboard.promote_student.student_list', compact('students', 'groups'));
    }
    public function promoteStore(Request $request)
    {
        if ($request->row_id == null) {
            return back()->with('error', 'Plese select students!');
        } else {
            foreach ($request->row_id as $key => $value) {
                $student = StudentRepository::find($value);
                StudentLogsRepository::storeByRequest($student);
                $student->update([
                    'roll' => $request->n_roll[$key],
                    'group_id' => $request->group_id[$key],
                    'session_year' => date('Y')
                ]);
            }
            return back()->with('success', 'Students promoted successfully!');
        }
    }
    /// Student Previous Details Information
    public function studentInfoSearch(Request $request){
        // $currentYear = Carbon::now()->year;
        // $subYear = $currentYear - 1;
        // $subYear = Carbon::now()->subYear(4)->year;
        // dd($subYear);
        $data['student_logs'] = StudentLogsRepository::query()
        ->where('group_id', $request->group_id)
        ->where('session_year',$request->session_year)->get();
        $data['groups'] = GroupRepository::query()->where('is_active',true)->get();
        $data['years'] = StudentLogsRepository::query()->select('session_year')->distinct()->get();
        return view('backend.dashboard.student.student_logs',$data);

    }
    public function studentInfoShow(StudentLogs $studentLogs){
        $address = AddressRepository::query()->where('user_id', $studentLogs->student->user->id)->first();
        return view('backend.dashboard.student.student_logs_show',compact('studentLogs','address'));
    }
}
