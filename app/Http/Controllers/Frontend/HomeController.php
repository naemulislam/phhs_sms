<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Home page show
    public function index(){
        return view('frontend.home');
    }
    // history page show
    public function history(){
        return view('frontend.history');
    }
    // principleInfo page show
    public function principleInfo(){
        return view('frontend.principle_info');
    }
    // teachers page show
    public function teachers(){
        return view('frontend.school_teacher');
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
