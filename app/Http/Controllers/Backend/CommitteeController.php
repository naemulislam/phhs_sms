<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommitteeRequest;
use App\Models\Committee;
use App\Repositories\CommitteeRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CommitteeController extends Controller
{
    public function index(){
        $committees = CommitteeRepository::query()->latest()->where('is_active', true)->get();
        $oldCommittees = CommitteeRepository::query()->where('is_active', false)->get();
        return view('backend.dashboard.committee.index',compact('committees','oldCommittees'));
    }
    public function create(){
        return view('backend.dashboard.committee.create');
    }
    public function store(CommitteeRequest $request){
        CommitteeRepository::storeByRequest($request);
        return back()->with('success','Committee Created successfully!');

    }
    public function show(Committee $committee){
        return view('backend.dashboard.committee.show',compact('committee'));
    }
    public function edit(Committee $committee){
        return view('backend.dashboard.committee.edit',compact('committee'));
    }
    public function update(CommitteeRequest $request, Committee $committee){
        CommitteeRepository::updateByRequest($request, $committee);
        return back()->with('success','Committee updated successfully!');

    }
    public function destroy(Committee $committee){
        if(Storage::exists($committee->image)){
            Storage::delete($committee->image);
        }
        $committee->delete();
        return back()->with('success','Committee deleted successfully!');
    }
    public function status(Request $request, Committee $committee)
    {
        $isActive = false;
        if ($request->status == 1) {
            $isActive = true;
        }
        $committee->update([
            'is_active' => $isActive,
        ]);
        return back()->with('success', 'Status is updated successfully!');
    }
}
