<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    // validate the user input
    // if the user input is correct : find the post, create a comment for it
    // redirect to previous page

    public function store()
    {
        if (!auth()->check()) {
            return redirect()->back()->withErrors(['auth' => 'You need to be logged in to post a comment']);
        }

        dd('woof');
        request()->validate([
           "body" => "required|string"
        ]);


    }
}
