@extends('layouts.base')

@section('page.title')
    Страница постов
@endsection

@section('content')
    <h1>
        Пользователь
    </h1>    

    @if(empty($user))

        no user
    @else 


            <div><br>
                {{ $user->id}} {{ $user->email}} {{ $user->name}} {{ $user->role}} 
            </div>
            <div>
                <a href="{{ route('users.index')}}"> назад</a>

                <a href="{{ route('users.edit', $user->id)}}"> изменить</a>
            </div>
           
    @endif
@endsection