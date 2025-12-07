<?php

namespace App\Http\Controllers;

use App\Models\NewsItem;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    // Public: List all news
    public function index()
    {
        $news = NewsItem::latest()->get();
        return view('news.index', compact('news'));
    }

    // Public: Show one item
    public function show(NewsItem $newsItem)
    {
        return view('news.show', ['news' => $newsItem]);
    }

    // Admin: List news
    public function adminIndex()
    {
        $news = NewsItem::latest()->get();
        return view('admin.news.index', compact('news'));
    }

    // Admin: Show create form
    public function create()
    {
        return view('admin.news.create');
    }

    // Admin: Store data
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:5',
            'content' => 'required',
            'image' => 'nullable|image|max:2048',
            'published_at' => 'nullable|date',
        ]);

        if ($request->hasFile('image')) {
            // Store in 'storage/app/public/news_images'
            // Make sure to run 'php artisan storage:link'
            $path = $request->file('image')->store('news_images', 'public');
            $validated['image_path'] = '/storage/' . $path;
        }

        NewsItem::create($validated);

        return redirect()->route('admin.news.index')->with('status', 'News created!');
    }

    // Admin: Show edit form
    public function edit(NewsItem $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    // Admin: Update data
    public function update(Request $request, NewsItem $news)
    {
        $validated = $request->validate([
            'title' => 'required|min:5',
            'content' => 'required',
            'image' => 'nullable|image|max:2048',
            'published_at' => 'nullable|date',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('news_images', 'public');
            $validated['image_path'] = '/storage/' . $path;
        }

        $news->update($validated);

        return redirect()->route('admin.news.index')->with('status', 'News updated!');
    }

    // Admin: Delete
    public function destroy(NewsItem $news)
    {
        $news->delete();
        return redirect()->route('admin.news.index')->with('status', 'News deleted!');
    }
}

