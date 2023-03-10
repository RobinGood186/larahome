




<nav class="navbar fixed-top navbar-expand-sm navbar-light bg-light navbar-dark bg-dark">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link active" aria-current="page">
                        {{ __('Моя страница') }}
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('posts.store') }}" class="nav-link" aria-current="page">
                        {{ __('Посты') }}
                    </a>
                </li>
                @can('view', auth()->user())
                    <li class="nav-item">
                        <a href="{{ route('users.store') }}" class="nav-link" aria-current="page">
                            {{ __('Пользователи') }}
                        </a>
                    </li>
                @endcan
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                @if (Auth::guest())
                    
                
                <li class="nav-item">
                    <a href="{{ route('register.index') }}" class="nav-link active" aria-current="page">
                        {{ __('Регистрация') }}
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="{{ route('login.index') }}" class="nav-link active" aria-current="page">
                        {{ __('Вход') }}
                    </a>
                </li>
                @else

                <li class="nav-item">
                    <a href="{{ route('logout.store') }}" class="nav-link active" aria-current="page">

                        {{ __('выйти')}}
                    </a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>