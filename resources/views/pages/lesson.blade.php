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
                @auth
                    @if ($lesson->has_homework && auth()->user()->role === 'student')
                        <form class="lesson-form" action="" method="POST">
                            @csrf
                            <input type="hidden" name="" value="">
                            <div class="lesson-form__fields">
                                <label class="label lesson-form__label">
                                    <span>Комментарий к работе</span>
                                    <textarea class="input lesson-form__input" type="text" name="comment" rows="3"></textarea>
                                </label>
                                <label class="label lesson-form__label">
                                    <span>Файл</span>
                                    <input class="input lesson-form__input" type="file" name="file"
                                        accept=".pdf,.doc,.docx,.txt" required>
                                </label>
                            </div>
                            <button class="btn lesson-form__btn">Отправить</button>
                        </form>
                    @endif
                @endauth
            </div>
        </div>
    </main>
@endsection
