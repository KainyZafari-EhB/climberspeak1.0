<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForumCommentController extends Controller
{
    public function store(\Illuminate\Http\Request $request, $postId)
    {
        $request->validate([
            'body' => 'required|string|max:1000',
        ]);

        $post = \App\Models\ForumPost::findOrFail($postId);

        \App\Models\ForumComment::create([
            'body' => $request->body,
            'user_id' => auth()->id(),
            'forum_post_id' => $post->id,
        ]);

        return back()->with('success', 'Comment posted!');
    }
}
