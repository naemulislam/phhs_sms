<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class LoginController extends Controller
{
    //School portal index
    public function schoolPortal()
    {
        if (auth()->check()) {
            return to_route('school.dashboard');
        }
        return view('auth.school.login');
    }
    public function schoolPortalStore(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (auth()->attempt($request->only('email', 'password'))) {

            return to_route('school.dashboard')->with('success', 'Successfully Login!');
        }
        return to_route('school.portal')->with('error','Oppes! You have entered invalid credentials');
    }
    public function schoolPortalLogout()
    {
        auth()->logout();
        return to_route('school.portal')->with('success', 'Logout successfully!');
    }
    //student portal index
    public function studentPortal()
    {
        if (auth()->check()) {
            return to_route('student.dashboard');
        }
        return view('auth.student.login');
    }
    public function studentPortalStore(Request $request)
    {
        $request->validate([
            'student_id' => 'required|max:10',
            'password' => 'required',
        ]);

        if (auth()->attempt($request->only('student_id', 'password'))) {
            return to_route('student.dashboard')->with('success','Successfully Login!');
        }
        return to_route('student.portal')->with('error','Oppes! You have entered invalid credentials');
    }
    public function studentPortalLogout()
    {
        auth()->logout();
        return to_route('student.portal')->with('success', 'Logout successfully!');
    }
    //user login index
    public function userLogin()
    {
        if (auth()->check()) {
            return to_route('user.dashboard');
        }
        return view('auth.user.login');
    }
    public function userLoginStore(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (auth()->attempt($request->only('email', 'password'))) {
            return to_route('user.dashboard')->with('success', 'Successfully Login!');
        }
        return to_route('user.login')->with('error', 'Oppes! You have entered invalid credentials');
    }
    public function userLogout()
    {
        auth()->logout();
        return to_route('user.login')->with('success', 'Logout successfully!');
    }
}
