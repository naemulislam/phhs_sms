<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\NoticeRequest;
use App\Models\Notice;
use App\Repositories\NoticeRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NoticeController extends Controller
{
    public function index()
    {
        $notices = NoticeRepository::getAll();
        return view('backend.dashboard.notice.index', compact('notices'));
    }
    public function create()
    {
        return view('backend.dashboard.notice.create');
    }
    public function store(NoticeRequest $request)
    {
        NoticeRepository::storeByRequest($request);
        return back()->with('success', 'Notice is created successfully!');
    }
    public function edit(Notice $notice)
    {
        return view('backend.dashboard.notice.edit', compact('notice'));
    }
    public function update(NoticeRequest $request, Notice $notice)
    {
        NoticeRepository::updateByRequest($request, $notice);
        return back()->with('success', 'Notice is updated successfully!');
    }
    public function destroy(Notice $notice)
    {
        if (Storage::exists($notice->document)) {
            Storage::delete($notice->document);
        }
        $notice->delete();
        return back()->with('success', 'Notice is deleted successfully!');
    }
    public function status(Request $request, Notice $notice)
    {
        $isActive = false;
        if ($request->status == 1) {
            $isActive = true;
        }
        $notice->update([
            'is_active' => $isActive,
        ]);
        return back()->with('success', 'Status is updated successfully!');
    }
}
