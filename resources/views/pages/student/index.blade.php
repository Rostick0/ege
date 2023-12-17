@extends('layout.index')

@section('html')
    <main class="main">
        <div class="index-lesson" id="index-lesson">
            <div class="container index-lesson__container">
                <h2 class="title index-lesson__title">Доступные уроки</h2>
                <form class="form-search" action="{{ url()->current() }}">
                    <input class="input" style="flex-grow: 1" name="title" placeholder="Название" type="search"
                        value="{{ Request::get('title') }}">
                    <select class="input" name="course_id">
                        <option value hidden @if (!Request::get('course_id')) selected @endif>Курс</option>
                        <option value>Любой</option>
                        @foreach ($courses as $course)
                            <option value="{{ $course->id }}" @if (Request::get('course_id') == $course->id) selected @endif>
                                {{ $course->title }}</option>
                        @endforeach
                    </select>
                    <button class="btn">Поиск</button>
                </form>
                <x-lessons :lessons="$lessons" />
                {{ $lessons->appends(Request::all())->links('vendor.pagination') }}
                <br>
                <br>
                <h2 class="title index-lesson__title">Оценки</h2>
                <table class="mark-table">
                    <tr>
                        <th class="mark-table__th">Название урока</th>
                        <th class="mark-table__th">Курс</th>
                        <th class="mark-table__th">Оценка</th>
                    </tr>
                    @foreach ($lessons_mark as $lesson)
                        <tr>
                            <td class="mark-table__td">
                                <a class="ui-color" href="/lesson/{{ $lesson->id }}">{{ $lesson->title }}</a>
                            </td>
                            <td class="mark-table__td">
                                <a class="ui-color" href="/course/{{ $lesson->course_id }}">
                                    {{ $lesson->course?->title }}</a>
                            </td>
                            <td class="mark-table__td">
                                <strong>{{ $lesson->myHomework?->mark }}</strong>
                            </td>
                        </tr>
                    @endforeach
                </table>

                {{ $lessons_mark->appends(Request::all())->links('vendor.pagination') }}
            </div>
        </div>
    </main>
@endsection
