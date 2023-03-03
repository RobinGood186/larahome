<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function index()
    {
        return view('login.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
       $credentials = $request->validate([
           'email' => ['required', 'email'],
           'password' => ['required'],
       ]);

       if (Auth::attempt($credentials)) {
           $request->session()->regenerate();

           return redirect()->intended('posts');
       }

       return back()->withErrors([
           'email' => 'The provided credentials do not match our records.',
       ]);

    }

    public function show(string $id)
    {
        
    }
    public function edit(string $id)
    {
        
    }
    public function update(Request $request, string $id)
    {
        
    }
    public function destroy(string $id)
    {
 
    }
}
