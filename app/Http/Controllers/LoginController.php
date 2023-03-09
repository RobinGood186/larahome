<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\Login\StoreRequest;

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

    public function store(StoreRequest $request)
    {
       $login = $request->validated();

       if (!Auth::attempt($request->only(['email', 'password']), $request->has('remember') ))

       if (Auth::attempt($login)) {
           $request->session()->regenerate();

           return redirect()->intended('home');
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
