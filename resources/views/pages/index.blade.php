@include('layout.head')

<header class="header">
    <div class="container header__container">
        <nav class="header__nav">
            <a class="header__link" href="#about">О ресурсе</a>
            <a class="header__link" href="#index-lesson">Уроки</a>
            <a class="header__link" href="#index-teacher">Преподаватели</a>
            <a class="header__link" href="#contact">Контакты</a>
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
<main class="main index-main">
    <div class="about" id="about">
        <div class="container about__container">
            <h2 class="title about__title">О ресурсе</h2>
            <div class="about__content">
                <div class="about__content_flex">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut doloremque velit, omnis
                        maiores aspernatur inventore quod ab repellendus impedit debitis cum neque. Voluptatibus
                        alias corrupti eius velit. Animi, quam molestias?
                    </p>
                    <img class="about__img" src="/img/2.jpg" alt="" width="400">
                </div>
                <div class="about__content_text">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro quis omnis nam saepe
                        nobis asperiores tenetur eligendi magnam deserunt placeat deleniti similique totam ea
                        iure eos, recusandae corporis mollitia blanditiis?</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro quis omnis nam saepe
                        nobis asperiores tenetur eligendi magnam deserunt placeat deleniti similique totam ea
                        iure eos, recusandae corporis mollitia blanditiis?</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro quis omnis nam saepe
                        nobis asperiores tenetur eligendi magnam deserunt placeat deleniti similique totam ea
                        iure eos, recusandae corporis mollitia blanditiis?</p>
                </div>
            </div>
        </div>
    </div>

    <div class="index-lesson" id="index-lesson">
        <div class="container index-lesson__container">
            <h2 class="title index-lesson__title">Уроки</h2>
            <x-lessons :lessons="$lessons" />
        </div>
    </div>

    <div class="index-teacher" id="index-teacher">
        <div class="container index-teacher__container">
            <h2 class="title index-teacher__title">Преподаватели</h2>
            <x-teachers :teachers="$teachers" />
        </div>
    </div>

    <x-contact />
</main>

@include('layout.footer')
