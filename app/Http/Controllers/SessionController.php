<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function destroy()
    {
        $name = auth()->user()->name;
        auth()->logout();
        return redirect('/')->with('success', 'See you next time ' . $name);
    }
}
