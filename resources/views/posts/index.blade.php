@extends('layouts.base')

@section('page.title')
    Страница постов
@endsection

@section('content')
    <h1>
        Посты
    </h1>    

    @if(empty($posts))

        no posts
    @else 
        @foreach ($posts as $post)

            <div><br>
                {{ $post->id}} {{$post->email}}
            </div>
            
        @endforeach
        
    @endif
@endsection
