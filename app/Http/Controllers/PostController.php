<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): View
    {
        // declared filter method as query scope on filter model
        return view('posts', [
            'posts' => Post::with(['category', 'author'])->filter(request(['search', 'category']))->latest()->get(),
            'categories' => Category::all()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', ['post' => $post]);
    }
}
