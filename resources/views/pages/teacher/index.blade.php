@extends('layout.index')

@section('html')
    <main class="main">
        <div class="index-lesson" id="index-lesson">
            <div class="container index-lesson__container">
                <h2 class="title index-lesson__title">Ожидают оценки</h2>
                <table class="mark-table">
                    <tr>
                        <th class="mark-table__th">Название урока</th>
                        <th class="mark-table__th">Курс</th>
                        <th class="mark-table__th">Имя пользователя</th>
                        <th class="mark-table__th">Действие</th>
                    </tr>
                    @foreach ($homeworks as $homework)
                        <tr>
                            {{-- @dd($homework) --}}
                            <td class="mark-table__td">
                                <a class="ui-color"
                                    href="/lesson/{{ $homework->lesson->id }}">{{ $homework->lesson->title }}</a>
                            </td>
                            <td class="mark-table__td">
                                <a class="ui-color" href="/course/{{ $homework->lesson->course_id }}">
                                    {{ $homework->lesson?->course?->title }}</a>
                            </td>
                            <td>{{ $homework->student?->name }}</td>
                            <td class="mark-table__td">
                                <a class="btn" href="/teacher/homework/{{ $homework->id }}">Оценить</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
                {{ $homeworks->appends(Request::all())->links('vendor.pagination') }}
                <br>
                <br>
                <h2 class="title index-lesson__title">Оцененно</h2>
                <table class="mark-table">
                    <tr>
                        <th class="mark-table__th">Название урока</th>
                        <th class="mark-table__th">Курс</th>
                        <th class="mark-table__th">Имя пользователя</th>
                        <th class="mark-table__th">Действие</th>
                    </tr>
                    @foreach ($homeworks_marked as $homework)
                        <tr>
                            {{-- @dd($homework) --}}
                            <td class="mark-table__td">
                                <a class="ui-color"
                                    href="/lesson/{{ $homework->lesson->id }}">{{ $homework->lesson->title }}</a>
                            </td>
                            <td class="mark-table__td">
                                <a class="ui-color" href="/course/{{ $homework->lesson->course_id }}">
                                    {{ $homework->lesson?->course?->title }}</a>
                            </td>
                            <td>{{ $homework->student?->name }}</td>
                            <td class="mark-table__td">
                                <a class="btn" href="/teacher/homework/{{ $homework->id }}">Изменить</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
                {{ $homeworks_marked->appends(Request::all())->links('vendor.pagination') }}
            </div>
        </div>
    </main>
@endsection
