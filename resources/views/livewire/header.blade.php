<header>
    <div class="container-lg">
        <div class="header-content">
            <a wire:navigate href="{{route("index");}}" class="logo">
                <svg width="80px" height="80px" viewBox="0 0 48 48" id="a" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                    <style>.b{fill:none;stroke:#000000;stroke-linecap:round;stroke-linejoin:round;}</style>
                    </defs>
                    <g>
                    <line class="b" x1="12" y1="39" x2="36" y2="39"/>
                    <rect class="b" x="4.5" y="9" width="39" height="26" rx="2" ry="2"/>
                    </g>
                    <polygon class="b" points="29.8597 22 20.1403 16.404 20.1403 27.596 29.8597 22"/>
                </svg>
            </a>
            @guest
                <div class="header-lk">
                    <a wire:navigate class="btn btn-primary" href="{{route('login');}}">Вход</a>
                    <a wire:navigate class="btn btn-primary" href="{{route('register');}}">Регистрация</a>
                </div>
            @endguest
            @auth
                <div class="header-lk">
                    <a class="btn btn-primary" href="">Личный кабинет</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <input type="submit" value="Выход" class="btn btn-danger">
                    </form>
                </div>
            @endauth
        </div>
    </div>
</header>
