<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Campas;
use App\Models\ComputerLab;
use App\Models\Contact;
use App\Models\Institute;
use App\Models\Notice;
use App\Models\Slider;
use App\Repositories\AchievementRepository;
use App\Repositories\NewsRepository;
use App\Repositories\NoticeRepository;
use App\Repositories\TeacherRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    // Home page show
    public function index(){
        $data['headingNotic'] = NoticeRepository::query()->latest()->where('is_active',true)->take(1)->first();
        $data['notices'] = NoticeRepository::query()->latest()->where('is_active',true)->take(6)->get();
        $data['computerLab'] = ComputerLab::latest()->first();
        //institute campas
        $data['instituteCampases'] = Campas::where('is_active', true)->get();
        //News of institute
        $data['instituteNews'] = NewsRepository::query()->where('is_active', true)->get();
        //Achivement of institute
        $data['instituteAchivements'] = AchievementRepository::query()->where('is_active', true)->get();
        //slider
        $data['sliders'] = Slider::where('is_active', true)->get();

        return view('frontend.home',$data);
    }
    // history page show
    public function history(){
        //History of institute
        $data['historyInstitute'] =Institute::latest()->first();
        return view('frontend.history',$data);
    }
    // principleInfo page show
    public function principleInfo(){
        return view('frontend.principle_info');
    }
    // teachers page show
    public function teachers(){
        // $users = UserRepository::query()->where('role','teacher')->where('is_active',true)->get();
        // dd($users->teachers);
        // $data['users'] = TeacherRepository::query()->where('role','teacher')->where('is_active',true)->get();
        $teachers = TeacherRepository::query()->whereHas('user', function ($query) {
            $query->where('role', 'teacher')->where('is_active',true);
        })->get();

        $totalTeachers= TeacherRepository::query()->whereHas('user', function ($query) {
            $query->where('role', 'teacher')->where('is_active',true);
        })->count();

        $maleTeachers= TeacherRepository::query()->where('gender','male')->whereHas('user', function ($query) {
            $query->where('role', 'teacher')->where('is_active',true);
        })->count();
        $femaleTeachers= TeacherRepository::query()->where('gender','female')->whereHas('user', function ($query) {
            $query->where('role', 'teacher')->where('is_active',true);
        })->count();
        // dd($teachers);
        // dd($data['users']->teacher);
        return view('frontend.school_teacher',compact('teachers','totalTeachers','maleTeachers','femaleTeachers'));
    }
    // students page show
    public function students(){
        return view('frontend.students');
    }
    // classRoutin page show
    public function classRoutin(){
        return view('frontend.class_routin');
    }
    // examRoutin page show
    public function examRoutin(){
        return view('frontend.exam_routin');
    }
    // sylebus page show
    public function sylebus(){
        return view('frontend.sylebus');
    }
    // result page show
    public function result(){
        return view('frontend.result');
    }
    // academicSubject page show
    public function academicSubject(){
        return view('frontend.academic_subject');
    }
    // galleryPhoto page show
    public function galleryPhoto(){
        return view('frontend.image_gallery');
    }
    // videoGallery page show
    public function videoGallery(){
        return view('frontend.video_gallery');
    }
    // contact page show
    public function contact(){
        return view('frontend.contact');
    }
    // schoolStaff page show
    public function schoolStaff(){
        return view('frontend.school_staff');
    }
    // All Notice page show
    public function allNotice(){
        return view('frontend.all_notice');
    }
    //Annual result page show
    public function annualResult(){
        return view('frontend.yearly_result');
    }
    public function contactStore(ContactRequest $request){
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'is_seen' => true
        ]);
        return back()->with('success','Message send successfully!');

    }
}
