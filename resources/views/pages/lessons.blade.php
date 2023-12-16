<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="container header__container">
                <nav class="header__nav">
                    <a class="header__link" href="#about">О ресурсе</a>
                    <a class="header__link" href="#index-lesson">Уроки</a>
                    <a class="header__link" href="#index-teacher">Преподаватели</a>
                    <a class="header__link" href="#index-teacher">Отзывы</a>
                    <a class="header__link" href="#contact">Контакты</a>
                </nav>
                <a class="btn header__button">Войти</a>
            </div>
        </header>
        <main class="main">
            <div class="lesson">
                <div class="lesson__banner">
                    <div class="container">
                        <h1 class="title lesson__title">Урок какой</h1>
                    </div>
                </div>
                <div class="container">
                    <div class="lesson__description">Данный урок состоит из</div>
                    <!-- <form class="lesson-form">
                        <div class="lesson-form__fields">
                            <label class="label lesson-form__label">
                                <span>Комментарий к работе</span>
                                <textarea class="input lesson-form__input" type="text" name="comment" rows="3"></textarea>
                            </label>
                            <label class="label lesson-form__label">
                                <span>Файл</span>
                                <input class="input lesson-form__input" type="file" name="file" accept=".pdf,.doc,.docx,.txt" required>
                            </label>
                        </div>
                        <button class="btn lesson-form__btn">Отправить</button>
                    </form> -->
                    <form class="lesson-form">
                        <div class="lesson-form__fields">
                            <label class="label lesson-form__label">
                                <span>Отметка</span>
                                <select class="input" name="mark">
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                </select>
                            </label>
                            <label class="label lesson-form__label">
                                <span>Ответ к заданию</span>
                                <textarea class="input lesson-form__input" type="text" name="answer" rows="3"
                                    required></textarea>
                            </label>
                            <label class="label lesson-form__label">
                                <span>Файл</span>
                                <input class="input lesson-form__input" type="file" name="answer_file_id"
                                    accept=".pdf,.doc,.docx,.txt">
                            </label>
                        </div>
                        <button class="btn lesson-form__btn">Отправить</button>
                    </form>
                </div>

            </div>

        </main>
        <footer class="footer">
            <div class="container footer__container"></div>
        </footer>
    </div>

    <script src="script.js"></script>
</body>

</html>