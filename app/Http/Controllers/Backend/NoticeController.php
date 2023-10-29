<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\NoticeRequest;
use App\Models\Notice;
use App\Repositories\NoticeRepository;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function index(){
        $notices = NoticeRepository::getAll();
        return view('backend.dashboard.notice.index',compact('notices'));
    }
    public function create(){
        return view('backend.dashboard.notice.create');
    }
    public function store(NoticeRequest $request){
        NoticeRepository::storyByRequest($request);
        return back()->with('success','Notice is created successfully!');
    }
    public function edit(Notice $notice){
        return view('backend.dashboard.notice.edit',compact('notice'));
    }
}
