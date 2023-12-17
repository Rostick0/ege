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
                        <form class="lesson-form" action="/homework" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="lesson_id" value="{{ $lesson->id }}" required>
                            <div class="lesson-form__fields">
                                <label class="label lesson-form__label">
                                    <span>Комментарий к работе</span>
                                    <textarea class="input lesson-form__input" name="comment" rows="3" maxlength="65536"></textarea>
                                    @error('comment')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </label>
                                <label class="label lesson-form__label">
                                    <span>Файл</span>
                                    <input class="input lesson-form__input" type="file" name="file"
                                        accept=".pdf,.doc,.docx,.txt" required>
                                    @error('file')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
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
