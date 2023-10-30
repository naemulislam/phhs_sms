<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Repositories\GroupRepository;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index()
    {
        $groups = GroupRepository::query()->orderBy('id', 'desc')->get();
        return view('backend.dashboard.group.index', compact('groups'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        GroupRepository::storeByRequest($request);
        return back()->with('success', 'Class is created successfully!');
    }
    public function update(Request $request, Group $group)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        GroupRepository::updateByRequest($request, $group);
        return back()->with('success', 'Class is updated successfully!');
    }
    public function destroy(Group $group)
    {
        $group->delete();
        return back()->with('success', 'class is delete successfully!');
    }
    public function status(Request $request, Group $group)
    {
        GroupRepository::status($request, $group);
        return back()->with('success', 'status is updated successfully!');
    }
}
