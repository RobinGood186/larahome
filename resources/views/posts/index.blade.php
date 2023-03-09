@extends('layouts.base')

@section('page.title')
    Страница постов
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6 offset-md-3">
            <div class="card">
                <div class="card-body">
                   
    <h1>
        Посты
    </h1>   




    @if(empty($posts))

    no posts
@else 
    @foreach ($posts as $post)

        <div>
            <a href="{{ route('posts.show', $post->id)}}">
                {{ $post->name}}  {{ $post->text}} {{ $post->user_id}} 
            </a>
        </div>
        
    @endforeach
    
@endif
</div></div></div></div></div>

@endsection
