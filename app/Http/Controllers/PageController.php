<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $users = collect();

        if ($query) {
            $users = User::where('name', 'like', "%{$query}%")
                ->orWhere('username', 'like', "%{$query}%")
                ->get();
        }

        return view('pages.search', compact('users', 'query'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        // Generate a simple math captcha
        $num1 = rand(1, 10);
        $num2 = rand(1, 10);
        session(['captcha_result' => $num1 + $num2]);

        return view('pages.contact', compact('num1', 'num2'));
    }

    public function submitContact(Request $request)
    {
        // Validation
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'nullable',
            'subject' => 'required',
            'message' => 'required|min:10',
            'captcha' => 'required|integer',
        ]);

        // Verify Captcha
        if ($request->captcha != session('captcha_result')) {
            return back()->withErrors(['captcha' => 'Incorrect math answer. Please try again.'])->withInput();
        }

        // Save to database
        \App\Models\ContactMessage::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'subject' => $validated['subject'],
            'message' => $validated['message'],
        ]);

        return redirect()->route('contact')->with('status', 'Message sent successfully! We will get back to you soon.');
    }
}
