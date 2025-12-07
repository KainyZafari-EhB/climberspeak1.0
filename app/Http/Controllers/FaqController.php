<?php

namespace App\Http\Controllers;

use App\Models\FaqCategory;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        // Eager Loading: Get Categories WITH their items to save database queries
        $categories = FaqCategory::with('items')->get();
        return view('faq.index', compact('categories'));
    }

    // Admin: List FAQs
    public function adminIndex()
    {
        $categories = FaqCategory::with('items')->get();
        return view('admin.faq.index', compact('categories'));
    }

    // Admin: Show create form
    public function create()
    {
        $categories = FaqCategory::all();
        return view('admin.faq.create', compact('categories'));
    }

    // Admin: Store FAQ
    public function store(Request $request)
    {
        $validated = $request->validate([
            'question' => 'required',
            'answer' => 'required',
            'faq_category_id' => 'required|exists:faq_categories,id',
        ]);

        \App\Models\FaqItem::create($validated);

        return redirect()->route('admin.faq.index')->with('status', 'FAQ Item created!');
    }

    // Admin: Delete
    public function destroy(\App\Models\FaqItem $faq)
    {
        $faq->delete();
        return redirect()->route('admin.faq.index')->with('status', 'FAQ Item deleted!');
    }
}
