@props(['lessons'])

<ul class="index-lesson__list">
    @foreach ($lessons as $lesson)
        <li class="index-lesson__item style-item">
            <div class="lesson__item_top">
                <div class="lesson__item_top_left">
                    <a class="lesson__item_title" href="/lesson/{{ $lesson->id }}">{{ $lesson->title }}</a>
                    <br>
                    <a class="lesson__item_course ui-color"
                        href="/course/{{ $lesson->course_id }}">{{ $lesson->course->title }}</a>
                </div>
                <div class="lesson__item_right">
                    <img class="lesson__item_img" src="{{ $lesson->image?->path }}" alt="" width="150">
                </div>
            </div>
            <div class="lesson__item_desrcription">{!! mb_substr($lesson->description, 0, 100) . '...' !!}</div>
            <a class="btn lesson__item_btn" href="/lesson/{{ $lesson->id }}">Посмотреть</a>
        </li>
    @endforeach
</ul>
