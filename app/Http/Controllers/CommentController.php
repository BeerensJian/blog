<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Post $post)
    {
        if (!auth()->check()) {
            return redirect()->back()->withErrors(['auth' => 'You need to be logged in to post a comment']);
        }

        $params = request()->validate([
           "body" => "required|string"
        ]);

        $post->comments()->create([
            'body' => $params['body'],
            'user_id' => auth()->user()->id
        ]);

        return redirect()->back()->with('success', 'comment succesfully created!');
    }
}
