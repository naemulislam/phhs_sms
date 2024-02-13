<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function userRegister(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:20',
            'register_email' => 'required|email',
            'phone' => 'required|min:11|max:11',
            'reginter_password' => 'required|required_with:password_confirmation',
            'password_confirmation' => 'required',
        ]);
        UserRepository::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->reginter_password)
        ]);
        return back()->with('success', 'Successfully! Registered');
    }
}
