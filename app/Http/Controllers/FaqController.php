<?php

namespace App\Http\Controllers;

use App\Models\FaqCategory;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index() {
        // Eager Loading: Get Categories WITH their items to save database queries
        $categories = FaqCategory::with('items')->get();
        return view('faq.index', compact('categories'));
    }

    public function create() {
        $categories = FaqCategory::all(); // Needed for the dropdown
        return view('admin.faq.create', compact('categories'));
    }

}
