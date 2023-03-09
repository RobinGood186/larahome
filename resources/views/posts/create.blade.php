@extends('layouts.base')

@section('page.title')
    Страница постов
@endsection

@section('content')
<div class="card-body">
    <h1>
        Добавить пост
    </h1>   

</div>


    <div class="card-body">
        <form action="{{ route('posts.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label>{{ __('name') }} </label>
                <input type="name" name="name" class="form-control" autofocus>

            </div>

    </div>
    <div class="card-body">

            <div class="mb-3">
                <label>{{ __('text') }} </label>
                <input type="text" name="text" class="form-control" >

            </div>
            <div class="mb-3">
            <button type="submit" class="btn btn-primary">
                {{ __('Создать')}}
            </button>
        </form>
    </div>
@endsection