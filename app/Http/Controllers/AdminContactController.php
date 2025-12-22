<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;

class AdminContactController extends Controller
{
    /**
     * Display a listing of all contact messages.
     */
    public function index()
    {
        $messages = ContactMessage::latest()->get();
        return view('admin.contact.index', compact('messages'));
    }

    /**
     * Display the specified contact message.
     */
    public function show(ContactMessage $message)
    {
        // Mark as read when viewed
        if (!$message->is_read) {
            $message->update(['is_read' => true]);
        }

        return view('admin.contact.show', compact('message'));
    }

    /**
     * Remove the specified contact message.
     */
    public function destroy(ContactMessage $message)
    {
        $message->delete();
        return redirect()->route('admin.contact.index')->with('status', 'Message deleted successfully!');
    }
}
