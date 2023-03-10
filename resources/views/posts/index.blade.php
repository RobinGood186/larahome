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
        <a href="{{ route('posts.create')}}" type="" class="btn btn-primary">
            {{ __('+')}}
        </a>
    </h1>   
    @if(empty($posts))

    no posts
@else 
    @foreach ($posts as $post)


    <div class="card">
    <div class="card-body">
            <a href="{{ route('posts.show', $post->id)}}">
                {{ $post->name}}  {{ $post->text}} {{ $post->user_id}}  {{ $post->image}}
            </a>
                <img src="{{ asset('storage/'.$post->image)}}"> 
 
    </div>
    </div>
        
    @endforeach
    
@endif
</div></div></div></div></div>

@endsection
