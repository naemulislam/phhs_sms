<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Campas;
use App\Models\ComputerLab;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Group;
use App\Models\Institute;
use App\Models\Slider;
use App\Models\SubmissionResult;
use App\Repositories\AchievementRepository;
use App\Repositories\ClassRoutineRepository;
use App\Repositories\CommitteeRepository;
use App\Repositories\ExamRoutineRepository;
use App\Repositories\GroupRepository;
use App\Repositories\NewsRepository;
use App\Repositories\NoticeRepository;
use App\Repositories\ResultRepository;
use App\Repositories\SlybusRepository;
use App\Repositories\StaffRepository;
use App\Repositories\StudentRepository;
use App\Repositories\TeacherRepository;

class HomeController extends Controller
{
    // Home page show
    public function index()
    {
        $data['headingNotic'] = NoticeRepository::query()->latest()->where('is_active', true)->take(1)->first();
        $data['notices'] = NoticeRepository::query()->latest()->where('is_active', true)->take(6)->get();
        $data['computerLab'] = ComputerLab::latest()->first();
        //institute campas
        $data['instituteCampases'] = Campas::where('is_active', true)->get();
        //News of institute
        $data['instituteNews'] = NewsRepository::query()->where('is_active', true)->get();
        //Achivement of institute
        $data['instituteAchivements'] = AchievementRepository::query()->where('is_active', true)->get();
        //slider
        $data['sliders'] = Slider::where('is_active', true)->get();
        // $groups = GroupRepository::query()->where('is_active', true)->get();

        return view('frontend.home', $data);
    }
    // history page show
    public function history()
    {
        //History of institute
        $data['historyInstitute'] = Institute::latest()->first();
        return view('frontend.history', $data);
    }
    // principleInfo page show
    public function principleInfo()
    {
        return view('frontend.principle_info');
    }
    // teachers page show
    public function teachers()
    {
        $teachers = TeacherRepository::query()->whereHas('user', function ($query) {
            $query->where('role', 'teacher')->where('is_active', true);
        })->get();

        $totalTeachers = TeacherRepository::query()->whereHas('user', function ($query) {
            $query->where('role', 'teacher')->where('is_active', true);
        })->count();

        $maleTeachers = TeacherRepository::query()->where('gender', 'male')->whereHas('user', function ($query) {
            $query->where('role', 'teacher')->where('is_active', true);
        })->count();
        $femaleTeachers = TeacherRepository::query()->where('gender', 'female')->whereHas('user', function ($query) {
            $query->where('role', 'teacher')->where('is_active', true);
        })->count();
        return view('frontend.school_teacher', compact('teachers', 'totalTeachers', 'maleTeachers', 'femaleTeachers'));
    }
    // students page show
    public function students(Group $group)
    {
        // get all student is active
        $data['students'] = StudentRepository::query()->where('group_id',$group->id)->where('status',1)->whereHas('user', function($query){
            $query->where('role','student')->where('is_active',true);
        })->get();
        // get class wise total student
        $data['totalStudents'] = StudentRepository::query()->where('group_id',$group->id)->where('status',1)->whereHas('user', function($query){
            $query->where('role','student')->where('is_active',true);
        })->count();
        // get class wise total male student
        $data['maleStudents'] = StudentRepository::query()->where('gender','male')->where('group_id',$group->id)->where('status',1)->whereHas('user', function($query){
            $query->where('role','student')->where('is_active',true);
        })->count();
        // get class wise total female student
        $data['femaleStudents'] = StudentRepository::query()->where('gender','female')->where('group_id',$group->id)->where('status',1)->whereHas('user', function($query){
            $query->where('role','student')->where('is_active',true);
        })->count();

        return view('frontend.students', $data,compact('group'));
    }
    // classRoutin page show
    public function classRoutin()
    {
        $classRoutines = ClassRoutineRepository::query()->where('is_active',true)->get();
        return view('frontend.class_routin',compact('classRoutines'));
    }
    // examRoutin page show
    public function examRoutin()
    {
        $examRoutines = ExamRoutineRepository::query()->where('is_active',true)->get();
        return view('frontend.exam_routin',compact('examRoutines'));
    }
    // sylebus page show
    public function sylebus()
    {
        $slybuses = SlybusRepository::query()->where('is_active',true)->get();
        return view('frontend.sylebus',compact('slybuses'));
    }
    // result page show
    public function result()
    {
        $results = ResultRepository::query()->where('is_active',true)->get();
        return view('frontend.result',compact('results'));
    }
    public function forntResultSearch(){
        $groups = GroupRepository::query()->where('is_active', true)->get();
        $years = SubmissionResult::select('year')->distinct()->get();
        return view('frontend.result_search',compact('groups','years'));
    }
    // academicSubject page show
    public function academicSubject()
    {
        $groups = GroupRepository::query()->where('is_active',true)->get();
        return view('frontend.academic_subject',compact('groups'));
    }
    // galleryPhoto page show
    public function galleryPhoto()
    {
        $galleries = Gallery::latest()->where('is_active',true)->get();
        return view('frontend.image_gallery',compact('galleries'));
    }
    // videoGallery page show
    public function videoGallery()
    {
        return view('frontend.video_gallery');
    }
    // contact page show
    public function contact()
    {
        return view('frontend.contact');
    }
    // schoolStaff page show
    public function schoolStaff()
    {
        $staffs = StaffRepository::query()->whereHas('user', function($query){
            $query->where('role', 'staff')->where('is_active',true);
        })->get();
        $totalStaffs = StaffRepository::query()->whereHas('user', function ($query) {
            $query->where('role', 'staff')->where('is_active', true);
        })->count();

        $maleStaffs = StaffRepository::query()->where('gender', 'male')->whereHas('user', function ($query) {
            $query->where('role', 'staff')->where('is_active', true);
        })->count();
        $femaleStaff = StaffRepository::query()->where('gender', 'female')->whereHas('user', function ($query) {
            $query->where('role', 'staff')->where('is_active', true);
        })->count();
        return view('frontend.school_staff',compact('staffs','totalStaffs','maleStaffs','femaleStaff'));
    }
    public function newCommitteeIndex(){
        $committees = CommitteeRepository::query()->where('is_active', true)->get();
        return view('frontend.new_committee', compact('committees'));
    }
    public function oldCommitteeIndex(){
        $committees = CommitteeRepository::query()->where('is_active', false)->get();
        return view('frontend.old_committee', compact('committees'));
    }
    // All Notice page show
    public function allNotice()
    {
        $allNotices = NoticeRepository::query()->where('is_active',true)->get();
        return view('frontend.all_notice',compact('allNotices'));
    }
    //Annual result page show
    public function annualResult()
    {
        return view('frontend.yearly_result');
    }
    public function contactStore(ContactRequest $request)
    {
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'is_seen' => true
        ]);
        return back()->with('success', 'Message send successfully!');
    }
}
