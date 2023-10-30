<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ResultRequest;
use App\Models\Result;
use App\Repositories\GroupRepository;
use App\Repositories\ResultRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ResultController extends Controller
{
    public function index()
    {
        $results = ResultRepository::getAll();
        $groups = GroupRepository::query()->where('is_active', true)->get();
        return view('backend.dashboard.result.index', compact('results', 'groups'));
    }
    public function store(ResultRequest $request)
    {
        ResultRepository::storeByRequest($request);
        return back()->with('success', 'Result is created successfully!');
    }
    public function update(ResultRequest $request, Result $result)
    {
        ResultRepository::updateByRequest($request, $result);
        return back()->with('success', 'Result is updated successfully!');
    }
    public function destroy(Result $result)
    {
        if (Storage::exists($result->document)) {
            Storage::delete($result->document);
        }
        $result->delete();
        return back()->with('success', 'Result is deleted successfully!');
    }
    public function status(Request $request, Result $result)
    {
        $isActive = false;
        if ($request->status == 1) {
            $isActive = true;
        }
        $result->update([
            'is_active' => $isActive,
        ]);
        return back()->with('success', 'Status is updated successfully!');
    }
}
