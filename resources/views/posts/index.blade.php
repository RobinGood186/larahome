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

            <div>
                {{ $post }}
            </div>
            
        @endforeach
        
    @endif
@endsection
