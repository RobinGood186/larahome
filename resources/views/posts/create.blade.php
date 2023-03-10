@extends('layouts.base')

@section('page.title')
    Страница постов
@endsection

@section('content')
<div class="container w-50">
    <div class="card-body">
        <h1>
            Добавить пост
        </h1>   
    </div>


    <div class="card-body">
        <form action="{{ route('posts.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label>{{ __('name') }} </label>
                <input type="name" name="name" class="form-control" autofocus>

            </div>

        <div class="mb-3">
            <label>{{ __('text') }} </label>
            <input type="text" name="text" class="form-control" >
        </div>
   
        <div class="form-group">
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image">
                </div>
            </div>
        </div>
    



            <div class="mb-3">
            <button type="submit" class="btn btn-primary">
                {{ __('Создать')}}
            </button>
            </div>
        </form>
    </div>
</div>
@endsection