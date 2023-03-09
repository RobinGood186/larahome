<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\Admin\UpdateRequest;


class UserController extends Controller
{

    public function index()
    {

       
        $admins = User::where('role', 'admin')->get();

        $users = User::where('role', 'user')->get();
     
        return view('users.index', compact('users','admins'));
   
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {

   
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }


    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }


    public function update(UpdateRequest $request, User $user)
    {   
      $validated = $request->validated();

        $user->update($validated);
        return redirect()->route('users.show', $user->id);

    }


    public function destroy(string $id)
    {
        //
    }
}
