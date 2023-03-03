<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PostController extends Controller
{

    public function index(Request $request)
    {
        $posts = User::query()->get(['id','email']);
     
        return view('posts.index', compact('posts'));
   
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {

   
    }

    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
