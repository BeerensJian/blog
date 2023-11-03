<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
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
        return view('posts.show', ['post' => $post->load('comments')]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        // validate the form data, check for id exists on category
        $params = request()->validate([
            "title" => ["required", "string"],
            "excerpt" => "required",
            "body" => "required",
            "category_id" => ["required", Rule::exists('categories', 'id')]
        ]);

        // associate the user with the post
        $params["user_id"] = auth()->user()->id;
        Post::create($params);


        return redirect('/')->with('success', 'Post successfully created.');

    }
}
