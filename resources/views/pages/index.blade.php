@extends('layout.head')
<header class="header">
    <div class="container header__container">
        <nav class="header__nav">
            <a class="header__link" href="#about">О ресурсе</a>
            <a class="header__link" href="#index-lesson">Уроки</a>
            <a class="header__link" href="#index-teacher">Преподаватели</a>
            <a class="header__link" href="#index-teacher">Отзывы</a>
            <a class="header__link" href="#contact">Контакты</a>
        </nav>
        <button class="btn header__button">Войти</button>
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
            <ul class="index-lesson__list">
                @foreach ($lessons as $lesson)
                    @dd($lesson)
                    <li class="index-lesson__item style-item">
                        <div class="lesson__item_top">
                            <div class="lesson__item_top_left">
                                <a class="lesson__item_title" href="">Термоядерный синтез</a>
                                <a class="lesson__item_course ui-color" href="">Физика</a>
                            </div>
                            <div class="lesson__item_right">
                                <img class="lesson__item_img" src="/img/2.jpg" alt="" width="150">
                            </div>
                        </div>
                        <p class="lesson__item_desrcription">Lorem ipsum dolor sit amet consectetur, adipisicing
                            elit. Veritatis commodi animi veniam ea corrupti facilis molestias voluptatem, pariatur
                            enim facere consectetur perspiciatis impedit, cupiditate ut cum, dicta odit numquam quo?
                        </p>
                        <a class="btn lesson__item_btn" href="">Посмотреть</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="index-teacher" id="index-teacher">
        <div class="container index-teacher__container">
            <h2 class="title index-teacher__title">Преподаватели</h2>
            <ul class="index-teacher__list">
                <li class="index-teacher__item style-item">
                    <div class="index-teacher__image">
                        <img class="index-teacher__img" src="/img/2.jpg" alt="" width="100%">
                    </div>
                    <div class="index-teacher__name">Олег Олег</div>
                    <ul class="index-teacher__info">
                        <div class="index-teacher__info_item">
                            <strong>Специализация:</strong> Физика
                        </div>
                        <div class="index-teacher__info_item">
                            <strong>Опыт работы:</strong> 8 лет
                        </div>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <div class="contact" id="contact">
        <div class="container contact__container">
            <h2 class="title contact__title">Контакты</h2>
            <div class="contact__flex">
                <div class="contact__left">
                    <a class="contact__link" href="">
                        <span>Номер телефона: 7 (999) 999-99-99</span>
                    </a>
                    <a class="contact__link" href="">
                        <span>E-mail: support@ege.ru</span>
                    </a>
                    <a class="contact__link" href="">
                        <span>Адрес: г. Москва, ул. Нет</span>
                    </a>
                </div>
                <div class="contact__right">
                    <div class="contact__map"></div>
                </div>
            </div>
        </div>
    </div>
</main>
@extends('layout.footer')
