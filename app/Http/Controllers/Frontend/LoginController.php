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
            $notification = [
                'message' => 'successfully Login!',
                'alert-type' => 'success'
            ];
            return to_route('school.dashboard')->with($notification);
        }
        $notification = [
            'message' => 'Oppes! You have entered invalid credentials',
            'alert-type' => 'error'
        ];
        return to_route('school.portal')->with($notification);
    }
    public function schoolPortalLogout()
    {
        auth()->logout();
        $notification = [
            'message' => 'Logout successfully!',
            'alert-type' => 'success'
        ];
        return to_route('school.portal')->with($notification);
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
            'email' => 'required',
            'password' => 'required',
        ]);

        if (auth()->attempt($request->only('email', 'password'))) {
            $notification = [
                'message' => 'successfully Login!',
                'alert-type' => 'success'
            ];
            return to_route('student.dashboard')->with($notification);
        }
        $notification = [
            'message' => 'Oppes! You have entered invalid credentials',
            'alert-type' => 'error'
        ];
        return to_route('student.portal')->with($notification);
    }
    public function studentPortalLogout()
    {
        auth()->logout();
        $notification = [
            'message' => 'Logout successfully!',
            'alert-type' => 'success'
        ];
        return to_route('student.portal')->with($notification);
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
            $notification = [
                'message' => 'successfully Login!',
                'alert-type' => 'success'
            ];
            return to_route('user.dashboard')->with($notification);
        }
        $notification = [
            'message' => 'Oppes! You have entered invalid credentials',
            'alert-type' => 'error'
        ];
        return to_route('user.login')->with($notification);
    }
    public function userLogout()
    {
        auth()->logout();
        $notification = [
            'message' => 'Logout successfully!',
            'alert-type' => 'success'
        ];
        return to_route('user.login')->with($notification);
    }
}
