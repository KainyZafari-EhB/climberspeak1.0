<?php

namespace App\Http\Controllers;

use App\Models\ClimbingEvent;
use Illuminate\Http\Request;

class ClimbingEventController extends Controller
{
    public function index() {
        $events = ClimbingEvent::orderBy('date')->get();
        return view('events.index', compact('events'));
    }

    public function create() {
        return view('events.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'title' => 'required',
            'location' => 'required',
            'date' => 'required|date|after:today',
            'description' => 'required',
        ]);

        ClimbingEvent::create($validated);
        return redirect()->route('events.index');
    }

    // The Special "Join" Feature
    public function join(ClimbingEvent $event) {
        // Toggle: If user is attached, detach. If not, attach.
        $event->users()->toggle(auth()->id());

        return back()->with('status', 'Attendance updated!');
    }
}
