<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AchievementRequest;
use App\Models\Achievement;
use App\Repositories\AchievementRepository;
use App\Repositories\MediaRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AchievementController extends Controller
{
    public function index()
    {
        $achievements = AchievementRepository::getAll();
        return view('backend.dashboard.achievement.index', compact('achievements'));
    }
    public function create()
    {
        return view('backend.dashboard.achievement.create');
    }
    public function store(AchievementRequest $request)
    {
        AchievementRepository::storeByRequest($request);
        return to_route('achievement.index')->with('success', 'Achievement is created successfully!');
    }
    public function edit(Achievement $achievement)
    {
        return view('backend.dashboard.achievement.edit', compact('achievement'));
    }
    public function update(AchievementRequest $request, Achievement $achievement)
    {
        AchievementRepository::updateByRequest($request, $achievement);
        return back()->with('success', 'Achievement is updated successfully!');
    }
    public function destroy(Achievement $achievement)
    {
        $media = MediaRepository::find($achievement->image_id);
        if (Storage::exists($media->src)) {
            Storage::delete($media->src);
        }
        $achievement->delete();
        $media->delete();
        return back()->with('success', 'Achievement is deleted successfully!');
    }
    public function status(Request $request, Achievement $achievement)
    {
        $isActive = false;
        if ($request->status == 1) {
            $isActive = true;
        }
        $achievement->update([
            'is_active' => $isActive,
        ]);
        return back()->with('success', 'Status is updated successfully!');
    }
}
