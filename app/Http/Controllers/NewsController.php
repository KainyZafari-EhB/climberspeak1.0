<?php

namespace App\Http\Controllers;

use App\Models\NewsItem;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    // Public: List all news
    public function index() {
        $news = NewsItem::latest()->get();
        return view('news.index', compact('news'));
    }

    // Public: Show one item
    public function show(NewsItem $newsItem) {
        return view('news.show', compact('newsItem'));
    }

    // Admin: Show create form
    public function create() {
        return view('admin.news.create');
    }

    // Admin: Store data
    public function store(Request $request) {
        $validated = $request->validate([
            'title' => 'required|min:5',
            'content' => 'required',
            'image' => 'image|nullable', // We will handle file upload in Step 5
            'published_at' => 'nullable|date',
        ]);

        NewsItem::create($validated);

        return redirect()->route('news.index')->with('status', 'News created!');
    }

    // Note: We will add edit/update/destroy in Step 5 when building the Admin Panel
}
