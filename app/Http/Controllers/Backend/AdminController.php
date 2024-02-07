<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;
use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        $admins = UserRepository::query()->where('role','admin')->get();
        return view('backend.dashboard.admin.index',compact('admins'));
    }
    public function create(){
        return view('backend.dashboard.admin.create');
    }
    public function store(AdminRequest $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'pds_id' => $request->pds_id,
            'phone' => $request->phone,
            'address' => $request->address,
            'password' => Hash::make($request->password),
        ]);
        return to_route('admin.index')->with('success','Admin created successfully!');

    }
    public function edit(User $user){
        return view('backend.dashboard.admin.edit',compact('user'));

    }
    public function update(AdminRequest $request, User $user){

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'pds_id' => $request->pds_id,
            'phone' => $request->phone,
            'address' => $request->address,
            'password' => $request->password ? Hash::make($request->password): $user->password,
        ]);
        return back()->with('success','Admin updated successfully!');

    }
    public function destroy(User $user){
        $user->delete();
        return back()->with('success','Admin deleted successfully!');

    }
    public function status(Request $request, User $user)
    {
        $isActive = false;
        if ($request->status == 1) {
            $isActive = true;
        }
        $user->update([
            'is_active' => $isActive,
        ]);
        return back()->with('success', 'Status is updated successfully!');
    }
}
