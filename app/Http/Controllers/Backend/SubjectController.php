<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Repositories\GroupRepository;
use App\Repositories\MediaRepository;
use App\Repositories\SubjectRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = SubjectRepository::getAll();
        return view('backend.dashboard.subject.index', compact('subjects'));
    }

    public function create()
    {
        $groups = GroupRepository::query()->where('is_active', true)->get();
        return view('backend.dashboard.subject.create', compact('groups'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'code' => 'required|digits_between:2,5',
            'group_id' => 'required',
        ]);
        SubjectRepository::storeByRequest($request);
        return back()->with('success', 'Subject is created successfully!');
    }

    public function edit(Subject $subject)
    {
        $groups = GroupRepository::query()->where('is_active', true)->get();
        return view('backend.dashboard.subject.edit', compact('subject', 'groups'));
    }

    public function update(Request $request, Subject $subject)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'code' => 'required|digits_between:2,5',
            'group_id' => 'required',
        ]);
        SubjectRepository::updateByRequest($request, $subject);
        return back()->with('success', 'Subject is updated successfully!');
    }

    public function destroy(Subject $subject)
    {
        if ($subject->image_id != null) {
            $media = MediaRepository::find($subject->image_id);
            if (Storage::exists($media->src)) {
                Storage::delete($media->src);
            }
        }

        $subject->delete();
        $media->delete();
        return back()->with('success', 'Subject is delete successfully!');
    }

    public function status(Request $request, Subject $subject)
    {
        SubjectRepository::status($request, $subject);
        return back()->with('success', 'status is updated successfully!');
    }
}
