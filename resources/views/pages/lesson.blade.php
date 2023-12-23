@extends('layout.index')

@section('html')
    <main class="main">
        <div class="lesson">
            <div class="lesson__banner banner" style="background-image: url({{$lesson->image->path}})">
                <div class="container">
                    <h1 class="title lesson__title banner__title">{{ $lesson->title }}</h1>
                </div>
            </div>
            <div class="container">
                <div class="lesson__description paragraphs">{!! $lesson->description !!}</div>

                @auth
                    @if ($lesson->has_homework && auth()->user()->role === 'student' && $lesson->course->myBue)
                        @if (!$lesson->myHomework)
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
                        @else
                            <strong>Задание загружено</strong>
                            <div>
                                <strong>Оценка:</strong> {{ $lesson->myHomework->mark ?? '(Ожидание)' }}
                            </div>
                            <div>
                                <strong>Файл с
                                    исправлениями:</strong>
                                {!! $lesson->myHomework->answer_file ? '<a class="ui-color" href="' . Storage::url($lesson->myHomework->answer_file->path) . '">Посмотреть</a>' : '-' !!}
                            </div>
                            <div>
                                <strong>Ответ от преподавателя:</strong> {{ $lesson->myHomework->answer ?? '-' }}
                            </div>
                            <br>
                            @if ($lesson->myHomework->status !== 'marked')
                                <form action="/homework/{{ $lesson->myHomework->id }}" method="POST">
                                    @csrf
                                    <input class="input" name="_method" value="delete" type="hidden">
                                    <button class="error">Удалить решение</button>
                                </form>
                            @endif
                        @endif
                    @endif
                @endauth
            </div>
        </div>
    </main>
@endsection
