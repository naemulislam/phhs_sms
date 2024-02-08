<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminProfileRequest;
use App\Http\Requests\SchoolStaffRequest;
use App\Models\User;
use App\Repositories\AddressRepository;
use App\Repositories\AdminProfileRepository;
use App\Repositories\StaffRepository;
use App\Repositories\TeacherRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function profile()
    {
        // if (Auth::user()->role == 'admin') {
            return view('backend.dashboard.profile.profile_master');
        // } elseif (Auth::user()->role == 'teacher') {
        //     return view('backend.dashboard.profile.teacher_profile');
        // } else {
        //     return view('backend.dashboard.profile.staff_profile');
        // }
    }
    public function adminUpdate(AdminProfileRequest $request, User $user)
    {
        AdminProfileRepository::adminProfile($request, $user);
        return back()->with('success', 'Profile updated successfully!');
    }
    //In this function is school staff and teacher profile update
    public function schoolStaffUpdate(SchoolStaffRequest $request, User $user)
    {
        if ($user->role == 'teacher') {
            TeacherRepository::teacherProfileUpdate($request, $user->id);
        } else {
            StaffRepository::staffProfileUpdate($request, $user->id);
        }
        AddressRepository::updateByRequest($request, $user->id);
        //dd($request->all());
        UserRepository::schoolStaffProfile($request, $user);
        return back()->with('success', 'Profile updated successfully!');
    }
    public function editPassword()
    {
        return view('backend.dashboard.profile.edit_password');
    }
    public function updatePassword(Request $request, User $user)
    {
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
