@extends('layouts.base')

@section('page.title')
    Страница постов
@endsection

@section('content')
    <h1>
        Пользователь
    </h1>    

    <div class="card-body">
        <form action="{{ route('users.update', $user->id)}}" method="POST">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label>{{ __('имя') }} </label>
                <input type=" name" name="name" class="form-control"
                value="{{  $user->name }}">

            </div>
            <div class="mb-3">
                <label>{{ __('Email') }} </label>
                <input type="email" name="email" class="form-control"
                value="{{  $user->email}}">

            </div>



            <div class="mb-3">
                <label>{{ __('role') }} </label>
                <input type="role" name="role" class="form-control" 
                value="{{ $user->role }}">
            </div>



            <button type="submit" class="btn btn-primary">
                {{ __('Изменить')}}
            </button>
        </form>
    </div>
@endsection