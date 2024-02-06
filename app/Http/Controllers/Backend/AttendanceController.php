<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\StudentAttendance;
use App\Repositories\GroupRepository;
use App\Repositories\StudentRepository;
use App\Repositories\SubjectRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AttendanceController extends Controller
{
    //index
    public function index(){
        $attendances = StudentAttendance::select('attendance_date','group_id','subject_id')->distinct()->get();
        return view('backend.dashboard.attendance.index_list', compact('attendances'));
    }
    public function create()
    {
        // $students = StudentRepository::getAll();
        $groups = GroupRepository::query()->where('is_active', true)->get();
        return view('backend.dashboard.attendance.create', compact('groups'));
    }
    public function show($date, $group, $subject){
        $attendance = StudentAttendance::where('attendance_date', $date)->where('group_id', $group)->where('subject_id', $subject)->get();
        return view('backend.dashboard.attendance.edit_atten', compact('attendance'));
    }

    //get all students form ajax function
    public function getSubjects($id)
    {
        $subjects = SubjectRepository::query()
            ->where('is_active', true)
            ->where('group_id', $id)->get();
        $html = '';
        foreach ($subjects as $key => $subject) {
            $html .= ' <option value=" ' . $subject->id . ' ">' . $subject->name . '</option>';
        }
        return $html;
    }
    public function getStudents($id)
    {

        $html = '';
        $stu['student'] = StudentRepository::query()->with('group', 'user')->where('group_id', $id)->where('status', 1)->Orderby('roll', 'asc')->get();
        // $get_id = $data['student']->id;

        foreach ($stu['student'] as $key => $data) {
            $sl_num = $key + 1;
            $html .= '<tr>
                    <input type="hidden" name="student_id[]" value= "  ' . $data->id . '" >
                    <td> ' . $sl_num . ' </td>
                    <td> ' . $data->applicant_name . '  </td>
                    <td> ' . $data->group->name . ' </td>
                    <td> ' . $data->roll . '  </td>
                    <td>
                    <span class="switch">
                        <label>
                            <input type="checkbox" name="attendance[' . $data->id . ']" value="1"/>
                            <span></span>
                        </label>
                    </span>
                    </td>
                    <td>
                    <span class="switch">
                        <label>
                            <input type="checkbox" name="attendance[' . $data->id . ']" value="0"/>
                            <span></span>
                        </label>
                    </span>
                    </td>
                    <td>
                    <span class="switch">
                        <label>
                            <input type="checkbox" name="attendance[' . $data->id . ']" value="2"/>
                            <span></span>
                        </label>
                    </span>
                    </td>
                    <td>
                    <span class="switch">
                        <label>
                            <input type="checkbox" name="attendance[' . $data->id . ']" value="3"/>
                            <span></span>
                        </label>
                    </span>
                    </td>
                    </tr>';
        }
        return $html;
    }
    public function store(Request $request)
    {
        // dd($request->all());
        if (!empty($request->attendance)) {

            $count_student = StudentRepository::query()->where('status', 1)->where('group_id', $request->group_id)->count();
            // dd($count_student);

            $count_atten = count($request->attendance);
            // dd($count_atten);
            if ($count_student == $count_atten) {

                $check_date = StudentAttendance::where('attendance_date', $request->attendance_date)->where('group_id', $request->group_id)->where('subject_id', $request->subject_id)
                    ->first();
                if ($check_date) {

                    return redirect()->back()->with('error', 'Attendance already taken!');
                } else {
                    $this->validate($request, [
                        'group_id' => 'required',
                        'subject_id' => 'required',
                        'attendance_date' => 'required',
                        'attendance_time' => 'required'
                    ]);


                    foreach ($request->attendance as $studentid => $attendance) {
                        StudentAttendance::create([
                            'student_id' => $studentid,
                            'group_id' => $request->group_id,
                            'subject_id' => $request->subject_id,
                            'attendance_date' => $request->attendance_date,
                            'attendance_time' => $request->attendance_time,
                            'attendence_status' => $attendance,
                            'created_by' => Auth::user()->id,
                        ]);
                    }
                }
            } else {
                return back()->with('error', 'Student attendance missing!');
            }
        } else {

            return back()->with('error', 'Please select student attendance!');
        }
        return redirect()->back()->with('success', 'Attendance inserted successfully!');
    }
}
