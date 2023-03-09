<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Post;

class PostController extends Controller
{

    public function index(Request $request)
    {
        $posts = Post::all();
     
        return view('posts.index', compact('posts'));
   
    }

    public function create()
    {
        return view('posts.create');
    }


    public function store(StoreRequest $request)
    {   $validated = $request->validated();

        $post = Post::query()->create([
            'name' => $validated['name'],
            'text' => $validated['text'],
            'user_id' => Auth()->user()->id,
        ]);
        $post->save();
        return redirect()->route('posts.index');

   
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}
