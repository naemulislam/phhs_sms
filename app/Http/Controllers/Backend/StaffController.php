<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StaffRequest;
use App\Models\Staff;
use App\Models\User;
use App\Repositories\AddressRepository;
use App\Repositories\MediaRepository;
use App\Repositories\StaffRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StaffController extends Controller
{
    public function index()
    {
        $staffs = StaffRepository::getAll();
        return view('backend.dashboard.staff.index', compact('staffs'));
    }
    public function create()
    {
        return view('backend.dashboard.staff.create');
    }
    public function store(StaffRequest $request)
    {
        $userId = UserRepository::staffCreate($request);
        StaffRepository::storeByRequest($request, $userId);
        AddressRepository::storeByRequest($request, $userId);
        return back()->with('success', 'Staff is created successfully!');
    }
    public function show(Staff $staff)
    {
        $address = AddressRepository::query()->where('user_id', $staff->user->id)->first();
        return view('backend.dashboard.staff.show', compact('staff', 'address'));
    }
    public function edit(Staff $staff)
    {
        $address = AddressRepository::query()->where('user_id', $staff->user->id)->first();
        return view('backend.dashboard.staff.edit', compact('staff', 'address'));
    }
    public function update(StaffRequest $request, Staff $staff)
    {
        UserRepository::updateStaff($request, $staff->user_id);
        StaffRepository::updateByRequest($request, $staff);
        AddressRepository::updateByRequest($request, $staff->user_id);
        return back()->with('success', 'Staff is updated successfully!');
    }
    public function destroy(Staff $staff)
    {
        $media = MediaRepository::find($staff->user->profile_id);
        if (Storage::exists($media->src)) {
            Storage::delete($media->src);
        }
        $address = AddressRepository::query()->where('user_id', $staff->user->id)->first();
        $staff->delete();
        $address->delete();
        $staff->user->delete();
        $media->delete();
        return back()->with('success', 'Staff is deleted successfully!');
    }
    public function status(Request $request, Staff $staff)
    {
        $user = UserRepository::query()->where('id', $staff->user_id)->first();
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
