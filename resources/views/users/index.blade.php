@extends('layouts.base')

@section('page.title')
    Страница пользователей
@endsection

@section('content')
<nav class="navbar navbar-expand-md navbar-light">
<div class="container">

        <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
                 <h1>
                     Пользователи
                 </h1>    

            @if(empty($users))

                  no users
            @else 
            @foreach ($users as $user)

                <div>
                    <a href="{{ route('users.show', $user->id)}}">
                       {{ $user->id}} {{ $user->email}} {{ $user->name}} {{ $user->role}} 
                    </a>
                </div>
            
            @endforeach
        
            @endif
            </li>
        </ul>

        <ul class="navbar-nav ms-auto mb-2 mb-md-0">
            <li class="nav-item">
                <h1>
                    Админы
                </h1>
                @if(empty($admins))

                no users
            @else 
            @foreach ($admins as $admin)

              <div>
                  <a href="{{ route('users.show', $admin->id)}}">
                     {{ $admin->id}} {{ $admin->email}} {{ $admin->name}} {{ $admin->role}} 
                  </a>
              </div>
            @endforeach
            @endif
            </li>
        </ul>
 
</div>
</nav>






@endsection