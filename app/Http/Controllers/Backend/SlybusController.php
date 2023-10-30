<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\SlybusRequest;
use App\Models\Slybus;
use App\Repositories\GroupRepository;
use App\Repositories\SlybusRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SlybusController extends Controller
{
    public function index()
    {
        $slybuss = SlybusRepository::getAll();
        $groups = GroupRepository::query()->where('is_active', true)->get();
        return view('backend.dashboard.slybus.index', compact('slybuss', 'groups'));
    }
    public function store(SlybusRequest $request)
    {
        SlybusRepository::storeByRequest($request);
        return back()->with('success', 'Slybus is created successfully!');
    }
    public function update(SlybusRequest $request, Slybus $slybus)
    {
        SlybusRepository::updateByRequest($request, $slybus);
        return back()->with('success', 'Slybus is updated successfully!');
    }
    public function destroy(Slybus $slybus)
    {
        if (Storage::exists($slybus->document)) {
            Storage::delete($slybus->document);
        }
        $slybus->delete();
        return back()->with('success', 'Slybus is deleted successfully!');
    }
    public function status(Request $request, Slybus $slybus)
    {
        $isActive = false;
        if ($request->status == 1) {
            $isActive = true;
        }
        $slybus->update([
            'is_active' => $isActive,
        ]);
        return back()->with('success', 'Status is updated successfully!');
    }
}
