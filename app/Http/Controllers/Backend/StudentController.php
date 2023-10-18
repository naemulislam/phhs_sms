<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Repositories\GroupRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //get all students
    public function index(){
        $students = UserRepository::query()->where('role','student')->get();
        return view('backend.dashboard.student.student_list',compact('students'));
    }
    public function create(){
        $groups = GroupRepository::query()->where('is_active', true)->get();
        return view('backend.dashboard.student.admission',compact('groups'));
    }
}
