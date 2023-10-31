<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Models\News;
use App\Repositories\MediaRepository;
use App\Repositories\NewsRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index()
    {
        $newss = NewsRepository::getAll();
        return view('backend.dashboard.news.index', compact('newss'));
    }
    public function create()
    {
        return view('backend.dashboard.news.create');
    }
    public function store(NewsRequest $request)
    {
        NewsRepository::storeByRequest($request);
        return to_route('news.index')->with('success', 'News is created successfully!');
    }
    public function edit(News $news)
    {
        return view('backend.dashboard.news.edit', compact('news'));
    }
    public function update(NewsRequest $request, News $news)
    {
        NewsRepository::updateByRequest($request, $news);
        return back()->with('success', 'News is updated successfully!');
    }
    public function destroy(News $news)
    {
        if ($news->image_id) {
            $media = MediaRepository::find($news->image_id);
            if (Storage::exists($media->src)) {
                Storage::delete($media->src);
            }
        }
        $news->delete();
        $media->delete();
        return back()->with('success', 'News is deleted successfully!');
    }
    public function status(Request $request, News $news)
    {
        $isActive = false;
        if ($request->status == 1) {
            $isActive = true;
        }
        $news->update([
            'is_active' => $isActive,
        ]);
        return back()->with('success', 'Status is updated successfully!');
    }
}
