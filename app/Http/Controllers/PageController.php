<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('pages.home');
    }

    public function about() {
        return view('pages.about');
    }

    public function contact() {
        return view('pages.contact');
    }

    public function submitContact(Request $request) {
        // Validation
        $validated = $request->validate([
            'email' => 'required|email',
            'message' => 'required|min:10',
        ]);

        // Simulate sending email (Log it)
        \Log::info('Contact Form Submitted by ' . $validated['email'] . ': ' . $validated['message']);

        return redirect()->route('contact')->with('status', 'Message sent!');
    }
}
