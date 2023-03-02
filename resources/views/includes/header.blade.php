<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand">
             Instagram 
        </a>

        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link active" aria-current="page">
                        {{ __('Главная') }}
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('posts.index') }}" class="nav-link" aria-current="page">
                        {{ __('posts') }}
                    </a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto mb-2 mb-md-0">
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
            </ul>
        </div>
    </div>
</nav>