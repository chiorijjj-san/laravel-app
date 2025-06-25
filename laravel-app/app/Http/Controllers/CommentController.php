<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function store(Request $request, Post $post) {
        $request->validate([
            'body' => 'required|string',
        ]);

        $post->comments()->create([
            'user_id' => auth()->id(),
            'body' => $request->body,
        ]);

        return redirect()->route('posts.show', $post);
    }
}
