<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(50);
        return view('admin.posts.index', [
            "posts" => $posts
        ]);
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', [
            'categories' => Category::all(),
            'post' => $post
        ]);
    }

    public function update()
    {
        dd('update endpoint hit');
    }

}
