@extends('layout.index')

@section('html')
    <main class="main">
        <div class="lesson">
            <div class="container">
                <div class="paragraphs">
                    @if ($homework->mark)
                        <p>Уже оцено</p>
                    @endif
                    <p>
                        <strong>Пользователь:</strong> {{ $homework->student->name }}
                    </p>
                    <p>
                        <strong>Текст:</strong> {{ $homework->comment ?? '-' }}
                    </p>
                    <p>
                        <strong>Файл:</strong>
                        @if ($homework->file)
                            <a class="ui-color" href="{{ Storage::url($homework->file->path) }}" download>Скачать</a>
                        @else
                            -
                        @endif
                    </p>
                </div>
                <br>
                <br>
                <form class="lesson-form" action="/homework/{{ $homework->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input name="_method" value="PATCH" type="hidden">
                    <div class="lesson-form__fields">
                        <label class="label lesson-form__label">
                            <span>Отметка</span>
                            <select class="input" name="mark">
                                @foreach ([5, 4, 3, 2, 1] as $mark)
                                    <option value="{{ $mark }}" @if ($homework->mark == $mark) selected @endif>
                                        {{ $mark }}</option>
                                @endforeach
                            </select>
                        </label>
                        <label class="label lesson-form__label">
                            <span>Ответ к заданию</span>
                            <textarea class="input lesson-form__input" type="text" name="answer" rows="3" required>{{ $homework->answer }}</textarea>
                        </label>
                        <label class="label lesson-form__label">
                            <span>Файл</span>
                            <input class="input lesson-form__input" type="file" name="answer_file"
                                accept=".pdf,.doc,.docx,.txt">
                        </label>
                        @if ($homework->answer_file_id)
                            <label class="label">
                                <span>Файл загруженный ранее</span>
                                <a class="ui-color" href="{{ Storage::url($homework->answer_file->path) }}"
                                    download>Скачать</a>
                            </label>
                        @endif
                    </div>
                    <button class="btn lesson-form__btn">Отправить</button>
                </form>
            </div>
            <br>
            <div class="lesson__banner">
                <div class="container">
                    <h1 class="title lesson__title">{{ $homework->lesson->title }}</h1>
                </div>
            </div>
            <div class="container">
                <div class="lesson__description paragraphs">{!! $homework->lesson->description !!}</div>
            </div>
        </div>
    </main>
@endsection
