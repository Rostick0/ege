@include('layout.head')
<header class="header">
    <div class="container header__container">
        <nav class="header__nav">
            <a class="header__link" href="/">О ресурсе</a>
            <a class="header__link" href="/lesson">Уроки</a>
            <a class="header__link" href="/teachers">Преподаватели</a>
            <a class="header__link" href="/contact">Контакты</a>
        </nav>
        @auth
            <a class="btn header__button"
                href="{{ auth()->user()->role === 'teacher' ? route('teacher') : route('student') }}">Профиль</a>
        @endauth
        @guest
            <a class="btn header__button" href="{{ route('login') }}">Войти</a>
        @endguest
    </div>
</header>
