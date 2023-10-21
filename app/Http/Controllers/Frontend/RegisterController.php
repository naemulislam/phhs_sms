<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function portalRegister(Request $request)
    {
        $request->validate([
            'signup_pds_id' => 'required|max:10',
            'signup_email' => 'required|email',
            'signup_password' => 'required',
            'password_confirmation' => 'required|same:signup_password',
        ]);
        $user = UserRepository::query()->where('pds_id', $request->signup_pds_id)->first();
        if ($user) {
            $user->update([
                'email' => $request->signup_email,
                'password' => Hash::make($request->signup_password)
            ]);
            return back()->with('success', 'Successfully! Registered');
        } else {
            return back()->with('error', 'Your PDS ID does not match!');
        }
    }
    public function studentRegister(Request $request)
    {
        $request->validate([
            'signup_student_id' => 'required|max:10',
            'signup_password' => 'required',
            'password_confirmation' => 'required|same:signup_password',
        ]);
        $user = UserRepository::query()->where('student_id', $request->signup_student_id)->first();
        if ($user) {
            $user->update([
                'password' => Hash::make($request->signup_password)
            ]);
            return back()->with('success', 'Successfully! Registered');
        } else {
            return back()->with('error', 'Your student ID does not match!');
        }
    }
}
