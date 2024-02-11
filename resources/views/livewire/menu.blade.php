<div class="left-menu">
    <ul class="menu-links">
        <li class="menu-links__link"><a wire:navigate href="{{route('index');}}">Главная</a></li>
        @auth
            <li class="menu-links__link"><a wire:navigate href="">Мои видео</a></li>
            <li class="menu-links__link"><a wire:navigate href="{{route('video-page');}}">Добавить видео</a></li>    
        @endauth
    </ul>
</div>
