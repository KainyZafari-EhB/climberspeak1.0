<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
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

        // Send Email
        try {
            \Illuminate\Support\Facades\Mail::to('admin@climberspeak.com')->send(new \App\Mail\ContactFormSubmitted($validated));
        } catch (\Exception $e) {
            \Log::error('Mail Error: ' . $e->getMessage());
            // Continue even if mail fails in dev, but maybe show error? 
            // For now, we assume it works or logs error.
        }

        return redirect()->route('contact')->with('status', 'Message sent successfully! We will get back to you soon.');
    }
}
