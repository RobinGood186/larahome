@extends('layouts.base')

@section('page.title')
    Страница постов
@endsection

@section('content')
    <h1>
        Посты
    </h1>    

    @if(empty($post))

        no posts

        
    @else 


            <div>
                {{ $post->id}}  {{ $post->name}}  {{ $post->text}} {{ $post->user_id}} 
            </div>
            <div>
                <a href="{{ route('posts.index')}}"> back</a>
            </div>
        
    @endif

    @if(Auth::user()->id == $post->user_id)

    <form action="{{ route('posts.destroy', $post->id)}}" method="POST">
        @csrf
        @method('delete')

        <input type="submit" value="Delete">
 
    </form>
           
       
    @endif

    

    
@endsection