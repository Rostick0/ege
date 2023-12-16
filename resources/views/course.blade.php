@extends('layout.index')

@section('html')
    {{-- @dd($course) --}}
    <main class="main" style="padding-top:0">
        <div class="course">
            <div class="course__banner banner">
                <div class="container">
                    <h1 class="title banner__title course__title">{{ $course->title }}</h1>
                </div>
            </div>
            <div class="container course__container">
                <div class="course__description_short">
                    <h2 class="title course__title">О чем курс:</h2>
                    <div class="course__paragraphs">{!! $course->short_description !!}</div>
                </div>
                <div class="course__grid">
                    <div class="course__plan">
                        <div class="coures__plan_title ui-color">
                            План:
                        </div>
                        <br>
                        <ol class="coures__plan_list">{!! $course->plan !!}</ol>
                    </div>
                    <div class="course__durationf">
                        <div class="ui-color">Длительность:</div>
                        <br>
                        <strong class="course__durationf_count">{!! $course->duration !!} дней</strong>

                    </div>
                </div>
                <div class="course__description">
                    <h2 class="title course__title">Описание:</h2>
                    <div class="course__paragraphs">{!! $course->description !!}</div>
                </div>
                <div class="course-buy">
                    <button class="btn course-buy__button">Приобрести</button>
                    <div class="course-buy__text ui-color">За {{ number_format($course->price, 0, '.', ' ') }} рублей</div>
                </div>
            </div>
        </div>
    </main>
@endsection
