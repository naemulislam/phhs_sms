<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ResultRequest;
use App\Http\Requests\SubmissionResultRequest;
use App\Models\Result;
use App\Models\SubmissionResult;
use App\Repositories\GroupRepository;
use App\Repositories\ResultRepository;
use App\Repositories\StudentRepository;
use App\Repositories\SubjectRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ResultController extends Controller
{
    //In this function below upload on the document only
    public function index()
    {
        $results = ResultRepository::getAll();
        $groups = GroupRepository::query()->where('is_active', true)->get();
        return view('backend.dashboard.result.index', compact('results', 'groups'));
    }
    public function store(ResultRequest $request)
    {
        ResultRepository::storeByRequest($request);
        return back()->with('success', 'Result is created successfully!');
    }
    public function update(ResultRequest $request, Result $result)
    {
        ResultRepository::updateByRequest($request, $result);
        return back()->with('success', 'Result is updated successfully!');
    }
    public function destroy(Result $result)
    {
        if (Storage::exists($result->document)) {
            Storage::delete($result->document);
        }
        $result->delete();
        return back()->with('success', 'Result is deleted successfully!');
    }
    public function status(Request $request, Result $result)
    {
        $isActive = false;
        if ($request->status == 1) {
            $isActive = true;
        }
        $result->update([
            'is_active' => $isActive,
        ]);
        return back()->with('success', 'Status is updated successfully!');
    }
    //In this function below custom result management subject wise
    public function resultList(){
        $data['resultSheet'] = SubmissionResult::select('group_id', 'subject_id', 'exam_type')->distinct()->get();
        $data['totalStudents'] = SubmissionResult::select('group_id','subject_id', 'exam_type')->count();
        // return $data['totalStudents'];
        return view('backend.dashboard.result.result_list',$data);
    }
    public function resultCreate(){
        $groups = GroupRepository::query()->where('is_active',true)->get();
        return view('backend.dashboard.result.create',compact('groups'));

    }
    public function getStudentsList($id)
    {
        $students = StudentRepository::query()->with('user')->where('status', 1)->where('group_id', $id)->orderby('roll', 'asc')->get();
        $html = '';
        foreach ($students as $key => $student) {
            $image = asset('defaults/noimage/no_img.jpg');
            // if ($student->user->profile_id) {
            //     $image = $student->user->profile_id->image->file;
            // }
            $increment = $key + 1;
            $html .= '
            <tr>
            <input type="hidden" name="student_id[]" value="' . $student->id . '">
            <input type="hidden" name="roll[]" value="' . $student->roll . '">

            <td>' . $increment . '</td>
            <td>
            <img src=' . "$image" . ' style="width: 50px; height:60px;">
            </td>
            <td>' . $student->applicant_name . '</td>
            <td>' . $student->roll . '</td>
            <td><input type="number" name="mark[]" class="form-control" placeholder="Enter mark"></td>
            </tr>';
        }
        return $html;
    }
    public function getSubjects($id)
    {
        $subjects = SubjectRepository::query()->where('group_id', $id)->where('is_active', true)->get();
        $html = '<option selected disabled>Select a subject</option>';
        foreach ($subjects as $subject) {
            $html .= '<option value="' . $subject->id . '">' . $subject->name . '</option>';
        }
        return $html;
        // return response()->json(['success' => true]);
    }

    public function resultStore(SubmissionResultRequest $request)
    {

        if (!empty($request->student_id)) {
            $checkResult = SubmissionResult::where([
                ['group_id', $request->group_id],
                ['subject_id', $request->subject_id],
                ['exam_type', $request->exam_type],
                ['year', $request->exam_year],
            ])->first();
            if ($checkResult) {
                return back()->with('error', 'This subject result already uploaded!');
            } else {
                $students = $request->student_id;
                foreach ($students as $key => $student) {
                    SubmissionResult::create([
                        'group_id' => $request->group_id,
                        'subject_id' => $request->subject_id,
                        'student_id' => $student,
                        'roll' => $request->roll[$key],
                        'mark' => $request->mark[$key],
                        'exam_type' => $request->exam_type,
                        'year' => $request->exam_year,
                    ]);
                }
                return back()->with('success', 'Successfully added this result!');
            }
        } else {
            return back()->with('error', 'Student are missing!');
        }
    }
    public function resultEdit($group, $subject, $examType)
    {
        $data['results'] = SubmissionResult::where('group_id', $group)->where('subject_id', $subject)->where('exam_type', $examType)->get();
        return view('backend.dashboard.result.result_edit', $data);
    }
    public function resultUpdate(Request $request)
    {
        if (!empty($request->mark)) {
            $resultIds = $request->result_id;
            foreach ($resultIds as $key => $id) {
                $result_id = SubmissionResult::where('id', $id)->first();
                $result_id->update([
                    'mark' => $request->mark[$key]
                ]);
            }
            return back()->with('success', 'Successfully updated this result!');
        } else {
            return back()->with('error', 'Student are missing!');
        }
    }
    public function resultDestroy($group, $subject, $examType)
    {
        $data['results'] = SubmissionResult::where('group_id', $group)->where('subject_id', $subject)->where('exam_type', $examType)->get();
        foreach ($data['results'] as $result) {
            $data = SubmissionResult::find($result->id);
            $data->delete();
        }
        return back()->with('doneMessage', 'Successfully deleted this result!');
    }
    public function resultSearch()
    {
        $data['groups'] = GroupRepository::query()->where('is_active', true)->get();
        $data['years'] = SubmissionResult::select('year')->distinct()->get();
        // $data['examTypes'] = SubmissionResult::select('exam_type')->distinct()->get();
        return view('backend.dashboard.result.search_result', $data);
    }
    public function resultSearchFound(Request $request)
    {
        $request->validate([
            'group_id' => 'required',
            'year' => 'required',
            'exam_type' => 'required',
            'roll' => 'required',
        ]);
        $datas = SubmissionResult::with('student')->where('group_id', $request->group_id)
            ->where('year', $request->year)
            ->where('exam_type', $request->exam_type)
            ->where('roll', $request->roll)->get();
        $total_marks = SubmissionResult::with('student')->where('group_id', $request->group_id)
            ->where('year', $request->year)
            ->where('exam_type', $request->exam_type)
            ->where('roll', $request->roll)->sum('mark');
        // return $datas;
        // return $datas->first()->student->name;
        if ($datas->count()) {
            $data['results'] = $datas;
            $data['total_marks'] = $total_marks;
            return view('backend.dashboard.result.search_found', $data);
        } else {
            return back()->with('error', 'Data Not Found!');
        }
    }
}
