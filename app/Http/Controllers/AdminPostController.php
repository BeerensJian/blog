<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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

    public function update(Post $post)
    {
        $params = request()->validate([
            "title" => ["required", "string"],
            "excerpt" => "required",
            "body" => "required",
            "category_id" => ["required", Rule::exists('categories', 'id')],
            "thumbnail" => ["image", 'mimes:jpeg,png,jpg,gif,svg']
        ]);

        if (isset($params['thumbnail'])) {
            $params['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }

        $post->update($params);

        return redirect('/')->with('success', 'post updated!');
    }

}
