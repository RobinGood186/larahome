<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;


class HomeController extends Controller
{
    public function __invoke()
    {
        $posts = Post::where('user_id', Auth::user()->id)->get();
               
        return view('home.index', compact('posts'));
    }
}
