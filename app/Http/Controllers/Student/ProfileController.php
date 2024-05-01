<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentProfileRequest;
use App\Models\User;
use App\Repositories\AddressRepository;
use App\Repositories\StudentRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function profile(){
        return view('backend.students.dashboard.profile.profile');
    }
    public function editPassword(){
        return view('backend.students.dashboard.profile.edit_password');
    }
    public function studentProfileUpdate(StudentProfileRequest $request, User $user){
        StudentRepository::studentProfileUpdate($request, $user->id);
        AddressRepository::updateByRequest($request, $user->id);
        //dd($request->all());
        UserRepository::studentProfileUpdate($request, $user);
        return back()->with('success', 'Profile updated successfully!');
    }
    public function studentUpdatePassword(Request $request, User $user){
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'min:8|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:8'
        ]);
        $currentPassword = $request->current_password;
        $isPassword = Hash::check($currentPassword, $user->password);
        if ($isPassword) {
            UserRepository::updatePasswordByRrquest($request, $user);
            return back()->with('success', 'Password updated successfully!');
        } else {
            return back()->with('error', 'Sorry! Your current password dost not match.');
        }
    }

}
