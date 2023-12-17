@extends('layout.index')

@section('html')
    <main class="main">
        <div class="lesson">
            <div class="lesson__banner">
                <div class="container">
                    <h1 class="title lesson__title">{{ $lesson->title }}</h1>
                </div>
            </div>
            <div class="container">
                <div class="lesson__description paragraphs">{!! $lesson->description !!}</div>
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
                {{-- <form class="lesson-form">
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
                            <textarea class="input lesson-form__input" type="text" name="answer" rows="3" required></textarea>
                        </label>
                        <label class="label lesson-form__label">
                            <span>Файл</span>
                            <input class="input lesson-form__input" type="file" name="answer_file_id"
                                accept=".pdf,.doc,.docx,.txt">
                        </label>
                    </div>
                    <button class="btn lesson-form__btn">Отправить</button>
                </form> --}}
            </div>
        </div>
    </main>
@endsection
