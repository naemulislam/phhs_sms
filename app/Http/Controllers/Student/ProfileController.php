<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(){
        return view('backend.students.dashboard.profile.profile');
    }
    public function editPassword(){
        return view('backend.students.dashboard.profile.edit_password');
    }

}
