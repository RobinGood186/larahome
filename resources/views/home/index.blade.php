@extends('layouts.base')

@section('page.title')
    Моя страница
@endsection

@section('content')
<h1>
    Моя страница
    <a href="{{ route('posts.create')}}" type="" class="btn btn-primary">
        {{ __('+')}}
    </a>
</h1>  





@foreach ($posts as $post)

<div>
    <a href="{{ route('posts.show', $post->id)}}">
        {{ $post->name}}  {{ $post->text}} {{ $post->user_id}} 
    </a>
</div>

@endforeach


@endsection
