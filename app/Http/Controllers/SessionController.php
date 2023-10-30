<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;


class SessionController extends Controller
{
    public function store()
    {
        // if the validation fails -> redirects to previous page with errors
        $params = request()->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);


        if (Auth::attempt($params)) {
            return redirect('/')->with('success', 'Welcome back');
        }

        // if the username and password dont match an account
        throw ValidationException::withMessages(['email' => 'Invalid email and password combination']);
    }

    public function create()
    {
        return view('session.create');
    }

    public function destroy()
    {
        $name = auth()->user()->name;
        auth()->logout();
        return redirect('/')->with('success', 'See you next time ' . $name);
    }
}
