<?php

namespace App\Http\Controllers;

use App\Models\ClimbingEvent;
use Illuminate\Http\Request;

class ClimbingEventController extends Controller
{
    public function index()
    {
        $events = ClimbingEvent::orderBy('date')->get();
        return view('events.index', compact('events'));
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'location' => 'required',
            'date' => 'required|date|after:today',
            'time' => 'required',
            'description' => 'required',
        ]);

        // Combine date and time
        $validated['date'] = $validated['date'] . ' ' . $validated['time'];
        unset($validated['time']); // Remove time as it's not in the model

        ClimbingEvent::create($validated);
        return redirect()->route('events.index');
    }

    public function show(ClimbingEvent $event)
    {
        return view('events.show', compact('event'));
    }

    // The Special "Join" Feature
    public function join(ClimbingEvent $event)
    {
        // Toggle: If user is attached, detach. If not, attach.
        $event->users()->toggle(auth()->id());

        return back()->with('status', 'Attendance updated!');
    }
    // Admin: List Events
    public function adminIndex()
    {
        $events = ClimbingEvent::orderBy('date')->get();
        return view('admin.events.index', compact('events'));
    }

    // Admin: Edit Event
    public function edit(ClimbingEvent $event)
    {
        return view('admin.events.edit', compact('event'));
    }

    // Admin: Update Event
    public function update(Request $request, ClimbingEvent $event)
    {
        $validated = $request->validate([
            'title' => 'required',
            'location' => 'required',
            'date' => 'required|date', // Combined date/time input or just date
            'time' => 'required', // If separate
            'description' => 'required',
        ]);

        $validated['date'] = $validated['date'] . ' ' . $validated['time'];
        unset($validated['time']);

        $event->update($validated);
        return redirect()->route('admin.events.index')->with('status', 'Event updated!');
    }

    // Admin: Delete Event
    public function destroy(ClimbingEvent $event)
    {
        $event->delete();
        return redirect()->route('admin.events.index')->with('status', 'Event deleted!');
    }
}
