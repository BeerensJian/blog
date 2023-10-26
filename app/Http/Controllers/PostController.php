<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index()
    {
        // declared filter method as query scope on filter model
        return view('posts.index', [
            'posts' => Post::with(['category', 'author'])->filter(request(['search', 'category', 'author']))->latest()->paginate()->withQueryString(),
            'categories' => Category::all()
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }
}
