<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $params = request()->validate([
            "name" => 'required|max:255',
            "username" => 'required|min:5|max:255|unique:users,username',
            "email" => 'required|email|max:255|unique:users,email',
            "password" => 'required|min:8|max:255'
        ]);

        $user = User::create($params);

        auth()->login($user);

        return redirect('/')->with('success', 'Your account has been successfully created');

    }
}
